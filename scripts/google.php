<?php
session_start();
require_once('../config/cnx.php');
require_once('../vendor/autoload.php');


$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URL);
$client->addScope('email');
$client->addScope('profile');


if (!isset($_GET['code'])) {
        $auth_url = $client->createAuthUrl();
        header('Location:' . filter_var($auth_url, FILTER_SANITIZE_URL));
        exit;
} else {
        $client->authenticate($_GET['code']);
        $token = $client->getAccessToken();

        if (is_array($token) && isset($token['access_token'])) {
                $client->setAccessToken($token);

                if ($client->isAccessTokenExpired() && $client->getRefreshToken()) {
                        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                }
        } else {
                die('Erreur : Token Google invalide ou manquant.');
        }


        $oauth = new Google_Service_Oauth2($client);
        $google_user = $oauth->userinfo->get();

        $google_id = $google_user->id;
        $email = filter_var($google_user->email, FILTER_SANITIZE_EMAIL);
        $nom = htmlspecialchars($google_user->familyName);
        $prenom = htmlspecialchars($google_user->givenName);
        $avatar = filter_var($google_user->picture, FILTER_VALIDATE_URL);


        $sql = "SELECT * FROM utilisateurs WHERE oauth_id = :oauth_id AND oauth_provider = 'google'";
        $req = $pdo->prepare($sql);
        $req->execute([
                ':oauth_id' => $google_id
        ]);
        $result = $req->fetch();

        function generateUserRef($pdo)
        {
                do {
                        $ref = random_int(100000, 999999); // 6 chiffres
                        $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE ref_unique = ?");
                        $stmt->execute([$ref]);
                        $exists = $stmt->fetch();
                } while ($exists);

                return $ref;
        }
        
        
        if (!$result) {
                // Nouvel utilisateur => insertion
                $insert = $pdo->prepare("INSERT INTO utilisateurs (nom, prenom, email, avatar_url, oauth_provider, oauth_id, ref_unique) VALUES (:nom, :prenom, :email, :avatar_url, 'google', :oauth_id, :ref_unique)");
                $insert->execute([
                        ':nom' => $nom,
                        ':prenom' => $prenom,
                        ':email' => $email,
                        ':avatar_url' => $avatar,
                        ':oauth_id' => $google_id,
                        ':ref_unique' => $reference = generateUserRef($pdo)
                ]);

                $_SESSION['utilisateur'] = [
                        'id' => $pdo->lastInsertId(),
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'email' => $email,
                        'ref_unique' => $result['ref_unique']
                ];

                header('Location: ../accueil/index.php');
                exit;
        } else {
                $_SESSION['utilisateur'] = [
                        'id' => $result['id'],
                        'nom' => $result['nom'],
                        'prenom' => $result['prenom'],
                        'email' => $result['email'],
                        'ref_unique' =>$result['ref_unique']
                ];

                header('Location: ../accueil/index.php');
                exit;
        }


}
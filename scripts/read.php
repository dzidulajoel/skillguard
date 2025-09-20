<?php
session_start();
require_once('../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
        } else {
                echo "Aucun utilisateur connecté.";
        }
        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $image = $data['avatar_url'];

        // test
        $sql = "SELECT * FROM tests WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_t = $req->fetchAll(PDO::FETCH_ASSOC);

        //offre
        $sql = "SELECT * FROM offres WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_o = $req->fetchAll(PDO::FETCH_ASSOC);

        //candidat
        $sql = "SELECT  r.*,  u.nom AS nom_candidat, u.prenom as prenom_candidat,  u.email AS email_candidat,  t.titre AS titre_test,  o.titre AS titre_offre
        FROM resultats r
        INNER JOIN utilisateurs u ON r.candidat_id = u.id
        INNER JOIN tests t ON r.test_id = t.id
        INNER JOIN offres o ON t.offre_id = o.id
        WHERE r.utilisateur_id = :id";

        $req = $pdo->prepare($sql);
        $req->execute([
                ":id" => $id_session
        ]);
        $resultats_candidat = $req->fetchAll(PDO::FETCH_ASSOC);

        $sql = "SELECT * FROM resultats WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_candidat = $req->fetchAll(PDO::FETCH_ASSOC);

        $totalCandidats = count($data_candidat);
        $reussis = 0;
        $echoues = 0;

        foreach ($data_candidat as $candidat) {
                if ($candidat['statut'] === 'pass') {
                        $reussis++;

                } elseif ($candidat['statut'] === 'fail') {
                        $echoues++;
                }
        }

        
        // Éviter division par zéro
        $pourcentageReussite = $totalCandidats > 0 ? round(($reussis / $totalCandidats) * 100, 2) : 0;
        $pourcentageEchec = $totalCandidats > 0 ? round(($echoues / $totalCandidats) * 100, 2) : 0;

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

<?php
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

        //affichage offre pour candidat
        $sql = "SELECT * FROM offres";
        $req = $pdo->prepare($sql);
        $req->execute();
        $offre_candidats = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($offre_candidats as $offre) {
                // Première lettre de l'entreprise en majuscule
                $entreprise_nom = strtoupper(substr($offre['entreprise'], 0, 1));

                // Générer une couleur unique à partir du hash
                $hash = md5($entreprise_nom);
                $color = '#' . substr($hash, 0, 6);
        }

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

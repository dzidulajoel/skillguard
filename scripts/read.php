<?php
session_start();
require_once('../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
                $email = $_SESSION['email'];
                $role = $_SESSION['role'];

        } else {
                echo "Aucun utilisateur connecté.";
        }

        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data = $req->fetch(PDO::FETCH_ASSOC);

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
} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

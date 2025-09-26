<?php
session_start();
require_once('../../config/cnx.php');

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

        if (isset($_GET['id'])) {
                //test
                $id = $_GET['id'];
                $sql = "SELECT  *  FROM offres  WHERE id = :id AND utilisateur_id = :id_session";
                $req = $pdo->prepare($sql);
                $req->execute(array(
                        ":id" => $id,
                        ":id_session" => $id_session
                ));
                $offre = $req->fetch(PDO::FETCH_ASSOC);
        } else {
                echo "Aucun ID reçu.";
        }

        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_nom = $req->fetch(PDO::FETCH_ASSOC);

        $colors = [
                "Prêt" => "text-orange-600",
                "Suspendu" => "text-red-600",
                "Actif" => "text-green-600"
        ];

        $colorClass = $colors[$offre["statut"]] ?? "text-green-600";

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}
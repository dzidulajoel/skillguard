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

        if (isset($_GET['id'])) {
                //test
                $id = $_GET['id'];
                $sql = "SELECT  *  FROM offres  WHERE id = :id ";
                $req = $pdo->prepare($sql);
                $req->execute(array(
                        ":id" => $id,
                ));
                $offre = $req->fetch(PDO::FETCH_ASSOC);
        } else {
                echo "Aucun ID reçu.";
        }



        $colors = [
                "Prêt" => "text-orange-500",
                "Suspendu" => "text-red-500",
                "Actif" => "text-green-500"
        ];

        $colorClass = $colors[$offre["statut"]] ?? "text-green-500";

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}
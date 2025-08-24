<?php
require_once('../config/cnx.php');
session_start();

try {
        $email_session = $_SESSION['email'];
        $id_session = $_SESSION['id_utilisateur'];
        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data = $req->fetch(PDO::FETCH_ASSOC);
        
} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}
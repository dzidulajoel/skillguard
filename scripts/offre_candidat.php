<?php
session_start();
require_once('../../config/cnx.php');
require_once '../../vendor/autoload.php';
use Ramsey\Uuid\Uuid;

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
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

        //offre id pour passer le test
        $offre_id = $_GET['id'] ?? null;
        if (empty($offre_id) || !Uuid::isValid($offre_id)) {
                echo json_encode(['success' => false, 'message' => 'Identifiant de l\'offre manquant ou invalide.']);
                exit();
        }

        $sql = "SELECT  *  FROM tests  WHERE offre_id = :id ";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $offre_id,
        ));
        $data_offre_test = $req->fetch(PDO::FETCH_ASSOC);


} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}
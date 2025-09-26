<?php
session_start();
require_once('../../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
        } else {
                echo "Aucun utilisateur connecté.";
        }

        $candidat_id = $_GET['candidat'] ?? null;
        $test_id = $_GET['test'] ?? null;

        // test
        $sql = "SELECT * FROM tests WHERE  id = :test_id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":test_id" => $test_id
        ));
        $data_t = $req->fetch(PDO::FETCH_ASSOC);

        //candidat
        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $candidat_id
        ));
        $candidat_info = $req->fetch(PDO::FETCH_ASSOC);

        //current_user
        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $current_user = $req->fetch(PDO::FETCH_ASSOC);


        //proctorings
        $sql = "SELECT  *  FROM proctoring_logs  WHERE candidate_id = :candidate_id AND exam_id = :exam_id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":candidate_id" => $candidat_id,
                ":exam_id" => $test_id
        ));
        $data_logs = $req->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}
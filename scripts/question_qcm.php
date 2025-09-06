<?php
require_once __DIR__ . "/../config/cnx.php";
try {

        if (!isset($_SESSION['id_utilisateur'])) {
                exit("Aucun utilisateur connecté.");
        }

        $id_session = $_SESSION['id_utilisateur'];
        $email = $_SESSION['email'];
        $role = $_SESSION['role'];

        $sql = "SELECT * FROM utilisateurs WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute([":id" => $id_session]);
        $data_utilisateur = $req->fetch(PDO::FETCH_ASSOC);

        if (!isset($_GET['id'])) {
                exit("Aucun ID reçu.");
        }

        $id = $_GET['id'];
        // Récupération du test
        $sql = "SELECT * FROM tests WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute([":id" => $id]);
        $offre = $req->fetch(PDO::FETCH_ASSOC);


        // Récupération questions + réponses
        $sql = "SELECT * FROM questions WHERE test_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute([":id" => $id]);
        $questions = $req->fetchAll(PDO::FETCH_ASSOC);

        $datas = [];
        foreach ($questions as $question) {
                $sql = "SELECT * FROM reponses WHERE question_id = :question_id";
                $req = $pdo->prepare($sql);
                $req->execute([":question_id" => $question['id']]);
                $reponses = $req->fetchAll(PDO::FETCH_ASSOC);

                $datas[] = [
                        "id" => $question["id"],
                        "texte" => $question["contenu"],
                        "type" => $question["type_question"],
                        "reponses" => $reponses
                ];
        }


} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

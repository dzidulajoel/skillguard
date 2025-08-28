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
                $sql = "SELECT  *  FROM tests  WHERE id = :id AND utilisateur_id = :id_session";
                $req = $pdo->prepare($sql);
                $req->execute(array(
                        ":id" => $id,
                        ":id_session" => $id_session
                ));
                $data_t = $req->fetch(PDO::FETCH_ASSOC);

                //questions:
                // Récupération des questions
                $sql = "SELECT * FROM questions WHERE test_id = :id AND utilisateur_id = :id_session";
                $req = $pdo->prepare($sql);
                $req->execute([
                        ":id" => $id,
                        ":id_session" => $id_session
                ]);
                $questions = $req->fetchAll(PDO::FETCH_ASSOC);

                $datas = [];

                foreach ($questions as $question) {
                        // Récupération des réponses liées à chaque question
                        $sql = "SELECT * FROM reponses WHERE question_id = :question_id AND utilisateur_id = :id_session";
                        $req = $pdo->prepare($sql);
                        $req->execute([
                                ":question_id" => $question['id'],
                                ":id_session" => $id_session
                        ]);
                        $reponses = $req->fetchAll(PDO::FETCH_ASSOC);

                        // On regroupe question + réponses
                        $datas[] = [
                                "id" => $question["id"],
                                "texte" => $question["contenu"],
                                "type" => $question["type_question"], // si tu as un champ type
                                "reponses" => $reponses
                        ];
                }

        } else {
                echo "Aucun ID reçu.";
        }



} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

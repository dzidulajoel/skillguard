<?php
session_start();
require_once('../config/cnx.php');
require_once '../vendor/autoload.php';
use Ramsey\Uuid\Uuid;

header('Content-Type: application/json');

try {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true); // tableau de questions
        $response = ['success' => false, 'message' => ''];

        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        if (!is_array($data) || empty($data)) {
                echo json_encode(['success' => false, 'message' => 'Aucune donnée reçue.']);
                exit();
        }

        $titre = trim($data[0]['titre']); // pas htmlspecialchars ici
        $test_id = Uuid::uuid4()->toString();

        // Insertion du test
        $sqlTest = "INSERT INTO tests (id, titre, utilisateur_id, created_at) VALUES (:id, :titre, :utilisateur_id, NOW())";
        $reqTest = $pdo->prepare($sqlTest);

        if ($reqTest->execute([":id" => $test_id, ":titre" => $titre, ":utilisateur_id" => $id_session,])) {
                $response = ['success' => true, 'message' => $titre];
        } else {
                $response = ['success' => false, 'message' => 'Échec insertion test'];
        }


        // ✅ Insertion des questions + réponses
        foreach ($data as $q) {
                $question_id = Uuid::uuid4()->toString();
                $questionText = trim($q['text']);
                $questionType = trim($q['type']);
                $answers = $q['answers'];

                $sqlQ = "INSERT INTO questions (id, test_id, contenu,utilisateur_id, type_question) VALUES (:id, :test_id, :contenu,:utilisateur_id, :type_question)";
                $reqQ = $pdo->prepare($sqlQ);
                $reqQ->execute([
                        ":id" => $question_id,
                        ":test_id" => $test_id,
                        ":contenu" => $questionText,
                        ":utilisateur_id" => $id_session,
                        ":type_question" => $questionType,
                ]);


                foreach ($answers as $ans) {
                        $answer_id = Uuid::uuid4()->toString();
                        $sqlA = "INSERT INTO reponses (id, question_id, contenu, est_correct, utilisateur_id) VALUES (:id, :question_id, :contenu, :est_correct, :utilisateur_id)";
                        $reqA = $pdo->prepare($sqlA);
                        $reqA->execute([
                                ":id" => $answer_id,
                                ":question_id" => $question_id,
                                ":contenu" => trim($ans['text']),
                                ":est_correct" => $ans['isCorrect'] ? 1 : 0,
                                ":utilisateur_id" => $id_session
                        ]);
                }
        }

        $response['success'] = true;
        $response['message'] = "QCM inséré avec succès.";
        $response['data'] = $data;
        echo json_encode($response);

} catch (PDOException $e) {
        error_log("Erreur PDO : " . $e->getMessage());
        $response = ['success' => false, 'message' => 'Erreur interne.'];
        echo json_encode($response);
}

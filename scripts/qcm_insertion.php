<?php
session_start();
require_once('../config/cnx.php');
require_once '../vendor/autoload.php';

use Ramsey\Uuid\Uuid;

header('Content-Type: application/json');

try {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        $response = ['success' => false, 'message' => ''];

        // Vérification session
        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        // Vérification JSON reçu
        if (!is_array($data) || empty($data)) {
                echo json_encode(['success' => false, 'message' => 'Aucune donnée reçue.']);
                exit();
        }

        // Vérification offre_id
        $offre_id = $_GET['offre_id'] ?? null;
        if (empty($offre_id) || !Uuid::isValid($offre_id)) {
                echo json_encode(['success' => false, 'message' => 'Identifiant de l\'offre manquant ou invalide.']);
                exit();
        }

        // Validation titre
        $titre = isset($data[0]['titre']) ? trim($data[0]['titre']) : null;
        if (empty($titre)) {
                echo json_encode(['success' => false, 'message' => 'Titre du test manquant.']);
                exit();
        }

        $test_id = Uuid::uuid4()->toString();

        // ✅ Démarrer une transaction pour éviter incohérences
        $pdo->beginTransaction();

        // Insertion du test
        $sqlTest = "INSERT INTO tests (id, titre, offre_id, utilisateur_id, created_at) 
                VALUES (:id, :titre, :offre_id, :utilisateur_id, NOW())";
        $reqTest = $pdo->prepare($sqlTest);
        $reqTest->execute([
                ":id" => $test_id,
                ":titre" => $titre,
                ":offre_id" => $offre_id,
                ":utilisateur_id" => $id_session,
        ]);

        // ✅ Insertion des questions et réponses
        foreach ($data as $q) {
                if (empty($q['text']) || empty($q['type']) || !isset($q['answers'])) {
                        throw new Exception("Format de question invalide.");
                }

                $question_id = Uuid::uuid4()->toString();
                $questionText = trim($q['text']);
                $questionType = trim($q['type']);
                $answers = $q['answers'];

                $sqlQ = "INSERT INTO questions (id, test_id, contenu, utilisateur_id, type_question) 
                 VALUES (:id, :test_id, :contenu, :utilisateur_id, :type_question)";
                $reqQ = $pdo->prepare($sqlQ);
                $reqQ->execute([
                        ":id" => $question_id,
                        ":test_id" => $test_id,
                        ":contenu" => $questionText,
                        ":utilisateur_id" => $id_session,
                        ":type_question" => $questionType,
                ]);

                foreach ($answers as $ans) {
                        if (!isset($ans['text']) || !isset($ans['isCorrect'])) {
                                throw new Exception("Réponse mal formée.");
                        }

                        $answer_id = Uuid::uuid4()->toString();
                        $sqlA = "INSERT INTO reponses (id, question_id, contenu, est_correct, utilisateur_id) 
                     VALUES (:id, :question_id, :contenu, :est_correct, :utilisateur_id)";
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

        // ✅ Commit final
        $pdo->commit();

        $response['success'] = true;
        $response['message'] = "QCM inséré avec succès.";
        $response['data'] = $data;
        echo json_encode($response);

} catch (Exception $e) {
        if ($pdo->inTransaction()) {
                $pdo->rollBack();
        }
        error_log("Erreur : " . $e->getMessage());
        $response = ['success' => false, 'message' => 'Erreur : ' . $e->getMessage()];
        echo json_encode($response);

} catch (PDOException $e) {
        if ($pdo->inTransaction()) {
                $pdo->rollBack();
        }
        error_log("Erreur PDO : " . $e->getMessage());
        $response = ['success' => false, 'message' => 'Erreur base de données.'];
        echo json_encode($response);
}

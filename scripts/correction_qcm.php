<?php
session_start();
require_once('../config/cnx.php');
require_once '../vendor/autoload.php';
use Ramsey\Uuid\Uuid;


header('Content-Type: application/json');
try {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        $id = Uuid::uuid4()->toString();
        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        // 1. Récupérer id du recruteur
        $stmt = $pdo->prepare("SELECT * FROM tests WHERE id = :test_id");
        $stmt->execute([':test_id' => $data['test_id']]);
        $recruteur = $stmt->fetch(PDO::FETCH_ASSOC);

        // 1. Récupérer toutes les questions du test
        $stmt = $pdo->prepare("SELECT * FROM questions WHERE test_id = :test_id");
        $stmt->execute([':test_id' => $data['test_id']]);
        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 2. Récupérer la note du recruteur definies dans l'offre
        $stmt = $pdo->prepare("SELECT * FROM offres WHERE id = :offre_id");
        $stmt->execute([':offre_id' => $recruteur['offre_id']]);
        $offre_note = $stmt->fetch(PDO::FETCH_ASSOC);


        // Vérifier si l'utilisateur a déjà passé le test
        $stmt = $pdo->prepare("
    SELECT * 
    FROM resultats 
    WHERE test_id = :test_id AND candidat_id = :candidat_id
");
        $stmt->execute([
                ':test_id' => $data['test_id'],
                ':candidat_id' => $id_session // candidat connecté
        ]);

        $verifierSiPasseTestDeja = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($verifierSiPasseTestDeja) {
                // Si un enregistrement existe, le candidat a déjà passé le test
                echo json_encode([
                        'success' => false,
                        'message' => 'Vous avez déjà passé ce test. Impossible de le passer une deuxième fois.'
                ]);
                exit();
        }

        $total_score = 0;
        foreach ($questions as $question) {
                $qid = $question['id'];
                // récupérer les bonnes réponses
                $stmt2 = $pdo->prepare("SELECT id FROM reponses WHERE question_id = :qid AND est_correct = 1");
                $stmt2->execute([':qid' => $qid]);
                $correct_answers = $stmt2->fetchAll(PDO::FETCH_COLUMN);
                $user_answers = $data['data']["q_$qid"] ?? [];
                // normaliser en tableau
                if (!is_array($user_answers)) {
                        $user_answers = [$user_answers];
                }

                // Vérifier si toutes les bonnes réponses ont été cochées
                if (count($user_answers) === count($correct_answers) && empty(array_diff($user_answers, $correct_answers))) {
                        $total_score += 1;
                }
        }

        $total_questions = count($questions);
        $score_valide = ($total_score / $total_questions) * 20;
        $score_def_recruteur = $offre_note['score'];

        $statut = "";
        if ($score_valide < $score_def_recruteur) {
                $statut = 'fail';
        } else {
                $statut = 'pass';
        }


        $sql = " INSERT INTO resultats (id, test_id, utilisateur_id, candidat_id, score, moyenne, statut)  VALUES (:id, :test_id, :utilisateur_id, :candidat_id, :score, :moyenne, :statut)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':id' => $id,
                ':test_id' => $data['test_id'],
                ':utilisateur_id' => $recruteur['utilisateur_id'],
                ':candidat_id' => $id_session,
                ':score' => $score_valide,
                ":moyenne" => $score_def_recruteur,
                ':statut' => $statut
        ]);

        echo json_encode([
                'success' => true,
                'id' => $id,
                'test_id' => $data['test_id'],
                'data' => $data['data'],
                'recruteur_id' => $recruteur['utilisateur_id'],
                'questions' => $questions,
                'total' => $score_valide,

                'offre_note' => $offre_note['score']
        ]);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}
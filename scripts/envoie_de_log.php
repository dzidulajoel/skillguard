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

        $logs = $data['logs'];

        $face_detected_count = isset($logs['face']) ? count($logs['face']) : 0;
        $no_face_count = isset($logs['noFace']) ? count($logs['noFace']) : 0;
        $multiple_faces_count = isset($logs['multipleFaces']) ? count($logs['multipleFaces']) : 0;
        $eyes_closed_count = isset($logs['eyes']) ? count($logs['eyes']) : 0;
        $gaze_out_count = isset($logs['gaze']) ? count($logs['gaze']) : 0;
        $speaking_count = isset($logs['audio']) ? count($logs['audio']) : 0;
        $keywords_count = isset($logs['keywords']) ? count($logs['keywords']) : 0;
        $blur_count = isset($logs['blur']) ? count($logs['blur']) : 0;
        $devtools_count = isset($logs['devTools']) ? count($logs['devTools']) : 0;
        $shortcut_count = isset($logs['shortcuts']) ? count($logs['shortcuts']) : 0;

        $stmt = $pdo->prepare(" INSERT INTO proctoring_logs (
        id, candidate_id, exam_id,
        face_detected_count, no_face_count, multiple_faces_count,
        eyes_closed_count, gaze_out_count, speaking_count,
        keywords_count, blur_count, devtools_count, shortcut_count,
        credibility_score, last_update) VALUES (
        :id, :candidate_id, :exam_id,
        :face_detected_count, :no_face_count, :multiple_faces_count,
        :eyes_closed_count, :gaze_out_count, :speaking_count,
        :keywords_count, :blur_count, :devtools_count, :shortcut_count,
        :credibility_score, NOW() )
");

        $stmt->execute([
                ':id' => $id,
                ':candidate_id' => $id_session,
                ':exam_id' => $data['test_id'],
                ':face_detected_count' => $face_detected_count,
                ':no_face_count' => $no_face_count,
                ':multiple_faces_count' => $multiple_faces_count,
                ':eyes_closed_count' => $eyes_closed_count,
                ':gaze_out_count' => $gaze_out_count,
                ':speaking_count' => $speaking_count,
                ':keywords_count' => $keywords_count,
                ':blur_count' => $blur_count,
                ':devtools_count' => $devtools_count,
                ':shortcut_count' => $shortcut_count,
                ':credibility_score' => $data['score']
        ]);


        echo json_encode([
                'success' => true,
                'datas' => [$id, $data['test_id'], $id_session],
                'logs' => $data['logs'],
                'score' => $data['score']
        ]);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}
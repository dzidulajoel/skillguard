<?php
session_start();
require_once('../config/cnx.php');
header('Content-Type: application/json');

try {
        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        $testId = $data['testId'] ?? null;

        if (!$testId) {
                echo json_encode(['success' => false, 'message' => 'ID de l\'offre manquant.']);
                exit();
        }

        $sql = "SELECT id FROM tests WHERE id = :test_id AND utilisateur_id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':test_id' => $testId,
                ':user_id' => $id_session
        ]);
        $offre = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$offre) {
                echo json_encode(['success' => false, 'message' => 'Test introuvable ou non autorisée.']);
                exit();
        }

        $sqlDelete = "DELETE FROM tests WHERE id = :test_id AND utilisateur_id = :user_id";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->execute([
                ':test_id' => $testId,
                ':user_id' => $id_session
        ]);

        echo json_encode([
                'success' => true,
                'message' => 'Le test a été supprimé avec succès.',
                'testId' => $testId
        ]);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

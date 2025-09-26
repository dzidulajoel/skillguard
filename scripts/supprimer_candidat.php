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
        $candidatId = $data['candidatId'] ?? null;

        if (!$candidatId) {
                echo json_encode(['success' => false, 'message' => 'ID de l\'utilisateur manquant.']);
                exit();
        }

        $sql = "SELECT id FROM utilisateurs WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':id' => $candidatId
        ]);
        $recruteur = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$recruteur) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur introuvable ou non autorisée.']);
                exit();
        }

        $sqlDelete = "DELETE FROM utilisateurs WHERE id = :id ";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->execute([
                ':id' => $candidatId
        ]);

        echo json_encode([
                'success' => true,
                'message' => 'L\'utilisateur a été supprimée avec succès.',
                'candidatId' => $candidatId
        ]);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

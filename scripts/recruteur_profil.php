<?php
session_start();
require_once('../config/cnx.php');
header('Content-Type: application/json');

try {
        $input = file_get_contents('php://input');
        $data = json_decode($input, true);
        $response = ['success' => false, 'message' => ''];

        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        $sql = 'UPDATE utilisateurs SET entreprise = :entreprise, email = :email,  pays = :pays, ville = :ville WHERE id = :id';
        $params = [
                ':pays' => $data['pays'],
                ':ville' => $data['ville'],
                ':entreprise' => $data['entreprise'],
                ':email' => $data['email'],
                ':id' => $id_session
        ];
        $req = $pdo->prepare($sql);
        $result = $req->execute($params);

        echo json_encode(['success' => true, 'message' => 'Profil mise à jour avec succes','data' => $data]);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

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

        // Vérifier si utilisateur connecté
        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        // Vérifier la présence de l'ID du test
        $id_test = $data['testId'] ?? null;
        if (!$id_test) {
                echo json_encode(['success' => false, 'message' => 'ID du test manquant']);
                exit();
        }

        // Générer un token unique sécurisé
        $invitation_id = Uuid::uuid4()->toString();
        $token = hash('sha256', Uuid::uuid4()->toString() . time());

        // Définir la date d'expiration (ex. 7 jours après génération)
        $date_expiration = date('Y-m-d H:i:s', strtotime('+7 days'));
        $moyen = 'copie';
        // Insérer le token et l'invitation dans la table invitations
        $sql = "INSERT INTO invitations (id, test_id, createur_id, token, etat_invitation, date_envoi, date_expiration, moyen) 
        VALUES (:id, :id_test, :createur_id, :token, 'en_attente', NOW(), :date_expiration, :moyen)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':id' => $invitation_id,
                ':id_test' => $id_test,
                ':createur_id' => $id_session,
                ':token' => $token,
                ':date_expiration' => $date_expiration,
                ':moyen' => $moyen
        ]);

        // Construire le lien complet à renvoyer au front-end
        $base_url = "http://localhost:8888/skillguard/candidat/passer_le_test";
        $lien_complet = $base_url . "?token=" . $token;

        $response['success'] = true;
        $response['message'] = 'Lien généré avec succès';
        $response['data'] = $lien_complet;

        echo json_encode($response);

} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

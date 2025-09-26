<?php
session_start();
require_once('../config/cnx.php');
header('Content-Type: application/json');
require_once '../vendor/autoload.php';
use Ramsey\Uuid\Uuid;

try {
        $id_session = $_SESSION['id_utilisateur'] ?? null;

        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        $input = file_get_contents('php://input');
        $payload = json_decode($input, true);
        $testId = $payload['test_id'] ?? null;

        if (!$testId) {
                echo json_encode(['success' => false, 'message' => 'Aucun test ID fourni']);
                exit();
        }

        $sql = "SELECT * FROM utilisateurs WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute([":id" => $id_session]);
        $utilisateur = $req->fetch(PDO::FETCH_ASSOC);

        if (!$utilisateur) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur introuvable']);
                exit();
        }

        $sql = "SELECT * FROM invitations 
                WHERE test_id = :testId AND email_candidat = :email
                LIMIT 1";
        $req = $pdo->prepare($sql);
        $req->execute([
                ":testId" => $testId,
                ":email" => $utilisateur['email']
        ]);

        $invitation = $req->fetch(PDO::FETCH_ASSOC);

        if ($invitation) {
                if ($invitation['etat_invitation'] === 'utilisee') {

                        echo json_encode([
                                'success' => false,
                                'redirect' => '../',
                                'message' => 'Vous avez déjà passé ce test.'
                        ]);
                        exit();
                } else {
                        $sql = "UPDATE invitations SET etat_invitation = 'utilisee' WHERE id = :id";
                        $update = $pdo->prepare($sql);
                        $update->execute([":id" => $invitation['id']]);

                        echo json_encode([
                                'success' => true,
                                'message' => 'Invitation validée, accès au test accordé',
                                'redirect' => 'qcm?test_id=' . urlencode($testId)

                        ]);
                        exit();
                }
        } 

        else {
                $id = Uuid::uuid4()->toString();
                $sql = "INSERT INTO invitations (id, email_candidat, test_id, etat_invitation, date_utilisation) 
                VALUES (:uuid, :email_candidat, :test_id, :etat_invitation, NOW())";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                        ':uuid' => $id,
                        ':email_candidat' => $utilisateur['email'],
                        ':test_id' => $testId,
                        ':etat_invitation' => 'utilisee'
                ]);

                echo json_encode([
                        'success' => true,
                ]);
                exit();
        }


} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

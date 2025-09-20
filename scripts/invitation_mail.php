<?php
session_start();
require_once('../config/cnx.php');
require_once '../vendor/autoload.php';
use Ramsey\Uuid\Uuid;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
        $moyen = 'email';
        // Insérer le token et l'invitation dans la table invitations

        // $sql = "SELECT  *  FROM tests  WHERE id = :id AND utilisateur_id = :id_session";
        // $req = $pdo->prepare($sql);
        // $req->execute(array(
        //         ":id" => $test_id,
        //         ":id_session" => $id_session
        // ));
        // $offre = $req->fetch(PDO::FETCH_ASSOC);


        $sql = "INSERT INTO invitations (id, test_id, createur_id, token, etat_invitation, date_envoi, date_expiration, moyen, email_candidat) 
        VALUES (:id, :id_test, :createur_id, :token, 'en_attente', NOW(), :date_expiration, :moyen, :email_candidat)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':id' => $invitation_id,
                ':id_test' => $id_test,
                ':createur_id' => $id_session,
                ':token' => $token,
                ':date_expiration' => $date_expiration,
                ':moyen' => $moyen,
                ':email_candidat' => $data['email']
        ]);

        // Construire le lien complet à renvoyer au front-end
        $base_url = "http://localhost:8888/skillguard/candidat/passer_le_test";
        $lien_complet = $base_url . "?token=" . $token;

        try {
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'dzidulap6@gmail.com';
                $mail->Password = 'qncjmplygmhwruhc';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;

                $mail->setFrom('no-reply@skillguard.com', 'SkillGuard - Invitations');
                $mail->addAddress($data['email']);
                $mail->CharSet = 'UTF-8';
                $mail->isHTML(true);

                $mail->Subject = 'Invitation à passer un test sur SkillGuard';
                $mail->Body = "
                        <div style='font-family: Arial, sans-serif; background-color:#f4f6f8; padding:20px;'>
                        <table align='center' width='600' style='background:#ffffff; border-radius:8px; padding:20px;'>
                        <tr>
                                <td align='center'>
                                <img src='../Updated SkillGuard Logo.svg' alt='SkillGuard' style='margin-bottom:20px;'>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <h2 style='color:#1E2A78; text-align:center;'>Invitation à passer un test</h2>
                                <p style='color:#333; font-size:15px; line-height:1.6;'>
                                Bonjour,
                                </p>
                                <p style='color:#333; font-size:15px; line-height:1.6;'>
                                Vous avez été invité à passer un test sur <strong>SkillGuard</strong>.  
                                Cliquez sur le bouton ci-dessous pour accéder directement au test.
                                </p>
                                <div style='text-align:center; margin:30px 0;'>
                                <a href='" . htmlspecialchars($lien_complet) . "' 
                                style='background:#00B8D9; color:#fff; padding:14px 28px; border-radius:6px; text-decoration:none; font-weight:bold;'>
                                Accéder au test
                                </a>
                                </div>
                                <p style='color:#555; font-size:14px;'>
                                ⏳ Ce lien est valable jusqu'au <strong>" . date('d/m/Y H:i', strtotime($date_expiration)) . "</strong>.
                                </p>
                                <p style='color:#999; font-size:12px; text-align:center; margin-top:30px;'>
                                Si vous n’êtes pas concerné par cette invitation, ignorez simplement cet email.  
                                <br>© " . date('Y') . " SkillGuard. Tous droits réservés.
                                </p>
                                </td>
                        </tr>
                        </table>
                        </div>
                        ";

                $mail->AltBody = "Bonjour,\n\n
                        Vous avez été invité à passer un test sur SkillGuard.\n
                        Accédez au test via ce lien : " . $lien_complet . "\n\n
                        Ce lien est valable jusqu'au " . date('d/m/Y H:i', strtotime($date_expiration)) . ".\n\n
                        © " . date('Y') . " SkillGuard.";

                $mail->send();
                $response['success'] = true;
                $response['message'] = 'Invitation envoyée avec succès à ' . $data['email'];
                $response['data'] = ['email' => $data['email'], 'lien' => $lien_complet];
                echo json_encode($response);

        } catch (Exception $e) {
                echo "Mailer Error: " . $e->getMessage();
        }


} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

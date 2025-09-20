<?php
session_start();
require_once('../../config/cnx.php');
require_once '../../vendor/autoload.php';
use Ramsey\Uuid\Uuid;

try {
        // Récupérer les paramètres depuis l'URL
        $id_offre = $_GET['id'] ?? null;
        $token = $_GET['token'] ?? null;

        // Vérification 1 : ni id_offre ni token → redirection
        if (!$id_offre && !$token) {
                header("Location: ../");
                exit();
        }

        // Vérification 2 : accès classique via id_offre
        if ($id_offre && !$token) {
                if (!Uuid::isValid($id_offre)) {
                        header("Location: ../");
                        exit();
                }

                // Vérifier que l'offre existe
                $sql = "SELECT * FROM offres WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id_offre]);
                $offre = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$offre) {
                        header("Location: ../");
                        exit();
                }
        }

        // Vérification 3 : accès via token
        if ($token) {
                // Vérifier que le token existe, est en attente et non expiré
                $sql = "SELECT * FROM invitations 
                WHERE token = :token 
                AND etat_invitation = 'en_attente' 
                AND (date_expiration IS NULL OR date_expiration > NOW())";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':token' => $token]);
                $invitation = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$invitation) {
                        header("Location: ../");
                        exit();
                }

                // Récupérer l'id_offre via l'id_test
                $id_test = $invitation['test_id'];
                $sql = "SELECT offre_id FROM tests WHERE id = :id_test";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id_test' => $id_test]);
                $test = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$test) {
                        header("Location: ../");
                        exit();
                }

                $id_offre = $test['offre_id'];

                // Mettre à jour l'état du token pour éviter réutilisation
                $sql = "UPDATE invitations SET etat_invitation = 'utilisee', date_utilisation = NOW() 
                WHERE token = :token";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':token' => $token]);
        }

        // ----- Ici, toutes les vérifications sont passées -----
        // Récupérer le test associé à l'offre
        $sql = "SELECT * FROM tests WHERE offre_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id_offre]);
        $data_offre_test = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data_offre_test) {
                header("Location: ../");
                exit();
        }

        // Ici, tu peux continuer le traitement pour afficher le test
        // par exemple inclure la vue ou stocker $data_offre_test pour le front-end

} catch (Exception $e) {
        error_log("Erreur lors de la vérification du test : " . $e->getMessage());
        header("Location: ../");
        exit();
}

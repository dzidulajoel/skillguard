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
        $id_session = $_SESSION['id_utilisateur'];

        if (
                isset($data['id']) &&
                isset($data['titre']) &&
                isset($data['questionText']) &&
                isset($data['questionType']) &&
                isset($data['answers']) 
        ) {
                $numero = htmlspecialchars(trim($data['id']));
                $titre = htmlspecialchars(trim($data['titre']));
                $questionText = trim($data['questionText']);
                $questionType = trim($data['questionType']);
                $answers = trim($data['answers']);
                $id = Uuid::uuid4()->toString();


                if (empty($numero) || empty($titre) || empty($questionText) || empty($questionType) || empty($answers)) {
                        $response['message'] = 'Veuillez remplir tous les champs.';
                        echo json_encode($response);
                        exit();
                }

                $sql = "INSERT INTO tests (id,titre,utilisateur_id, NOW() )
                VALUES (:id, :titre, :utilisateur_id)";
                $req = $pdo->prepare($sql);
                $result = $req->execute([
                        ":id" => $id,
                        ":titre" => $titre,
                        ":utilisateur_id" => $id_session,
                ]);
                

        } else {
                $response['message'] = 'Données manquantes. Veuillez fournir toutes les informations requises.';
        }

        echo json_encode($response);
} catch (PDOException $e) {
        error_log("Erreur PDO lors de l'inscription : " . $e->getMessage());
        $response = ['success' => false, 'message' => 'Une erreur interne est survenue. Veuillez réessayer plus tard.'];
        echo json_encode($response);
}

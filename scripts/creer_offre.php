<?php
session_start();
require_once('../config/cnx.php');
require_once '../vendor/autoload.php';
use Ramsey\Uuid\Uuid;
header('Content-Type: application/json');

function verifierChampsObligatoires(array $data, array $champsRequis)
{
        foreach ($champsRequis as $champ) {
                if (empty(trim($data[$champ] ?? ''))) {
                        return $champ;
                }
        }
        return null;
}

try {


        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

        $input = file_get_contents('php://input');
        $data = json_decode($input, true);

        if (!is_array($data) || empty($data)) {
                echo json_encode(['success' => false, 'message' => 'Aucune donnée reçue.']);
                exit();
        }

        $sql = "SELECT  entreprise  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $datas = $req->fetch(PDO::FETCH_ASSOC);

        $champsRequis = ['titre', 'lieu', 'contrat', 'experience', 'statut', 'competence', 'date_limite', 'description', 'mission', 'profil', 'score'];
        $champManquant = verifierChampsObligatoires($data, $champsRequis);
        if ($champManquant) {
                echo json_encode(['success' => false, 'message' => "Le champ '$champManquant' est obligatoire."]);
                exit();
        }



        $id = Uuid::uuid4()->toString();
        $titre = trim($data['titre']);
        $lieu = $data['lieu'];
        $contrat = $data['contrat'];
        $experience = $data['experience'];
        $statut = $data['statut'];
        $competence = trim($data['competence']);
        $date_limite = $data['date_limite'];
        $description = trim($data['description']);
        $mission = trim($data['mission']);
        $profil = trim($data['profil']);
        $entreprise = $datas['entreprise'];
        $score = trim($data['score']);

        $sql = "INSERT INTO offres (id, entreprise, titre, lieu, contrat, experience, statut, competence, date_limite, description, mission, profil, score, utilisateur_id, date_creation) VALUES (:id, :entreprise, :titre, :lieu, :contrat, :experience, :statut, :competence, :date_limite, :description, :mission, :profil, :score, :utilisateur_id, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                ':id' => $id,
                ':entreprise' => $entreprise,
                ':titre' => $titre,
                ':lieu' => $lieu,
                ':contrat' => $contrat,
                ':experience' => $experience,
                ':statut' => $statut,
                ':competence' => $competence,
                ':date_limite' => $date_limite,
                ':description' => $description,
                ':mission' => $mission,
                ':profil' => $profil,
                ':score' => $score,
                ':utilisateur_id' => $id_session
        ]);

        echo json_encode([
                'success' => true,
                'message' => 'L\'offre a été créée avec succès.',
                'donnee' => [
                        'id' => $id,
                        'titre' => $titre,
                        'lieu' => $lieu,
                        'contrat' => $contrat,
                        'experience' => $experience,
                        'statut' => $statut,
                        'competence' => $competence,
                        'date_limite' => $date_limite,
                        'description' => $description,
                        'mission' => $mission,
                        'profil' => $profil,
                        'utilisateur_id' => $id_session,
                        'score' => $score,
                        'entreprise' => $entreprise
                ]
        ]);


} catch (Exception $e) {
        error_log("Erreur : " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Une erreur interne est survenue.']);
}

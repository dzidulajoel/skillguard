<?php
session_start();
require_once('../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
        } else {
                echo "Aucun utilisateur connecté.";
        }
        $sql = "SELECT  *  FROM utilisateurs  WHERE id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data = $req->fetch(PDO::FETCH_ASSOC);
        $image = $data['avatar_url'];

        // ======================================================  test
        $limit = 4;

        // Page courante (par défaut 1)
        $page_test = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page_test - 1) * $limit;

        // Compter le nombre total de tests
        $countSql = "SELECT COUNT(*) FROM tests WHERE utilisateur_id = :id";
        $countReq = $pdo->prepare($countSql);
        $countReq->execute([":id" => $id_session]);
        $totalResults = $countReq->fetchColumn();

        // Calcul du nombre total de pages
        $totalPages_test = ceil($totalResults / $limit);

        // Récupérer les tests paginés
        $sql = "SELECT * FROM tests 
        WHERE utilisateur_id = :id 
        ORDER BY created_at DESC
        LIMIT :limit OFFSET :offset";

        $req = $pdo->prepare($sql);
        $req->bindValue(':id', $id_session, PDO::PARAM_INT);
        $req->bindValue(':limit', $limit, PDO::PARAM_INT);
        $req->bindValue(':offset', $offset, PDO::PARAM_INT);
        $req->execute();
        $data_t = $req->fetchAll(PDO::FETCH_ASSOC);

        // ======================================================  offre
        $limit = 5;
        $page_offre = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page_offre - 1) * $limit;
        $countSql = "SELECT COUNT(*) FROM offres WHERE utilisateur_id = :id";
        $countReq = $pdo->prepare($countSql);
        $countReq->execute([":id" => $id_session]);
        $totalResults = $countReq->fetchColumn();
        $totalPages_offre = ceil($totalResults / $limit);

        $sql = "SELECT * 
                FROM offres 
                WHERE utilisateur_id = :id
                ORDER BY id DESC
                LIMIT :limit OFFSET :offset";
        $req = $pdo->prepare($sql);
        $req->bindValue(':id', $id_session, PDO::PARAM_INT);
        $req->bindValue(':limit', $limit, PDO::PARAM_INT);
        $req->bindValue(':offset', $offset, PDO::PARAM_INT);
        $req->execute();
        $data_o = $req->fetchAll(PDO::FETCH_ASSOC);

        // ====================================================== candidat
        $limit = 15;

        // Page courante (par défaut 1)
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Compter le nombre total de résultats
        $countSql = "SELECT COUNT(*) 
                FROM resultats r
                INNER JOIN utilisateurs u ON r.candidat_id = u.id
                INNER JOIN tests t ON r.test_id = t.id
                INNER JOIN offres o ON t.offre_id = o.id
                WHERE r.utilisateur_id = :id";

        $countReq = $pdo->prepare($countSql);
        $countReq->execute([":id" => $id_session]);
        $totalResults = $countReq->fetchColumn();

        // Calcul du nombre total de pages
        $totalPages = ceil($totalResults / $limit);

        // Récupérer les résultats paginés
        $sql = "SELECT  
                r.*,  
                u.nom AS nom_candidat, 
                u.prenom AS prenom_candidat,  
                u.email AS email_candidat,  
                t.titre AS titre_test,  
                o.titre AS titre_offre
                FROM resultats r
                INNER JOIN utilisateurs u ON r.candidat_id = u.id
                INNER JOIN tests t ON r.test_id = t.id
                INNER JOIN offres o ON t.offre_id = o.id
                WHERE r.utilisateur_id = :id
                ORDER BY r.date_creation DESC
                LIMIT :limit OFFSET :offset";

        $req = $pdo->prepare($sql);
        $req->bindValue(':id', $id_session, PDO::PARAM_INT);
        $req->bindValue(':limit', $limit, PDO::PARAM_INT);
        $req->bindValue(':offset', $offset, PDO::PARAM_INT);
        $req->execute();
        $resultats_candidat = $req->fetchAll(PDO::FETCH_ASSOC);



        $sql = "SELECT * FROM resultats WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_candidat = $req->fetchAll(PDO::FETCH_ASSOC);
        $totalCandidats = count($data_candidat);
        $reussis = 0;
        $echoues = 0;
        foreach ($data_candidat as $candidat) {
                if ($candidat['statut'] === 'pass') {
                        $reussis++;
                } elseif ($candidat['statut'] === 'fail') {
                        $echoues++;
                }
        }

        // Éviter division par zéro
        $pourcentageReussite = $totalCandidats > 0 ? round(($reussis / $totalCandidats) * 100, 2) : 0;
        $pourcentageEchec = $totalCandidats > 0 ? round(($echoues / $totalCandidats) * 100, 2) : 0;

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

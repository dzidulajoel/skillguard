<?php
require_once('../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
        } else {
                // gérer l'absence d'utilisateur connecté
                echo "Aucun utilisateur connecté.";
                exit;
        }

        $sqlCount = "SELECT COUNT(*) FROM resultats WHERE candidat_id = :candidat_id";
        $stmtCount = $pdo->prepare($sqlCount);
        $stmtCount->execute([':candidat_id' => $id_session]);
        $totalResultats = (int) $stmtCount->fetchColumn();

        $parPage_resultats = 10;
        $totalPagesResultats = (int) ceil($totalResultats / $parPage_resultats);
        if ($totalPagesResultats < 1) {
                $totalPagesResultats = 1;
        }

        $pageResultats = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        if ($pageResultats < 1)
                $pageResultats = 1;
        if ($pageResultats > $totalPagesResultats)
                $pageResultats = $totalPagesResultats;

        $offset = ($pageResultats - 1) * $parPage_resultats;
        if ($offset < 0)
                $offset = 0; 

        $sql = "SELECT
                t.titre AS titre_test,
                u.entreprise AS nom_entreprise,
                r.score,
                r.date_creation,
                r.statut
                        FROM resultats r
                        INNER JOIN tests t ON r.test_id = t.id
                        INNER JOIN utilisateurs u ON t.utilisateur_id = u.id
                        WHERE r.candidat_id = :candidat_id
                        ORDER BY r.date_creation DESC
                        LIMIT " . (int) $offset . ", " . (int) $parPage_resultats;

        $req = $pdo->prepare($sql);
        $req->bindValue(':candidat_id', $id_session, PDO::PARAM_STR);
        $req->execute();
        $data_resultats = $req->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

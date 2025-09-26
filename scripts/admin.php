<?php
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


        $sql = "SELECT 
                COUNT(*) as total,
                SUM(CASE WHEN role = 'recruteur' THEN 1 ELSE 0 END) as recruteurs,
                SUM(CASE WHEN role = 'candidat' THEN 1 ELSE 0 END) as candidats
        FROM utilisateurs";

        $req = $pdo->query($sql);
        $stats = $req->fetch(PDO::FETCH_ASSOC);


        $sql = "SELECT COUNT(*) as total FROM offres";
        $req = $pdo->prepare($sql);
        $req->execute();
        $offre = $req->fetch(PDO::FETCH_ASSOC);

        $sql = "SELECT COUNT(*) as total FROM tests";
        $req = $pdo->prepare($sql);
        $req->execute();
        $test = $req->fetch(PDO::FETCH_ASSOC);


        $sql = "SELECT 
        COUNT(*) as total,
        SUM(CASE WHEN statut = 'pass' THEN 1 ELSE 0 END) as reussite,
        SUM(CASE WHEN statut = 'fail' THEN 1 ELSE 0 END) as echec
        FROM resultats";

        $req = $pdo->query($sql);
        $stats_r = $req->fetch(PDO::FETCH_ASSOC);


        // Récupérer tous les recruteurs
        $limit = 15;
        $page_recruteur = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page_recruteur - 1) * $limit;
        $countSql = "SELECT COUNT(*) FROM utilisateurs u WHERE u.role = :role";
        $countStmt = $pdo->prepare($countSql);
        $countStmt->execute([':role' => 'recruteur']);
        $totalResults = $countStmt->fetchColumn();
        $totalPages_recruteur = ceil($totalResults / $limit);
        $sql = "SELECT  u.id, u.email, u.entreprise, u.pays, u.ville,
                COUNT(DISTINCT o.id) AS offres_creees,
                COUNT(DISTINCT t.id) AS tests_crees
        FROM utilisateurs u
        LEFT JOIN offres o ON o.utilisateur_id = u.id
        LEFT JOIN tests t ON t.utilisateur_id = u.id
        WHERE u.role = :role
        GROUP BY  u.id, u.email, u.entreprise, u.pays, u.ville
        ORDER BY u.entreprise ASC
        LIMIT :limit OFFSET :offset";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':role', 'recruteur', PDO::PARAM_STR);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $recruteurs_info = $stmt->fetchAll(PDO::FETCH_ASSOC);


        // candidats
        $limit = 15;
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        $countSql = "SELECT COUNT(*) FROM utilisateurs WHERE role = 'candidat'";
        $countStmt = $pdo->prepare($countSql);
        $countStmt->execute();
        $totalResults = $countStmt->fetchColumn();
        $totalPages = ceil($totalResults / $limit);
        $sql = "SELECT 
                u.id,
                u.nom,
                u.prenom,
                u.email,
                COUNT(r.id) AS total_tests,
                SUM(CASE WHEN r.statut = 'pass' THEN 1 ELSE 0 END) AS reussites,
                SUM(CASE WHEN r.statut = 'fail' THEN 1 ELSE 0 END) AS echecs
        FROM utilisateurs u
        LEFT JOIN resultats r ON r.candidat_id = u.id
        WHERE u.role = 'candidat'
        GROUP BY u.id, u.nom, u.prenom, u.email
        ORDER BY u.nom
        LIMIT :limit OFFSET :offset";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $candidats = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $sql = "SELECT 
        u.id AS utilisateur_id,
        u.entreprise,
        SUM(CASE WHEN r.statut = 'pass' THEN 1 ELSE 0 END) AS reussites,
        SUM(CASE WHEN r.statut = 'fail' THEN 1 ELSE 0 END) AS echecs
FROM utilisateurs u
JOIN offres o ON u.id = o.utilisateur_id
JOIN tests t ON o.id = t.offre_id
JOIN resultats r ON t.id = r.test_id
WHERE u.role = 'recruteur'
GROUP BY u.id, u.entreprise;

";

        $stmt = $pdo->query($sql);
        $recruteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}


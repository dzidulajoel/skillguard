<?php
require_once('../config/cnx.php');

try {
        if (isset($_SESSION['id_utilisateur'])) {
                $id_session = $_SESSION['id_utilisateur'];
        } else {
                echo "Aucun utilisateur connecté.";
        }

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
";
        $req = $pdo->prepare($sql);
        $req->execute([
                ':candidat_id' => $id_session
        ]);
        $data_resultats = $req->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage(); 
}

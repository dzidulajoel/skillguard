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
        $image = $data['avatar_url'];

        // test
        $sql = "SELECT * FROM tests WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_t = $req->fetchAll(PDO::FETCH_ASSOC);

        //offre
        $sql = "SELECT * FROM offres WHERE utilisateur_id = :id";
        $req = $pdo->prepare($sql);
        $req->execute(array(
                ":id" => $id_session
        ));
        $data_o = $req->fetchAll(PDO::FETCH_ASSOC);

        $parPage = 8;
        $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        if ($page < 1)
                $page = 1;
        $offset = ($page - 1) * $parPage;

        $totalSql = "SELECT COUNT(*) FROM offres";
        $total = $pdo->query($totalSql)->fetchColumn();
        $totalPages = ceil($total / $parPage);


        $sql = "SELECT * FROM offres ORDER BY date_limite DESC LIMIT :limit OFFSET :offset";
        $req = $pdo->prepare($sql);
        $req->bindValue(':limit', $parPage, PDO::PARAM_INT);
        $req->bindValue(':offset', $offset, PDO::PARAM_INT);
        $req->execute();
        $offre_candidats = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach ($offre_candidats as $offre) {
                $entreprise_nom = strtoupper(substr($offre['entreprise'], 0, 1));
                $hash = md5($entreprise_nom);
                $color = '#' . substr($hash, 0, 6);


        }



} catch (PDOException $e) {
        echo 'Erreur lors de la récupération des cours : ' . $e->getMessage();
}

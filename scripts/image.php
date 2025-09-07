<?php
session_start();
require_once('../config/cnx.php');

header('Content-Type: application/json');

// Vérifie si un fichier a été envoyé correctement
if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        echo json_encode(['success' => false, 'message' => 'Fichier invalide']);
        exit;
}

        $id_session = $_SESSION['id_utilisateur'] ?? null;
        if (!$id_session) {
                echo json_encode(['success' => false, 'message' => 'Utilisateur non connecté']);
                exit();
        }

// Crée le dossier uploads/ s'il n'existe pas
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
}

// Crée un nom de fichier unique et sécurisé
$filename = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $_FILES['image']['name']);
$targetPath = $uploadDir . $filename;

// Déplace le fichier uploadé
if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
        // Mise à jour de l'avatar dans la base de données
        $stmt = $pdo->prepare("UPDATE utilisateurs SET avatar_url = :avatar WHERE id = :id");
        $stmt->execute([
                ':avatar' => $filename,
                ':id' => $id_session
        ]);

        echo json_encode([
                'success' => true,
                'message' => 'Image de profil enregistrée',
                // on renvoie seulement le chemin relatif
                'url' => 'uploads/' . $filename
        ]);
} else {
        echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'upload']);
}

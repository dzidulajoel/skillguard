<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'skillguard');
define('DB_USER', 'root');
define('DB_PASS', 'root');


try {
        $pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8",
                DB_USER,
                DB_PASS,
                [
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
        );
} catch (PDOException $e) {

        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Erreur de connexion à la base de données.']);
        error_log("DB Connection Error: " . $e->getMessage());
        exit();
}



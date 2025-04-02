<?php
    // Paramètres de connexion site EN LOCAL
    $dsn = 'mysql:host=localhost;dbname=at_un';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $nom, $mot_de_passe);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Échec de la connexion: " . $e->getMessage();
        die();
    }
?>
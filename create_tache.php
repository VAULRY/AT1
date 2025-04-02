<?php
include 'connex_bdd.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tache = htmlspecialchars($_POST['tache']); // Nom 
    
   
    // Insérer l'inscription dans la base de données
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (tache) VALUES (:tache)");
    $stmt->execute([
        ':tache' => $tache
    ]);

    echo "La tâche créé avec succès !";
} 
?>

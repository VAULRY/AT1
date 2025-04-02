<?php
include 'connex_bdd.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_tache = $_POST['id_tache']; // Récupérer l'ID de la tâche sélectionnée

    // Supprimer la tâche de la base de données
    $stmt = $pdo->prepare("DELETE FROM utilisateurs WHERE id = :id");
    $stmt->execute([':id' => $id_tache]);

    echo "Tâche supprimée avec succès !";
}
?>

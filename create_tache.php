<?php
include 'connex_bdd.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['tache']); // Nom 
    
   
    // Insérer l'inscription dans la base de données
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (tache) VALUES (:tache)");
    $stmt->execute([
        ':tache' => $nom
    ]);

    echo "inscription créé avec succès !";

    $sql = "SELECT id, tache FROM utilisateurs WHERE tache = :tache";
    $stmt = $pdo->prepare($sql);
    // $result = $conn->query($sql);

if ($stmt->num_rows > 0) {
    // Afficher les résultats
    while($nom = $stmt->fetch_assoc()) {
        echo "id: " . $nom["id"]. " - Nom de la tâche: " . $nom["tache"]. "<br>";
    }
} else {
    echo "0 résultats";
}

?>

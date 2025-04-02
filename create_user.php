<?php
include 'connex_bdd.php'; // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']); // Nom d'utilisateur
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']); // Mot de passe
   

    // Vérifier si le numéro de club existe
    $stmtCheckClub = $pdo->prepare("SELECT COUNT(*) FROM utilisateurs WHERE nom = :nom");
    $stmtCheckClub->execute([':nom' => $nom]);
    if ($stmtCheckClub->fetchColumn() == 0) {
        die("Erreur : Le nom n'existe pas.");
    }

    // Hacher le mot de passe
    $passwordHash = password_hash($mot_de_passe, PASSWORD_BCRYPT);

    // Insérer l'utilisateur dans la base de données
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, mot_de_passe) VALUES (:nom, :mot_de_passe)");
    $stmt->execute([
        ':nom' => $nom,
        ':mot_de_passe' => $passwordHash,
    ]);

    echo "Utilisateur créé avec succès !";
}
?>

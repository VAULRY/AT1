<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des tâches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="formulaire">
    <form action="create_tache">
        <h1>Gérer les tâches</h1>
        <label for="tache">Ajouter une tâche :</label> <br>
        <input type="text" name="tache" placeholder="Ajouter une nouvelle tâche" required>
        <button type="submit">Ajouter la tâche</button>
        </form>
        <form action="delete_tache.php" method="POST">
        <label for="tache">Sélectionnez une tâche à supprimer :</label> <br>
        <select name="id_tache" id="tache">
            <?php
            include 'connex_bdd.php'; // Connexion à la base de données
            $query = $pdo->query("SELECT id, tache FROM utilisateurs");
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$row['id']}'>{$row['tache']}</option>";
            }
            ?>
        </select><br>
        <button type="submit">Supprimer la tâche</button>
    </form>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Création d'utilisateur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body> 
    <form action="create_tache.php" method="POST">
        <h1>Créer une tâche</h1>
        <label for="La tâche">A faire :</label>
        <input type="text" id="tache" name="tache" required><br>  
        <button type="submit">Inserer la tâche</button> <br>
        <select name="tache" id="tache"></select>
    </form>
</body>
</html>

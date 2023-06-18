<?php
session_start();

// Vérifier si l'administrateur est connecté, le rediriger vers la page de connexion si la session n'est pas présente
if (!isset($_SESSION['admin_username'])) {
    header("Location: admin.php");
    exit();
}

// Le reste du contenu de la page d'administration
?>

<!DOCTYPE html>
<html>
<head>
    <title>Espace Administrateur</title>
</head>
<body>
    <h2>Bienvenue dans l'Espace Administrateur</h2>
    <p>Vous êtes connecté en tant qu'administrateur.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>

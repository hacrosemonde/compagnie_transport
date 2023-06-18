<?php
session_start();
session_destroy(); // Supprimer la session de l'administrateur
header("Location: admin1.php"); // Rediriger vers la page de connexion
exit();
?>

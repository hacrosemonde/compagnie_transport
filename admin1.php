<?php
session_start();

// Vérifier si l'administrateur est déjà connecté, le rediriger vers la page d'administration
if (isset($_SESSION['admin_username'])) {
    header("Location: admin.php");
    exit();
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les identifiants saisis
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérifier si les identifiants sont valides (à personnaliser selon vos besoins)
    if ($username === 'admin' && $password === 'password') {
        // Identifiants valides, démarrer une session pour l'administrateur
        $_SESSION['admin_username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $error = "Identifiants invalides. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion Administrateur</title>
    <link rel="stylesheet" href="admin1.css">
</head>
<body>
<header>
     <div class="image">
        <img src="./images/logo.png" alt="Logo">
     </div>
    <div class="menu">
         <ul>
             <li><a href="index.php">Accueil</a> </li>
            <li><a href="#footer">Nous contacter</a> </li>
         </ul>
    </div>
</header>
<div class="admin" >
  <center><img src="./images/undraw_Female_avatar_efig.png" alt=""></center>  
</div>
    <h2 class=" text2">Connexion Administrateur</h2>
    <?php if (isset($error)) { echo "<p style='color: red;'>".$error."</p>"; } ?>
    <form method="post" action="register.php">
        <label>E-mail:</label>
        <input type="text" name="email" required><br><br>
        <label>Mot de passe:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
    </center>
    <footer id="footer">
        <ul>
            <li><img src="./images/fb.png" alt="Facebook"> Facebook</li>
            <li><img src="./images/insta.jpg" alt="Instagram"> Instagram</li>
            <li><img src="./images/gmail.png" alt="gmail"> E-mail</li>
        </ul>
        <center><p class="copyright">&copy; Untitled. All rights reserved. Design by SHAM'S CARS</a>.</p></center>
    </footer>
</body>
</html>

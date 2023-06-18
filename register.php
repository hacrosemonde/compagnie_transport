<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Compagnie de transport</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="formulaire.css">
     <link rel="stylesheet" type="text/css" href="component.css">
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
<?php

require('config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){

    $user = new USER();

  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $user->username = stripslashes($_REQUEST['username']);
  $user->username = mysqli_real_escape_string($conn, $user->username);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $user->email = stripslashes($_REQUEST['email']);
  $user->email = mysqli_real_escape_string($conn, $user->email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $user->password = stripslashes($_REQUEST['password']);
  $user->password = mysqli_real_escape_string($conn, $user->password);

    $query = "INSERT into `user` (username, email, password)
              VALUES ('$user->username', '$user->email', '$user->password')";

    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='succes'>
             <h3>Inscription complet.</h3>
             <p>Cliquer ici pour vous <a href='login.php'>connecter!</a></p>
       </div>";
    }
}else{
?>
<div class="register">
  <center> <h1> Bienvenue sur la page d'Inscription</h1></center>
    <form class="text-center border border-light p-5" action="" method="post">
    <center><h1>S'inscrire !</h1></center> 
    <input type="text" class="form-control mb-4" name="username" placeholder="Nom d'utilisateur" required />
    <input type="email" class="form-control mb-4" name="email" placeholder="Email" required />
    <input type="password" class="form-control mb-4" name="password" placeholder="Mot de passe" required />
    <button  type="submit" name="submit" >S'inscrire</button>
    <p class="box-register">Deja inscrit? <a href="login.php">Connectez vous ici!</a></p>


</div>
<footer id="footer">
        <ul>
            <li><img src="./images/fb.png" alt="Facebook"> Facebook</li>
            <li><img src="./images/insta.jpg" alt="Instagram"> Instagram</li>
            <li><img src="./images/gmail.png" alt="gmail"> E-mail</li>
        </ul>
        <center><p class="copyright">&copy; Untitled. All rights reserved. Design by SHAM'S CARS .</p></center>
    </footer>
<?php } ?>
</body>
</html>

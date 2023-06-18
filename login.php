<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Compagnie de transport</title>
    <link rel="stylesheet" href="reservation.css">
    <link rel="stylesheet" type="text/css" href="register.css">
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
require('class.php');
session_start();
if (isset($_POST['username'])){

    $user = new USER();
//zniti
  $user->username = stripslashes($_REQUEST['username']);
  $user->username = mysqli_real_escape_string($conn, $user->username);
  $user->password = stripslashes($_REQUEST['password']);
  $user->password = mysqli_real_escape_string($conn, $user->password);
    $query = "SELECT * FROM `user` WHERE username='$user->username' and password='$user->password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  if($rows==1){
      $_SESSION['id']    = $row['id'];
      $_SESSION['username'] = $user->username;
      header("Location: index.php");
  }else{
    $message = "Incorrect username or password.";

  }
}
?>



 <div class="register">

      <form class="text-center border border-light p-5" action="" method="post" name="login">
        <h1>Se connecter !</h1>
        <input type="text" class="form-control mb-4" name="username" placeholder="Nom d'utulisateur">
        <input type="password" class="form-control mb-4" name="password" placeholder="Mot de passe">
            <button  type="submit" name="submit" >Se connecter</button>
        <p>Vous n'avez pas de compte?<a href="register.php">Inscrivez vous ici!</a></p>
        <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
      </form>
  </div>


</form>
 
<footer id="footer">
        <ul>
            <li><img src="./images/fb.png" alt="Facebook"> Facebook</li>
            <li><img src="./images/insta.jpg" alt="Instagram"> Instagram</li>
            <li><img src="./images/gmail.png" alt="gmail"> E-mail</li>
        </ul>
        <center><p class="copyright">&copy; Untitled. All rights reserved. Design by SHAM'S CARS .</p></center>
    </footer>
</body>
</html>

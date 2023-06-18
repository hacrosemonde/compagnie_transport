<?php
// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données du formulaire
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];


    header("Location: reservation_traitement.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css">
    <title>Réservation</title>
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
   
    <div class="login_form">
        <center><h1>Bienvenue sur la page de réservation veuillez remplir le formulaire ci-dessous</h1></center>
        <form action="register.php" method="post">
            <h2 class="text_center">Réservation de ticket</h2>
            <div class="form_group">
                <input type="text" name="nom" class="form_control" placeholder="Nom" required="required" autocomplete="off">
            </div>
            <div class="form_group">
                <input type="date" name="date" class="form_control" placeholder="Date" required="required" autocomplete="off">
            </div>
            <di class="form_group">
                <input type="text" name="Destination" class="form_control" placeholder="Destination"  required="required" autocomplete="off" >
            </di>
            <div class="form_group">
                <input type="text" name="ticket" class="form_control" placeholder="Ticket" required="required" autocomplete="off" >
            </div>
          <center>
                <div class="form_group">
                    <button type="submit" class="btn btn-primary btn-block" >Envoyer</button>
                </div>
          </center>  
        </form>
    </div>
    
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
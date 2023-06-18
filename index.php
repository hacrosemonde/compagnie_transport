<?php
//initialiser la session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Compagnie de transport</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h1 class="tete"><marquee class="marquee" behavior="" direction="ri">
        <?php
                if(isset($_SESSION["username"])){
                    echo" BIENVENUE A SHAM'S COMPAGNIE LA OU NOUS FAISON DE VOS VOYAGES UN RÊVE UNIQUE.";
                } else {
                    echo"BIENVENUE";
                    echo " A SHAM'S COMPAGNIE LA OU NOUS FAISONS DE VOS VOYAGES UN RÊVE UNIQUE.";
                }
        ?>
        </marquee></h1>
       <div class="hero">
        <header>
            <div class="image">
                <img src="./images/logo.png" alt="Logo">
            </div>
            
            <div class="menu">
                <ul>
                    <li><a href="index.php">Accueil</a> </li>
                    <li><a href="service.html">Location de véhicules</a> </li>
                    <li><a href="reservation.php">Reservation</a> </li>
                    <li><a href="formulaire.php">Service Colis</a> </li>
                    <li><a href="#footer">Nous Contacter</a> </li>
                    <li>
                        <span class="navbar-text white-text">
                          <?php

                        if(!isset($_SESSION["username"])){

                          echo '<a href="admin1.php">Se Connecter</a>';                        

                        }else {
                          echo '<a href="logout.php">Se Deconnecter</a>';                         
                        }
                      ?>
                    </span>
                    </li>
                </ul>
            </div>
        </header>
        <center class="texxtarea_center">
            <div class="textarea">
                <h1>Vous souhaitez Vous déplacer en toute sécurité?</h1>
                <h2>Faites le bon choix</h2>
                <h3>Avec Sham's Compagnie</h3>
                <center class="arrow"><img src="./images/arrow.svg" alt="double fleches"></center>
            </div>
        </center>
    </div>
    <section class="text1">
        <div class="bienvenue">
            <img src="./images/voiture1.png" alt="">
        </div>
        <div class="texarea1">
            <center class="text-center">
                <h1> Votre Compagnie de transport terrestre pour vous Satisfaire.</h1>
                Bienvenue chez SHAM'S Compagnie de transport terrestre.
                Nous sommes une compagnie de transport terrestre dédiée à fournir des services de qualité supérieure pour répondre à tous vos besoins de déplacement.
                 Que ce soit pour vos trajets quotidiens, des transferts vers l'aéroport, des excursions en groupe ou des voyages d'affaires,
                  nous sommes là pour vous offrir une expérience de transport fiable, confortable et pratique.
                </p> 
            </center>
        </div>
    </section>
    <section class="table_section">
        <div class="offre">
             <center>
                <h1 class="of-h1">Vous faire Voyager en toute confiance, notre plus grande passion</h1>
             </center>
        </div> 

        <div class="items">
            <div class="item">
                <div class="im-item">
                    <img src="./images/image1.png" alt="image1" >
                </div>
                <div class="title">
                <a href="reservation.php"><b>Disponible pour vos déplacements Confortables </b></a>                  
                </div>
            </div>
            <div class="item">
                <div class="im-item">
                    <img src="./images/image4.png" alt="image4">
                </div>
                <div class="title">
                    <a href="service.html"> <b> Location de véhicules pour vos déplacements</b> </a>                   
                </div>
            </div>
            <div class="item">
                <div class="im-item">
                    <img src="./images/billeterie.jpg" alt="billeterie" >
                </div>
                <div class="title">
                    <a href="reservation.php"><b>Réservez votre billet en toute sécurité </b> </a>                   
                </div>
            </div>
            <div class="item">
                <div class="im-item">
                    <img src="./images/livraison.png" alt="livraison">
                </div>
                <div class="title">
                    <a href="formulaire.php"> <b>Service de Livraisons fiable </b></a>                 
                </div>
            </div>
        </div>
    </section>
    <div class="voir">
        <a class="voir" href="service.html">voir plus</a>
    </div>
        <section class="inter"> 
                <h2>Nous Contacter</h2>
            <form> 
                <input type="text" placeholder="Nom et Prénoms" name="nom" size="20"></br><br>
                 <input type="text" placeholder="Modèle de véhicule" name="Modèle" size="20"></br></br>
                <input type="text" placeholder="Adresses" name="Caractéristiques" size="20"> </br></br>
                <b>Message</b>
                <textarea name="nom" rows="4" cols="40">
                </textarea> <br> <br>
                <button type="submit" ><a href="connexion.php">Envoyer</a></button>
                <form method= 'post' action="url d'expédition" enctype=' text/plain'>
            </form>
        </section>
    
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


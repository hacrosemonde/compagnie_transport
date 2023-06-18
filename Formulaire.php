<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Service de livraison</title>
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
    <section>
        <div class="text_item1">
            <h2> NOUS LIVRONS VOS COLIS PARTOUT, EN TOUTE FIABILITE</h2> <br>
            <img src="./images/chauffeur bus.jpg" alt=""  width= "47%" height= "47%" >
            <img src="./images/rosebox-BFdSCxmqvYc-unsplash.jpg" alt="" width= "25%" height= "25%">
            <img src="./images/johan-godinez-dDYRYivNzbI-unsplash.jpg" alt="" width= "21%" height= "30%">
            <p>Nous sommes ravis de vous présenter notre service de livraison fiable et pratique, 
                conçu pour répondre à vos besoins de livraison en toute simplicité. Que vous soyez un particulier ou une entreprise, 
                nous sommes là pour vous aider à expédier vos colis et à les faire parvenir à leur destination en toute sécurité et dans les délais impartis.
            </p> 
            <br>
            <h2> Voici ce qui distingue notre compagnie : <br> <br></h2>
            <p>

                1. Flotte diversifiée : Nous disposons d'une flotte de véhicules variée, comprenant des berlines de luxe, des VUS spacieux, des minivans et des autobus. 
                Quelle que soit la taille de votre groupe ou vos préférences de voyage, nous avons le véhicule adapté pour vous garantir confort et commodité.
            </p>
            <p>
               2. Chauffeurs professionnels : Nos chauffeurs sont des professionnels qualifiés, courtois et attentifs à vos besoins. Ils sont formés pour vous offrir un service amical, ponctuel et sécurisé. 
               Ils connaissent bien les itinéraires locaux et sont prêts à vous fournir des informations et des recommandations pour rendre votre voyage encore plus agréable.
            </p>
            <p>
               3. Fiabilité et ponctualité : Nous comprenons l'importance d'arriver à destination à temps. C'est pourquoi nous nous engageons à respecter les horaires convenus et à vous offrir un service ponctuel. 
                Nous suivons de près les conditions de circulation pour éviter les retards inutiles et vous assurer une expérience de voyage sans stress.
            </p>
            <p>
                4. Service personnalisé : Nous nous efforçons de répondre à vos besoins spécifiques et de vous offrir un service personnalisé. 
                Que vous ayez des exigences particulières en matière de confort, de bagages ou d'itinéraire, nous sommes là pour vous satisfaire.
                 Votre satisfaction est notre priorité absolue.
            </p>
            <p>
                5. Tarifs compétitifs : Nous croyons fermement qu'un service de qualité ne doit pas nécessairement être coûteux. Nous proposons des tarifs compétitifs et transparents, sans frais cachés.
                Nous offrons également des options de réservation flexibles pour vous simplifier la vie.
            </p>
            <p>
                Lorsque vous voyagez avec SHAM'S Compagnie, vous pouvez avoir la tranquillité d'esprit en sachant que vous êtes entre de bonnes mains. 
                Nous sommes déterminés à vous offrir un service de transport terrestre de premier ordre, en mettant l'accent sur votre confort, 
                votre sécurité et votre satisfaction.
            </p>
            <p>
                Contactez-nous dès aujourd'hui pour réserver votre prochain voyage avec SHAM'S Compagnie. 
                Nous sommes impatients de vous offrir une expérience de voyage mémorable et agréable.
            </p>
        </div>
<br><br>
    </section>
    <center><h1>Service de livraison de colis:</h1></center>
    <form action="Formulaire.php" method="post">
        <p>Nom du destinataire : <input type="text" name="nom" class="form_control" placeholder="Nom_destinataire" required="required" autocomplete="off"></p> <br>
        <p>Destination du colis: <input type="text" name="colis" class="form_control" placeholder="Destination du colis" required="required" autocomplete="off"></p> <br>
        <p>Contact du destinataire: <input type="text" name="Contact" class="form_control" placeholder="Contact du destinataire" required="required" autocomplete="off"></p><br>
        <p>Date de livraison: <input type="date" name="date" class="form_control" placeholder="Date de livraison" required="required" autocomplete="off"></p><br>
        <p> Téléphone: <input type="text" name="tele"  pattern="^0[0-9]{1}[0-9]{8}$" /></p> <br>
        <button type="submit" ><a href="traitement_livraison.php">Soumettre la demande</a> </button>
       </form>
       <br><br>
      <center>
        <div class="offre">
             <center>
                <h1 class="of-h1">Vous faire Voyager en toute confiance, notre plus grande passion</h1>
             </center>
        </div
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

<?php
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $description = $_POST['description'];

    // Enregistrer la demande dans la base de données ou effectuer d'autres opérations nécessaires
    // Par exemple, vous pouvez insérer les données dans une table "Demandes" dans une base de données

    // Exemple d'insertion de données dans une base de données MySQL en utilisant PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=votre_base_de_donnees', 'nom_utilisateur', 'mot_de_passe');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO demandes (nom, adresse, telephone, description) VALUES (:nom, :adresse, :telephone, :description)');
        $stmt->execute(array(
            'nom' => $nom,
            'adresse' => $adresse,
            'telephone' => $telephone,
            'description' => $description
        ));

        echo "La demande a été soumise avec succès.";
    } catch(PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Envoyer une confirmation par e-mail au client, si nécessaire

    // Rediriger vers une page de confirmation
    // header("Location: confirmation.php");
    // exit();
}
?><!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="reservation.css">
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
    <center>
    <h1>Confirmation de livraison</h1>
    <p>Merci de nous faire confiance pour la livraison de vos colis.</p>
    <p> Votre demande a été enregistrée avec succès.</p>
    </center>
    <br><br> <br><br><br> <br><br><br><br>
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
```


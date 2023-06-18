<?php
// Connexion à la base de données
$serveur = "localhost";
$nom= "nom";
$destination="destination";
$date = "date";
$tickets="tickets";
$nomBaseDeDonnees = "bd_vehicule";

$connexion = mysqli_connect($serveur, $nom, $destination, $date, $tickets, $nomBaseDeDonnees);


if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}


$id = $_GET['id'];

// Requête SQL pour récupérer les détails de réservation
$sql = "SELECT * FROM reservation WHERE id = $id";
$resultat = mysqli_query($connexion, $sql);

if ($resultat && mysqli_num_rows($resultat) >0) {
    $row = mysqli_fetch_assoc($resultat);
    $nom = $row['nom'];
    $email = $row['email'];
    $password = $row['password'];
    // Autres détails de réservation à récupérer selon votre base de données

    // Envoi de l'e-mail de confirmation
    $destinataire = $nom;
    $sujet = "Confirmation de réservation";
    $message = "Cher $nom,\n\nVotre réservation a été confirmée. Merci d'avoir choisi notre service de livraison.\n\nNous vous enverrons prochainement un e-mail de suivi avec les détails de votre livraison.\n\nCordialement,\nL'équipe de notre compagnie de transport terrestre";

    // Utilisation de la fonction mail() pour envoyer l'e-mail
    if (mail($destinataire, $sujet, $message)) {
        echo "E-mail de confirmation envoyé avec succès à $email.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail de confirmation.";
    }
} else {
    echo "Erreur lors de la récupération des détails de réservation depuis la base de données : " . mysqli_error($connexion);
}

// Fermeture de la connexion à la base de données
mysqli_close($connexion);
?>

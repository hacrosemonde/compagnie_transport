<?php
if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tickets = $_POST['tickets'];

    // Générer le contenu du PDF
    $pdfContent = "Détails de la réservation :\n";
    $pdfContent .= "Nom : " . $nom . "\n";
    $pdfContent .= "Email : " . $email . "\n";
    $pdfContent .= "Nombre de tickets : " . $tickets . "\n";

    // Générer le nom du fichier PDF
    $pdfFilename = "reservation_" . $nom . ".pdf";

    // Créer le fichier PDF
    $pdf = new \TCPDF();
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Write(0, $pdfContent);
    $pdf->Output($pdfFilename, 'F');

    // Envoyer le PDF par e-mail
    $to = $email;
    $subject = "Confirmation de réservation";
    $message = "Merci pour votre réservation. Veuillez trouver votre ticket ci-joint.";
    $headers = "From: info@example.com" . "\r\n";
    $headers .= "Reply-To: info@example.com" . "\r\n";
    $headers .= "Content-Type: application/pdf" . "\r\n";
    $attachment = chunk_split(base64_encode(file_get_contents($pdfFilename)));
    $headers .= "Content-Disposition: attachment; filename=\"" . $pdfFilename . 
}
?>
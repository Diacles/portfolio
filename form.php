<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["unNom"];
    $email = $_POST["unMail"];
    $message = $_POST["unMessage"];
    
    // Adresse e-mail où vous souhaitez recevoir le message
    $destinataire = "contact@alcidesdeoliveiraguerra.com";
    
    // Sujet du message
    $sujet = "Nouveau message de $nom via le formulaire de contact";

    // Corps du message
    $corpsMessage = "Nom: $nom\n";
    $corpsMessage .= "Email: $email\n";
    $corpsMessage .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoyer l'e-mail
    if (mail($destinataire, $sujet, $corpsMessage, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre message. Veuillez réessayer plus tard.";
    }
} else {
    echo "Erreur: Ce script ne peut pas être accédé directement.";
}
?>

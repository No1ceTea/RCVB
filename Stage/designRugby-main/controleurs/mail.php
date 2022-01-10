<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../../../bin/phpMyAdmin/vendor/autoload.php';
require("../include/PHPMailer/PHPMailer.php");
require '../include/PHPMailer/Exception.php';
require '../include/PHPMailer/SMTP.php';
//require("../PHPMailer/PHPMailer.php");



date_default_timezone_set('Etc/UTC');

$mailContact = "rcvb.contact@gmail.com";
$nomContact = 'doudou';


$mail = new PHPMailer;

$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;//587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;//'tls';
$mail->isSMTP();
$mail->SMTPAuth   = true;
$mail->Password   = 'rcvb-contact1';
$mail->Username = 'rcvb.contact@gmail.com';


$mail->SMTPDebug = 1;
//$mail->debugoutput = 'html';


$nom = trim(filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));
$prenom = trim(filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));
$expediteur = $nom." ".$prenom;
$mailExpediteur = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
$objet = trim(filter_input(INPUT_POST, "objet", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));
$message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_SANITIZE_ENCODED));

$mail->setFrom($mailContact, $nomContact);
$mail->addReplyTo($mailExpediteur, $expediteur);
$mail->addAddress($mailContact, $nomContact);
$mail->Subject = 'Une personne a tenté de vous joindre depuis le site web : '.$objet;
$mail->isHTML(true);
$mail->Body = $message."\n".$nom;


if ($mail->send()) {
    echo "Mailer ok  ";
} else {
    echo "Message nok";
    echo $mail->ErrorInfo;
}
/*if (is_empty($nom) || is_empty($prenom) || is_empty($mail) || is_empty($message)) 
{
    echo "<p> Tous les champs doivent être renseignés </p>";
} else {

    echo "Début";
    $mailDestinataire = "amal.hecker.sio@gmail.com";
    $headers['From'] = $mailExpediteur;
    $headers['Reply-To'] = $mailExpediteur;
    $headers['Content-Type'] = 'text/plain; charset=utf-8';
    $headers['X-Priority'] = '1';
    var_dump($headers);
    /*
    $headers = 'MIME-Version: 1.0'. "\r\n";
    $headers .= "From:$nom $prenom '<'.$mailExpediteur.'>'\r\n" .
            "Reply-To: $mailDestinataire\r\n".
            "Content-Type: text/plain; charset=utf-8\r\n";
            
    if (mail($mailDestinataire, $objet, $message, $headers)) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }else{
    	echo "<p>Votre message n'a pas pu être envoyé.</p>";
    }
    

/*
$recuperation = $recuperation."\n";
$recuperation = $recuperation.$_POST['prenom'];
$recuperation = $recuperation." \n";
$recuperation = $recuperation.$_POST['email'];
$_POST['sujet'] = "Une personne a essayé de vous joindre depuis le site web.";
*/
//mail(to, subject, message);

/*$retour = mail('fatougui9@outlook.com',$_POST['sujet'],  $_POST['message'],$recuperation);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }else{
    	echo "<p>Votre message n'a pas pu être envoyé.</p>";
    }
*/

?>

 
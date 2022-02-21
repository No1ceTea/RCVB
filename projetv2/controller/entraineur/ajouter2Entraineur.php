<?php
session_start();
include('../../modele/connexionDB.php');
extract($_POST) ;

$mdp=rand(1000,9999);

$subject="Votre nouveau mot de passe sur le site du RCVB";
$message ="Bonjour, Voici votre nouveau mot de passe : ". $mdp .". Nous vous conseillons de changer votre mot de passe au plus vite.";

sendmail($subject, $message);
$mdp = password_hash($mdp, PASSWORD_DEFAULT);
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
$DB->insert("INSERT INTO entraineurs (nom, prenom, mail, telephone, mdp) VALUES(?, ?, ?, ?, ?)",
    array($nom, $prenom, $mail, $tel, $mdp));
}

header("location:../../vues/entraineur/gestionEntraineur.php") ;
?>
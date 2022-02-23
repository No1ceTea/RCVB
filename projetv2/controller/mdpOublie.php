<?php
  session_start(); 
  include('../modele/connexionDB.php');
  extract($_POST) ;
  $mail = htmlentities(strtolower(trim($mail)));
  $mdpTemp=rand(1000,9999);
  echo $mdpTemp;
  $mdpTemp = password_hash($mdpTemp, PASSWORD_DEFAULT);

if($_SESSION['ChoixConnexion']="adherent"){
    $DB->insert("update adherents set mdpTemp='$mdpTemp' where mail='$mail'");
    $req = $DB->query("SELECT * FROM adherents WHERE mail = ? ",
    array($mail));
    $req = $req->fetch();

    $subject="mot de passe oublié RCVB";
    $message ="Bonjour, Voici votre nouveau mot de passe : ". $mdpTemp .". Nous vous conseillons de changer votre mot de passe au plus vite.";

    sendmail($subject, $message, $mail); 
}
if($_SESSION['ChoixConnexion']="entraineur"){
    $DB->insert("update entraineur set mdpTemp='$mdpTemp' where mail='$mail'");
    $req = $DB->query("SELECT * FROM entraineur WHERE mail = ? ",
    array($mail));
    $req = $req->fetch();

    $subject="mot de passe oublié RCVB";
    $message ="Bonjour, Voici votre nouveau mot de passe : ". $mdpTemp .". Nous vous conseillons de changer votre mot de passe au plus vite.";

    sendmail($subject, $message, $mail);  
}
if($_SESSION['ChoixConnexion']="responsable"){
    $DB->insert("update responsable set mdpTemp='$mdpTemp' where mail='$mail'");
    $req = $DB->query("SELECT * FROM responsable WHERE mail = ? ",
    array($mail));
    $req = $req->fetch();

    $subject="mot de passe oublié RCVB";
    $message ="Bonjour, Voici votre nouveau mot de passe : ". $mdpTemp .". Nous vous conseillons de changer votre mot de passe au plus vite.";

    sendmail($subject, $message, $mail); 
}
if($_SESSION['ChoixConnexion']="manager"){
    $DB->insert("update manager set mdpTemp='$mdpTemp' where mail='$mail'");
    $req = $DB->query("SELECT * FROM manager WHERE mail = ? ",
    array($mail));
    $req = $req->fetch();

    $subject="mot de passe oublié RCVB";
    $message ="Bonjour, Voici votre nouveau mot de passe : ". $mdpTemp .". Nous vous conseillons de changer votre mot de passe au plus vite.";

    sendmail($subject, $message, $mail);
}

?>
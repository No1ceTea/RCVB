<?php
  session_start();
  include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  $idAdh=$_GET["idAdh"];

    if($_POST['changerPaiement']=="valide"){
        $res=$DB->query("update adherents set reglement='valide' where idAdh='$idAdh'");
    }
    if($_POST['changerPaiement']=="enCours"){
        $res=$DB->query("update adherents set reglement='enCours' where idAdh='$idAdh'");
    }
    if($_POST['changerPaiement']=="non"){
        $res=$DB->query("update adherents set reglement='non' where idAdh='$idAdh'"); 
    }









    header('Location: ../vues/verifPaiement.php');
?>
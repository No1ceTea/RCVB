<?php
  session_start();
  include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

  if ($_POST["paiement"]=="valide"){
    $_SESSION['afficherPaiement']="valide";
  }
  if ($_POST["paiement"]=="enCours"){
    $_SESSION['afficherPaiement']="enCours";
  }
  if ($_POST["paiement"]=="non"){
    $_SESSION['afficherPaiement']="non";
  }
  if ($_POST["paiement"]=="definir"){
    $_SESSION['afficherPaiement']="definir";
  }

  header('Location: ../vues/verifPaiement.php');
?>
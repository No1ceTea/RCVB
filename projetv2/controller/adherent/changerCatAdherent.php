<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  $idAdh=$_GET["idAdh"] ;
  $choixC=$_POST["choixC"] ;
  if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $DB->insert("update adherents set idCat='$choixC' where idAdh='$idAdh'");
    }

    header("location:../../index.php") ;

?>
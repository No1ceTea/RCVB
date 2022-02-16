<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  $idAdh=$_GET["idAdh"] ;
  $idcat=$_GET["idcat"] ;
  if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $DB->insert("update adherents set idCat='$idcat' where idAdh='$idAdh'");
    }

    header("location:../../index.php") ;

?>
    
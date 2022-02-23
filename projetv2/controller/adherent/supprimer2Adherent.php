<?php
session_start();
include('../../modele/connexionDB.php');

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $idAdh=$_GET["idAdh"] ;
    $DB->insert("delete from adherents where idAdh='$idAdh'");			
		
    header("location:../../vues/categorie/vueCategorie.php") ;
}

?>
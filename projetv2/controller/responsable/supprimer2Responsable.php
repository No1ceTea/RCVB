<?php
session_start();
include('../../modele/connexionDB.php');

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $supp=$_GET["supp"] ;
    $DB->insert("DELETE from responsable where idResp=$supp");			
		
    header("location:../../vues/responsable/gestionResponsable.php") ;
}
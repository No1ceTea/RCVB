<?php
session_start();
include('../../modele/connexionDB.php');

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $supp=$_GET["supp"] ;
    $DB->insert("delete from entraineurs where idEntrn='$supp'");			
		
    header("location:../../vues/entraineur/gestionEntraineur.php") ;
}

?>
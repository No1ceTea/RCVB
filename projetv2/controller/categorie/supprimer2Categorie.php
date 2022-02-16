<?php
session_start();
include('../../modele/connexionDB.php');

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
    $supp=$_GET["supp"] ;
    $DB->insert("delete from categorie where idCat='$supp'");			
		
    header("location:../../vues/categorie/vueCategorie.php") ;
}

?>
<?php
session_start();
include('../../modele/connexionDB.php');
extract($_POST) ;

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
$DB->insert("INSERT INTO categorie (idCat, nomCat, prix) VALUES(?, ?, ?)",
    array($idCat, $nomCat, $prix));
}

header("location:../../vues/categorie/vueCategorie.php") ;
?>
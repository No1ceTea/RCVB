<?php
session_start();
include('../../modele/connexionDB.php');
extract($_POST) ;

if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
$DB->insert("INSERT INTO competition (nom, date, heure, lieu, idCat) VALUES(?, ?, ?, ?, ?)",
    array($nom, $date, $heureDebut, $lieu, $idCat));
}

header("location:../../vues/competition/gestionCompetition.php") ;
?>
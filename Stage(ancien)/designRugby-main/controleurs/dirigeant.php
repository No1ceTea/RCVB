<?php
session_start();
$option = $_REQUEST["option"];

switch ($option) {

	case 'listeAdh' :{
		$lesLignes = $pdo->getInfosAdh();
		include("vues/sommaireD.php");
		include("vues/listeAdh.php");
		break;

	}

	case 'suiviePaiement':{
		# code...
		break;
	}

	case 'majInfosPerso':{
		$idDirigeant = $_SESSION['idDirigeant'];
		$valider = $pdo->majInfosPerso();
		include("vues/infosPerso.php");
		break;
	}
}























?>
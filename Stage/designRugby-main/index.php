<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdorugby.inc.php");

$pdo = PdoRugby::getPdoRugby();

$estConnecter = estConnecte();

if(!isset($_REQUEST["action"])) {
   $action = "accueil";
}else {
    $action = $_REQUEST["action"];
}


switch ($action) {
    
    case 'accueil':
        include("vues/entete.php");
        include("vues/accueil.php");
        break;

    case 'formulaire':
        include("vues/entete.php");
        include("vues/formulaire.php");
        break;

    case 'inscription':
        include("controleurs/inscription.php");
        break;

    case 'categories':
        include("vues/entete.php");
        include("controleurs/categories.php");
        break;

    case 'contact':
        include("vues/entete.php");
        include("vues/formContact.php");
        break;

    case 'connexion':
        include("vues/entete.php");
    	include("vues/formConnexion.php");
    	break;

    case 'seConnecter':
        include("controleurs/connexion.php");
        break;

    case 'paiement':
        include("vues/entete.php");
        include("vues/paiement.php");
        break;

    case 'dirigeant':
        include("controleurs/dirigeant.php");
        break;
    
    case 'histoire':
        include("vues/entete.php");
        include("vues/rgpd.php");
        //include("styles/styleRgpd.css");
        break;
    
        
}

include("vues/pied.php");



?>
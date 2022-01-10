<?php


$option = $_REQUEST["option"];


switch ($option) {
    case 'lutins':
        include("vues/lutins.php");
        break;
    case 'miniPoussins':
        include("vues/miniPoussins.php");
        break;
    case 'poussins':
        include("vues/poussins.php");
        break;
    case 'benjamins':
        include("vues/benjamins.php");
        break;
    case 'minimes':
        include("vues/minimes.php");
        break;
    case 'cadets':
        include("vues/cadet.php");
        break;
    case 'cadettes':
        include("vues/cadettes.php");
        break; 
    case 'juniors':
        include("vues/juniors.php");
        break; 
    case 'seniors':
        include("vues/seniors.php");
        break; 
    case 'seniorsFem':
        include("vues/seniorsFem.php");
        break;
    case 'rugbyLoisir':
        include("vues/rLoisir.php");
        break;
    case 'rugbyAdapte':
        include("vues/rAdapte.php");
        break;
    case 'rugbyCancer':
        include("vues/rCancer.php");
        break;

}



?>
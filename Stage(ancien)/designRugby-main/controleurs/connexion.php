<?php

$option = $_REQUEST["option"];

switch ($option) {
  	case 'connexion':{
  		include("vues/formConnexion.php");
  		break;
      }
    case 'seConnecter':{
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
  		  if ($login && $mdp){
            $visiteur = $pdo->getInfosDirigeant($login,$mdp);
            if(!($visiteur)){
                include("vues/entete.php");
                ajouterErreur("Identifiant ou mot de passe incorrect");
                include("vues/erreur.php");
                include("vues/formConnexion.php");
            }
            else{
                $id = $visiteur['idDirigeant'];
                $nom =  $visiteur['nom'];
                $prenom = $visiteur['prenom'];
                connecter($id,$nom,$prenom);
                include("vues/sommaireD.php");
            }
        }
  		  break;
    }
    case 'deconnexion' :{
        
        unset($_SESSION['prenom']); 
        unset($_SESSION['nom']);
        session_destroy();
        header("Location: index.php");
    exit;
  		  break;
  	}

  case 'mdpOublie':
    include("vues/entete.php");
    include("vues/formMdpOublie.php");
    break;


}

?>
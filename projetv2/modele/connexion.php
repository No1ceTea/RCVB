<?php
  session_start();
  include('connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
 
    // S'il y a une session alors on ne retourne plus sur cette page  
    if (isset($_SESSION['id'])){
        header('Location: ../index.php');
        exit;
    }
    
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
    
        if (isset($_POST['connexion'])){
        $mail = htmlentities(strtolower(trim($mail)));
        $mdp = trim($mdp);

        
            // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
            $req = $DB->query("SELECT * FROM Manager WHERE mail = ? AND mdp = ?",
                array($mail, hash('sha512', $mdp)));
            $req = $req->fetch();
        
            // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
            if ($req['idManager'] == ""){
                $valid = false;
                header('Location: ../vues/formConnexion.php');
            }
        
        
            // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
            if ($valid){
                $_SESSION['id'] = $req['idManager']; // id de l'utilisateur unique pour les requêtes futures
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
        
                header('Location: ../index.php');
                exit;
            }
        }
    }
?>
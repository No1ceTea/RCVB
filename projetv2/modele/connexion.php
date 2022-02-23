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
        $mail = htmlentities(trim($mail));
        $mdp = trim($mdp);
        
        //CONNEXION POUR L'ADHERENT
        if ($_SESSION['ChoixConnexion']=="adherent"){
            $req = $DB->query("SELECT * FROM adherents WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();
            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            if ($valid){
                $_SESSION['id'] = $req['idAdh'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='adherent';
                header('Location: ../index.php');
            }
        }


        //CONNEXION POUR L'ENTRAINEUR
        if ($_SESSION['ChoixConnexion']=="entraineur"){
            $req = $DB->query("SELECT * FROM entraineurs WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();
            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            else if ($valid){
                $_SESSION['id'] = $req['idEntrn'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='entraineur';
                header('Location: ../index.php');
            }
        }

        //CONNEXION POUR LE RESPONSABLE
        if ($_SESSION['ChoixConnexion']=="responsable"){
            $req = $DB->query("SELECT * FROM responsable WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();
            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            if ($valid){
                $_SESSION['id'] = $req['idResp'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='responsable';
        
                header('Location: ../index.php');
            }
        }


        //CONNEXION POUR LE MANAGER
        if ($_SESSION['ChoixConnexion']=="manager"){

            $req = $DB->query("SELECT * FROM manager WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();

            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            if ($valid){
                $_SESSION['id'] = $req['idManager'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='manager';
                
                header('Location: ../index.php');
            }
        }
        //CONNEXION POUR LE PERE
        if ($_SESSION['ChoixConnexion']=="pere"){

            $req = $DB->query("SELECT * FROM pere WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();

            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            if ($valid){
                $_SESSION['id'] = $req['idPere'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='pere';
                
                header('Location: ../index.php');
            }
        }
        //CONNEXION POUR LA MERE
        if ($_SESSION['ChoixConnexion']=="mere"){

            $req = $DB->query("SELECT * FROM mere WHERE mail = ? ",
                array($mail));
            $req = $req->fetch();

            $valid=password_verify($mdp, $req['mdp']);
        
            // la requete ne retourne rien
            if ($valid == false){
                header('Location: ../vues/choixConnexion.php');
            }
        
            // la requete retourne le compte
            if ($valid){
                $_SESSION['id'] = $req['idMere'];
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prenom'] = $req['prenom'];
                $_SESSION['mail'] = $req['mail'];
                $_SESSION['autorisation']='mere';
                
                header('Location: ../index.php');
            }
        }



        }
    }
?>

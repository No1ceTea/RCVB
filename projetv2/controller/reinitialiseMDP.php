<?php
session_start();
include('../modele/connexionDB.php');

if($_SESSION['ChoixConnexion']="adherent"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM adherents WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update adherents set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    }
}

if($_SESSION['ChoixConnexion']="entraineur"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM entraineur WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update entraineur set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    }  
}

if($_SESSION['ChoixConnexion']="responsable"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM responsable WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update responsable set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    } 
}

if($_SESSION['ChoixConnexion']="manager"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM manager WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update manager set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    }  
}

if($_SESSION['ChoixConnexion']="mere"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM mere WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update mere set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    }  
}

if($_SESSION['ChoixConnexion']="pere"){
    if(!empty($_POST)){
        extract($_POST);
        $req = $DB->query("SELECT * FROM pere WHERE mail = ? ",
            array($mail));
        $req = $req->fetch();
        if(password_verify($mdpTemp, $req['mdpTemp'])==true){
    
            if($mdpC==$Nmdp){
                $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
                $DB->insert("update pere set mdp='$mdpC' where mail='$mail'");
                header("location:../index.php");
            }
            else{
                header("location:../vues/formReinitialise.php");
            }
        }
        else{
            header("location:../vues/formReinitialise.php");
        }
    }
    else{
        header("location:../vues/formReinitialise.php");
    }  
}

?>
<?php
session_start();
include('../../modele/connexionDB.php');


if(!empty($_POST)){
    extract($_POST);
    $id=$_SESSION['id'];
    $req = $DB->query("SELECT * FROM adherents WHERE idAdh = ? ",
        array($id));
    $req = $req->fetch();
    if(password_verify($mdp, $req['mdp'])==true){

        if($mdpC==$Nmdp){
            $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
        
            if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="adherent"){
                $DB->insert("update adherents set mdp='$mdpC' where idAdh=$id");
                header("location:../../index.php");
            }
            else{
                header("location:../../vues/adherent/formMDPAdherent.php");
            }
        }
        else{
            header("location:../../vues/adherent/formMDPAdherent.php");
        }
    }
    else{
        header("location:../../vues/adherent/formMDPAdherent.php");
    }
}
else{
    header("location:../../vues/adherent/formMDPAdherent.php");
}
?>
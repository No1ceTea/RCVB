<?php
session_start();
include('../../modele/connexionDB.php');


if(!empty($_POST)){
    extract($_POST);
    $id=$_SESSION['id'];
    $req = $DB->query("SELECT * FROM manager WHERE idManager = ? ",
        array($id));
    $req = $req->fetch();
    if(password_verify($mdp, $req['mdp'])==true){

        if($mdpC==$Nmdp){
            $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);
        
            if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
                $DB->insert("update manager set mdp='$mdpC' where idManager=$id");
                header("location:../../index.php");
            }
            else{
                header("location:../../vues/manager/formMDPManager.php");
            }
        }
        else{
            header("location:../../vues/manager/formMDPManager.php");
        }
    }
    else{
        header("location:../../vues/manager/formMDPManager.php");
    }
}
else{
    header("location:../../vues/manager/formMDPManager.php");
}
?>
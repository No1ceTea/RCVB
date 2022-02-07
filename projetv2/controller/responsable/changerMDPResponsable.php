<?php
session_start();
include('../../modele/connexionDB.php');


if(!empty($_POST)){
    extract($_POST);
    $id=$_SESSION['id'];
    $req = $DB->query("SELECT * FROM responsable WHERE idResp = ? ",
        array($id));
    $req = $req->fetch();
    if(password_verify($mdp, $req['mdp'])==true){
        if($mdpC==$Nmdp){
            $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);

            if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="responsable"){
                $DB->insert("update responsable set mdp='$mdpC' where idResp=$id");
                header("location:../../index.php") ;	
            }

        }
    }
    header("location:../../vues/responsable/formMDPResponsable.php");
}
?>
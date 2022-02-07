<?php
session_start();
include('../../modele/connexionDB.php');


if(!empty($_POST)){
    extract($_POST);
    $id=$_SESSION['id'];
    $req = $DB->query("SELECT * FROM entraineurs WHERE idEntrn = ? ",
        array($id));
    $req = $req->fetch();
    if(password_verify($mdp, $req['mdp'])==true){
        if($mdpC==$Nmdp){
            $mdpC = password_hash($mdpC, PASSWORD_DEFAULT);

            if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="entraineur"){
                $DB->insert("update entraineurs set mdp='$mdpC' where idEntrn=$id");
                header("location:../../index.php") ;	
            }

        }
    }
    header("location:../../vues/entraineur/formMDPEntraineur.php");
}
?>
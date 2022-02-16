<?php
    session_start();
    include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
    $id=$_SESSION['id'];


    if(!empty($_POST)){
        extract($_POST);
        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="adherent"){
            $res=$DB->query("select * from adherents WHERE idAdh='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update adherents set mail='$mail' where idAdh=$id");
            }
            if($res['adresse']!=$adresse){
                $DB->insert("update adherents set adresse='$adresse' where idAdh=$id");
            }
            if($res['ville']!=$ville){
                $DB->insert("update adherents set ville='$ville' where idAdh=$id");
            }
            if($res['cp']!=$cp){
                $DB->insert("update adherents set cp='$cp' where idAdh=$id");
            }
            if($res['telDomicile']!=$telDomicile){
                $DB->insert("update adherents set telDomicile='$telDomicile' where idAdh=$id");
            }
            if($res['telPortable']!=$telPortable){
                $DB->insert("update adherents set telPortable='$telPortable' where idAdh=$id");
            }
            if($res['nationalite']!=$nationalite){
                $DB->insert("update adherents set nationalite='$nationalite' where idAdh=$id");
            }
            header("location:../index.php");
        }



        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="entraineur"){
            $res=$DB->query("select * from entraineurs WHERE idEntrn='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update entraineurs set mail='$mail' where idEntrn=$id");
            }
            if($res['telephone']!=$telephone){
                $DB->insert("update entraineurs set telephone='$telephone' where idEntrn=$id");
            }
            header("location:../index.php");
        }


        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="responsable"){
            $res=$DB->query("select * from responsable WHERE idResp='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update responsable set mail='$mail' where idResp=$id");
            }
            if($res['telephone']!=$telephone){
                $DB->insert("update responsable set telephone='$telephone' where idResp=$id");
            }
            if($res['poste']!=$poste){
                $DB->insert("update responsable set poste='$poste' where idResp=$id");
            }
            header("location:../index.php");
        }




    }
?>
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

        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="manager"){
            $res=$DB->query("select * from manager WHERE idManager='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update manager set mail='$mail' where idManager=$id");
            }
            if($res['telPortable']!=$telephone){
                $DB->insert("update manager set telPortable='$telephone' where idManager=$id");
            }
            header("location:../index.php");
        }

        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="mere"){
            $res=$DB->query("select * from mere WHERE idMere='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update mere set mail='$mail' where idMere=$id");
            }
            if($res['adresse']!=$adresse){
                $DB->insert("update mere set adresse='$adresse' where idMere=$id");
            }
            if($res['ville']!=$ville){
                $DB->insert("update mere set ville='$ville' where idMere=$id");
            }
            if($res['cp']!=$cp){
                $DB->insert("update mere set cp='$cp' where idMere=$id");
            }
            if($res['telDomicile']!=$telDomicile){
                $DB->insert("update mere set telDomicile='$telDomicile' where idMere=$id");
            }
            if($res['telPortable']!=$telPortable){
                $DB->insert("update mere set telPortable='$telPortable' where idMere=$id");
            }
            if($res['entreprise']!=$entreprise){
                $DB->insert("update mere set entreprise='$entreprise' where idMere=$id");
            }
            if($res['profession']!=$profession){
                $DB->insert("update mere set profession='$profession' where idMere=$id");
            }
            header("location:../index.php");
        }

        if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="pere"){
            $res=$DB->query("select * from pere WHERE idPere='$id'");
            $res = $res->fetch();
            if($res['mail']!=$mail){
                $DB->insert("update pere set mail='$mail' where idPere=$id");
            }
            if($res['adresse']!=$adresse){
                $DB->insert("update pere set adresse='$adresse' where idPere=$id");
            }
            if($res['ville']!=$ville){
                $DB->insert("update pere set ville='$ville' where idPere=$id");
            }
            if($res['cp']!=$cp){
                $DB->insert("update pere set cp='$cp' where idPere=$id");
            }
            if($res['telDomicile']!=$telDomicile){
                $DB->insert("update pere set telDomicile='$telDomicile' where idPere=$id");
            }
            if($res['telPortable']!=$telPortable){
                $DB->insert("update pere set telPortable='$telPortable' where idPere=$id");
            }
            if($res['entreprise']!=$entreprise){
                $DB->insert("update pere set entreprise='$entreprise' where idPere=$id");
            }
            if($res['profession']!=$profession){
                $DB->insert("update pere set profession='$profession' where idPere=$id");
            }
            header("location:../index.php");
        }





    }
?>
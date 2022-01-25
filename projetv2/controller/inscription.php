<?php
  session_start();
  include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
 
    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
    
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
    
    // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscriptionEnfant'])){
        $nom = (trim($nom));
        $prenom = (trim($prenom));
        $mail = (trim($mail));
        $lieuNaissance = (trim($lieuNaissance));
        $adresse = (trim($adresse));
        $ville = (trim($ville));
        $nationalite = (trim($nationalite));


        $extensionPhoto=substr($_FILES['photo']['name'],-4,4);    //prendre l'extension du fichier
        $extensionIdentite=substr($_FILES['pieceIdentite']['name'],-4,4); //prendre l'extesion du fichier

        $nomCompletIdentite="$nom $prenom$extensionIdentite"; //création du nom de fichier avec nom prenom et l'extension d'origine
        $_FILES['pieceIdentite']['name']=$nomCompletIdentite;

        $nomCompletphoto="$nom $prenom$extensionPhoto"; //création du nom de fichier avec nom prenom et l'extension d'origine
        $_FILES['photo']['name']=$nomCompletphoto;
    

        $destinationP="D:/wamp/www/RCVB.V2/projetv2/images/photo/";
        $destinationI="D:/wamp/www/RCVB.V2/projetv2/images/pieceIdentite/";
        $accesI="D:/wamp/www/RCVB.V2/projetv2/".$_FILES['pieceIdentite']['name'];
        $accesP="D:/wamp/www/RCVB.V2/projetv2/".$_FILES['photo']['name'];
        



        if (isset($_FILES['photo']['tmp_name'])) {
            $photo = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
            if($photo) {
                $source_file = $accesP;
                $destination_path = $destinationP;
                rename($source_file, $destination_path . pathinfo($source_file, PATHINFO_BASENAME));
            }
        }

        if (isset($_FILES['pieceIdentite']['tmp_name'])) {
            $pieceIdentite = copy($_FILES['pieceIdentite']['tmp_name'], $_FILES['pieceIdentite']['name']);
            if($pieceIdentite) {
                $source_file = $accesI;
                $destination_path = $destinationI;
                rename($source_file, $destination_path . pathinfo($source_file, PATHINFO_BASENAME));
            }
        }
        


 
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){


                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO adherents ( nom, prenom, dateNaiss, lieuNaiss, adresse, ville, cp, telPortable, telDomicile, mail, nationalite, numSS) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    array($nom, $prenom, $dateNaissance, $lieuNaissance, $adresse, $ville, $cp, $telPortable, $telDomicile, $mail, $nationalite, $numSS));
                
                
                exit;
            }
        }
        if (isset($_POST['inscriptionPere'])){
            $nom = (trim($nom));
            $prenom = (trim($prenom));
            $mail = (trim($mail));
            $profession = (trim($profession));
            $adresse = (trim($adresse));
            $ville = (trim($ville));
            $lienParente = (trim($lienParente));


            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){


                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO pere ( nom, prenom, adresse, ville, cp, telPortable, telDomicile, mail, profession, lienParente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    array($nom, $prenom, $adresse, $ville, $cp, $telPortable, $telDomicile, $mail, $profession, $lienParente));
                
                header('Location: index.php');
                exit;



            }
        }
        

        if (isset($_POST['inscriptionMere'])){
            $nom = (trim($nom));
            $prenom = (trim($prenom));
            $mail = (trim($mail));
            $profession = (trim($profession));
            $adresse = (trim($adresse));
            $ville = (trim($ville));
            $lienParente = (trim($lienParente));
    
    
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
    
    
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO pere ( nom, prenom, adresse, ville, cp, telPortable, telDomicile, mail, profession, lienParente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                    array($nom, $prenom, $adresse, $ville, $cp, $telPortable, $telDomicile, $mail, $profession, $lienParente));
                    
                header('Location: index.php');
                exit;
    
    
    
            }
        }



        
        if (isset($_POST['inscriptionManager'])){
                $nom = (trim($nom));
                $prenom = (trim($prenom));
                $mail = (trim($mail));
                $mdp = (hash('sha512', $mdp));
    
    
            // Si toutes les conditions sont remplies alors on fait le traitement
            if($valid){
    
    
                // On insert nos données dans la table utilisateur
                $DB->insert("INSERT INTO manager (nom, prenom, mdp, mail, telPortable) VALUES (?, ?, ?, ?, ?)",
                    array($nom, $prenom, $mdp, $mail, $telPortable));
                    
                header('Location: index.php');
                exit;
    

            }
        }
    }
?>
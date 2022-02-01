<?php
  session_start();
  include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  include('../modele/conversion.php');
    // S'il y a une session alors on ne retourne plus sur cette page
    if (isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }
    
    // Si la variable "$_Post" contient des informations alors on les traitres
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
    


    //INSCRIPTION POUR MAJEUR

    // On se place sur le bon formulaire grâce au "name" de la balise "input"
        if (isset($_POST['inscriptionMajeur'])){

        $nom=conversion($nom);
        $prenom = conversion($prenom);
        $mail = conversion($mail); 
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $lieuNaissance = conversion($lieuNaissance);
        $adresse = conversion($adresse);
        $ville = conversion($ville);
        $nationalite = conversion($nationalite);
        
        $lieuCharte = conversion($lieuCharte);

        $lieuSoin = conversion($lieuSoin);

        $nomMedecin = conversion($nomMedecin);
        $prenomMedecin = conversion($prenomMedecin);
        $adresseMedecin = conversion($adresseMedecin);

        $nomContact = conversion($nomContact);
        $prenomContact = conversion($prenomContact);
        $qualiteContact = conversion($qualiteContact);


        $extensionPhoto=substr($_FILES['photo']['name'],-4,4);    //prendre l'extension du fichier
        $extensionIdentite=substr($_FILES['pieceIdentite']['name'],-4,4); //prendre l'extesion du fichier

        $nomCompletIdentite="$nom $prenom$extensionIdentite"; //création du nom de fichier avec nom prenom et l'extension d'origine
        $_FILES['pieceIdentite']['name']=$nomCompletIdentite;

        $nomCompletphoto="$nom $prenom$extensionPhoto"; //création du nom de fichier avec nom prenom et l'extension d'origine
        $_FILES['photo']['name']=$nomCompletphoto;
    

        $destinationP="C:/wamp/www/RCVB.V2/projetv2/images/photo/";
        $destinationI="C:/wamp/www/RCVB.V2/projetv2/images/pieceIdentite/";
        $accesI="C:/wamp/www/RCVB.V2/projetv2/controller/".$_FILES['pieceIdentite']['name'];
        $accesP="C:/wamp/www/RCVB.V2/projetv2/controller/".$_FILES['photo']['name'];
        



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

                

                
                
                $DB->insert("INSERT INTO autorisation (participation, encadrer, CNILFRR, sortie, image) VALUES(?, ?, ?, ?, ?)",
                    array($participation, $encadrer, $CNIL, $sortie, $image));
                    
                
                
                $DB->insert("INSERT INTO charte (lieu, date) VALUES(?, ?)",
                    array($lieuCharte, $dateCharte));
            
                
                $DB->insert("INSERT INTO soin (lieuSoin, dateSoin) VALUES(?, ?)",
                array($lieuSoin, $dateSoin));

                
                $DB->insert("INSERT INTO medecintraitant (nom, prenom, adresse, tel) VALUES(?, ?, ?, ?)",
                array($nomMedecin, $prenomMedecin, $adresseMedecin, $telPortableMedecin));
                
                
                $DB->insert("INSERT INTO personnecontact (nom, prenom, qualite, telPortable, telDomicile) VALUES(?, ?, ?, ?, ?)",
                array($nomContact, $prenomContact, $qualiteContact, $telPortableContact, $telDomicileContact));


                $personneContact = $DB->query("SELECT idPC from personnecontact order by idPC DESC LIMIT 1");
                $personneContact=$personneContact->fetch();
                $personneContact=array_unique($personneContact);
                $personneContact = implode(" ", $personneContact);


                $idAutorisation = $DB->query("SELECT idAutorisation from autorisation order by idAutorisation DESC LIMIT 1");
                $idAutorisation=$idAutorisation->fetch();
                $idAutorisation=array_unique($idAutorisation);
                $idAutorisation = implode(" ", $idAutorisation);


                $idCharte = $DB->query("SELECT idCharte from charte order by idCharte DESC LIMIT 1");
                $idCharte=$idCharte->fetch();
                $idCharte=array_unique($idCharte);
                $idCharte = implode(" ", $idCharte);


                $idMedecinTraitant = $DB->query("SELECT idMT from medecintraitant order by idMT DESC LIMIT 1");
                $idMedecinTraitant=$idMedecinTraitant->fetch();
                $idMedecinTraitant=array_unique($idMedecinTraitant);
                $idMedecinTraitant = implode(" ", $idMedecinTraitant);



            
                $DB->insert("INSERT INTO adherents ( nom, prenom, dateNaiss, lieuNaiss, adresse, ville, cp, telPortable, telDomicile, mail, nationalite, numSS, mdp, idAutorisation, idPC, idCharte, idMT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                array($nom, $prenom, $dateNaissance, $lieuNaissance, $adresse, $ville, $cp, $telPortable, $telDomicile, $mail, $nationalite, $numSS, $mdp, $idAutorisation, $personneContact, $idCharte, $idMedecinTraitant));
                
                header('Location: ../index.php');
                exit;

            }
        }


        //INSCRIPTION POUR MINEUR

        if (isset($_POST['inscriptionMineur'])){
            $nom = conversion($nom);
            $prenom = conversion($prenom);
            $lieuNaissance = conversion($lieuNaissance);
            $adresse = conversion($adresse);
            $ville = conversion($ville);
            $nationalite = conversion($nationalite);
            
            $nomPere = conversion($nomPere);
            $prenomPere = conversion($prenomPere);
            $mailPere = conversion($mailPere);
            $professionPere = conversion($professionPere);
            $adressePere = conversion($adressePere);
            $villePere = conversion($villePere);
            $mdpPere = password_hash($mdpPere, PASSWORD_DEFAULT);

            $mdpMere = password_hash($mdpMere, PASSWORD_DEFAULT);
            $nomMere = conversion($nomMere);
            $prenomMere = conversion($prenomMere);
            $mailMere = conversion($mailMere);
            $professionMere = conversion($professionMere);
            $adresseMere = conversion($adresseMere);
            $villeMere = conversion($villeMere);

            $lieuCharte = conversion($lieuCharte);
    
            $lieuSoin = conversion($lieuSoin);
    
            $nomMedecin = conversion($nomMedecin);
            $prenomMedecin = conversion($prenomMedecin);
            $adresseMedecin = conversion($adresseMedecin);
    
            $nomContact = conversion($nomContact);
            $prenomContact = conversion($prenomContact);
            $qualiteContact = conversion($qualiteContact);
    
    
            $extensionPhoto=substr($_FILES['photo']['name'],-4,4);    //prendre l'extension du fichier
            $extensionIdentite=substr($_FILES['pieceIdentite']['name'],-4,4); //prendre l'extesion du fichier
    
            $nomCompletIdentite="$nom $prenom$extensionIdentite"; //création du nom de fichier avec nom prenom et l'extension d'origine
            $_FILES['pieceIdentite']['name']=$nomCompletIdentite;
    
            $nomCompletphoto="$nom $prenom$extensionPhoto"; //création du nom de fichier avec nom prenom et l'extension d'origine
            $_FILES['photo']['name']=$nomCompletphoto;
        
    
            $destinationP="C:/wamp/www/RCVB.V2/projetv2/images/photo/";
            $destinationI="C:/wamp/www/RCVB.V2/projetv2/images/pieceIdentite/";
            $accesI="C:/wamp/www/RCVB.V2/projetv2/controller/".$_FILES['pieceIdentite']['name'];
            $accesP="C:/wamp/www/RCVB.V2/projetv2/controller/".$_FILES['photo']['name'];
            
    
    
    
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
    

                    $DB->insert("INSERT INTO autorisation (participation, encadrer, CNILFRR, sortie, image) VALUES(?, ?, ?, ?, ?)",
                        array($participation, $encadrer, $CNIL, $sortie, $image));
                        
                    
                    $DB->insert("INSERT INTO charte (lieu, date) VALUES(?, ?)",
                        array($lieuCharte, $dateCharte));
                
                    $DB->insert("INSERT INTO soin (lieuSoin, dateSoin) VALUES(?, ?)",
                        array($lieuSoin, $dateSoin));
    
                    $DB->insert("INSERT INTO medecintraitant (nom, prenom, adresse, tel) VALUES(?, ?, ?, ?)",
                        array($nomMedecin, $prenomMedecin, $adresseMedecin, $telPortableMedecin));
                    
                    $DB->insert("INSERT INTO personnecontact (nom, prenom, qualite, telPortable, telDomicile) VALUES(?, ?, ?, ?, ?)",
                        array($nomContact, $prenomContact, $qualiteContact, $telPortableContact, $telDomicileContact));
    
                    $DB->insert("INSERT INTO pere (nom, prenom, adresse, profession, ville, cp, telPortable, telDomicile, mail, mdp, entreprise) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                        array($nomPere, $prenomPere, $adressePere, $professionPere, $villePere, $cpPere, $telPortablePere, $telDomicilePere, $mailPere, $mdpPere, $entreprisePere));
                    
                    $DB->insert("INSERT INTO mere (nom, prenom, adresse, profession, ville, cp, telPortable, telDomicile, mail, mdp, entreprise) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                        array($nomMere, $prenomMere, $adresseMere, $professionMere, $villeMere, $cpMere, $telPortableMere, $telDomicileMere, $mailMere, $mdpMere, $entrepriseMere));


    
                    $idPersonneContact = $DB->query("SELECT idPC from personnecontact order by idPC DESC LIMIT 1");
                    $idPersonneContact=$idPersonneContact->fetch();
                    $idPersonneContact=array_unique($idPersonneContact);
                    $idPersonneContact = implode(" ", $idPersonneContact);
    
    
                    $idAutorisation = $DB->query("SELECT idAutorisation from autorisation order by idAutorisation DESC LIMIT 1");
                    $idAutorisation=$idAutorisation->fetch();
                    $idAutorisation=array_unique($idAutorisation);
                    $idAutorisation = implode(" ", $idAutorisation);
    
    
                    $idCharte = $DB->query("SELECT idCharte from charte order by idCharte DESC LIMIT 1");
                    $idCharte=$idCharte->fetch();
                    $idCharte=array_unique($idCharte);
                    $idCharte = implode(" ", $idCharte);
    
    
                    $idMedecinTraitant = $DB->query("SELECT idMT from medecintraitant order by idMT DESC LIMIT 1");
                    $idMedecinTraitant=$idMedecinTraitant->fetch();
                    $idMedecinTraitant=array_unique($idMedecinTraitant);
                    $idMedecinTraitant = implode(" ", $idMedecinTraitant);
                    
                    $idPere = $DB->query("SELECT idPere from pere order by idPere DESC LIMIT 1");
                    $idPere=$idPere->fetch();
                    $idPere=array_unique($idPere);
                    $idPere = implode(" ", $idPere);

                    $idMere = $DB->query("SELECT idMere from mere order by idMere DESC LIMIT 1");
                    $idMere=$idMere->fetch();
                    $idMere=array_unique($idMere);
                    $idMere = implode(" ", $idMere);
                
                    $DB->insert("INSERT INTO adherents ( nom, prenom, dateNaiss, lieuNaiss, adresse, ville, cp, telPortable, telDomicile, nationalite, numSS, idAutorisation, idPC, idCharte, idMT, idMere, idPere) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)",
                        array($nom, $prenom, $dateNaissance, $lieuNaissance, $adresse, $ville, $cp, $telPortable, $telDomicile, $nationalite, $numSS, $idAutorisation, $idPersonneContact, $idCharte, $idMedecinTraitant, $idMere, $idPere));
                

                    header('Location: ../index.php');
                    exit;
    
                }
            }
    }
?>
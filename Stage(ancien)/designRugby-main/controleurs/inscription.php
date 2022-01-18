<?php

session_start();

$option = $_REQUEST["option"];

switch ($option) {

    case 'choisirNb':
         $choisir = $_POST["choisir"];
         $_SESSION['choisir'] = $choisir;

         if ($_SESSION['choisir'] == "oui") {
             include("vues/entete.php");
             include("vues/preInscription.php");
         } else {
             include("vues/entete.php");
             include("vues/preInscription1.php");
         }

         break;

    case 'preInscription':
        include("vues/entete.php");
        //include("vues/preInscription.php");
        include("vues/premiereFois.php");
        break;


    case 'inscrire':
        $choix = $_POST["choix"];
        $_SESSION['choix'] = $choix;
        if ($_SESSION['choisir'] == "oui"){
            include("vues/entete.php");
			include("vues/formulaire.php");
		}else{
            $mailP = $_POST["mailP"];
            $res = $pdo->getIdPersonneAContacter($mailP);

            foreach ($res as $idParent) {
                $_SESSION['idParent'] = $idParent['idParent'];
                $_SESSION['nomP'] = $idParent['nom'];
                $_SESSION['prenomP'] = $idParent['prenom'];
                $_SESSION['villeP'] = $idParent['ville'];
                $_SESSION['mailP'] = $idParent['mail'];
                $_SESSION['telPortP'] = $idParent['telPor'];
            }
            include("vues/entete.php");
            include("vues/formulaire1.php");
            //include("vues/accueil.php");
		}
        
		break;

    case 'suiteInscription':

        if (!$_SESSION['idParent']) {
             # code...

        //POUR RECUPERER TOUTES LES DONNEES 
         switch ($_SESSION['choix']) {
             // ------------------------------------------------------------------------------------------------------------------------
            // si il y a 1 adherent :
            //Recuperation infos de l'adherent
             case $_SESSION['choix'] == 1:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];

                 // recuperation infos parents 
                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));

                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

            // ------------------------------------------------------------------------------------------------------------------------
            // si il y a 2 adherentS :
            //Recuperation infos de l'adherent1
             case $_SESSION['choix'] == 2:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             // si il y a 3 adherents :
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 3:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));

                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;


             // ------------------------------------------------------------------------------------------------------------------------
             
            // si il y a 4 adherents :
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 4:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------    
             
             // si il y a 5 adherents :
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 5:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                 //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             
             // si il y a 6 adherents :
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 6:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                 //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos de l'adherent 6
                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------    
             
             // si il y a 7 adherents :
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 7:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                 //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos de l'adherent 6
                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));


                 //Recuperation infos de l'adherent 7
                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

            
             // ------------------------------------------------------------------------------------------------------------------------
            // si il y a 8 adherents
            //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 8:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));



                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos de l'adherent 6
                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));


                 //Recuperation infos de l'adherent 7
                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));



                 //Recuperation infos de l'adherent 8
                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             // si il y a 9 adherents
            //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 9:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));



                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));


                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));


                 //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos de l'adherent 6
                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));



                 //Recuperation infos de l'adherent 7
                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));



                 //Recuperation infos de l'adherent 8
                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));


                 //Recuperation infos de l'adherent 9
                 $_SESSION['nom9'] = $_POST['nom9'];
                 $_SESSION['prenom9'] = $_POST['prenom9'];
                 $_SESSION['dateNaiss9'] = $_POST['dateNaiss9'];
                 $_SESSION['lieuN9'] = $_POST['lieuN9'];
                 $_SESSION['adresse9'] = $_POST['adresse9'];
                 $_SESSION['ville9'] = $_POST['ville9'];
                 $_SESSION['cp9'] = $_POST['cp9'];
                 $_SESSION['telPort9'] = $_POST['telPort9'];
                 $_SESSION['telDom9'] = $_POST['telDom9'];
                 $_SESSION['mail9'] = $_POST['mail9'];
                 $_SESSION['nat9'] = $_POST['nat9'];
                 $_SESSION['numSS9'] = $_POST['numSS9'];
                 $_SESSION['categorie9'] = $_POST['categorie9'];


                 $image9 = $_FILES['pieceI9']['tmp_name'];
                 $_SESSION['img9'] = addslashes(file_get_contents($image9));



                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             // SI IL Y A 10 ADJERENTS
             //Recuperation infos de l'adherent 1
             case $_SESSION['choix'] == 10:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));



                //Recuperation infos de l'adherent 2
                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));



                 //Recuperation infos de l'adherent 3
                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));


                 //Recuperation infos de l'adherent 4
                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));



                 //Recuperation infos de l'adherent 5
                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));


                 //Recuperation infos de l'adherent 6
                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));



                 //Recuperation infos de l'adherent 7
                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));



                 //Recuperation infos de l'adherent 8
                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));


                 //Recuperation infos de l'adherent 9
                 $_SESSION['nom9'] = $_POST['nom9'];
                 $_SESSION['prenom9'] = $_POST['prenom9'];
                 $_SESSION['dateNaiss9'] = $_POST['dateNaiss9'];
                 $_SESSION['lieuN9'] = $_POST['lieuN9'];
                 $_SESSION['adresse9'] = $_POST['adresse9'];
                 $_SESSION['ville9'] = $_POST['ville9'];
                 $_SESSION['cp9'] = $_POST['cp9'];
                 $_SESSION['telPort9'] = $_POST['telPort9'];
                 $_SESSION['telDom9'] = $_POST['telDom9'];
                 $_SESSION['mail9'] = $_POST['mail9'];
                 $_SESSION['nat9'] = $_POST['nat9'];
                 $_SESSION['numSS9'] = $_POST['numSS9'];
                 $_SESSION['categorie9'] = $_POST['categorie9'];


                 $image9 = $_FILES['pieceI9']['tmp_name'];
                 $_SESSION['img9'] = addslashes(file_get_contents($image9));



                //Recuperation infos de l'adherent 10
                 $_SESSION['nom10'] = $_POST['nom10'];
                 $_SESSION['prenom10'] = $_POST['prenom10'];
                 $_SESSION['dateNaiss10'] = $_POST['dateNaiss10'];
                 $_SESSION['lieuN10'] = $_POST['lieuN10'];
                 $_SESSION['adresse10'] = $_POST['adresse10'];
                 $_SESSION['ville10'] = $_POST['ville10'];
                 $_SESSION['cp10'] = $_POST['cp10'];
                 $_SESSION['telPort10'] = $_POST['telPort10'];
                 $_SESSION['telDom10'] = $_POST['telDom10'];
                 $_SESSION['mail10'] = $_POST['mail10'];
                 $_SESSION['nat10'] = $_POST['nat10'];
                 $_SESSION['numSS10'] = $_POST['numSS10'];
                 $_SESSION['categorie10'] = $_POST['categorie10'];


                 $image10 = $_FILES['pieceI10']['tmp_name'];
                 $_SESSION['img10'] = addslashes(file_get_contents($image10));


                 //Recuperation infos du parent
                 $_SESSION['nomP'] = $_POST['nomP'];
                 $_SESSION['prenomP'] = $_POST['prenomP'];
                 $_SESSION['ProfessionP'] = $_POST['professionP'];
                 $_SESSION['villeP'] = $_POST['villeP'];
                 $_SESSION['cpP'] = $_POST['cpP'];
                 $_SESSION['adresseP'] = $_POST['adresseP'];
                 $_SESSION['telPortP'] = $_POST['telPortP'];
                 $_SESSION['telDomP'] = $_POST['telDomP'];
                 $_SESSION['mailP'] = $_POST['mailP'];
                 $_SESSION['lienP'] = $_POST['lienP'];


                 $image = $_FILES['pieceIP']['tmp_name'];
                 $_SESSION['imgP'] = addslashes(file_get_contents($image));
                 break;

             default:
                 # code...
                 break;
         }

         //SI ON A DEJA 1 INSCRIT DANS CETTE FAMILLE ON A DEJA LES INFOS DU PARENTS ( ON NE RECUPERE QUE CELLES DES NVX ADHERENTS)

     } else {
         switch ($_SESSION['choix']) {
             case $_SESSION['choix'] == 1:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));

                 break;

                 // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 2:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 3:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 break;


             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 4:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------    
             case $_SESSION['choix'] == 5:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 6:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------    
             case $_SESSION['choix'] == 7:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));

                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 8:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));

                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));

                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 9:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));

                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));

                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));

                 $_SESSION['nom9'] = $_POST['nom9'];
                 $_SESSION['prenom9'] = $_POST['prenom9'];
                 $_SESSION['dateNaiss9'] = $_POST['dateNaiss9'];
                 $_SESSION['lieuN9'] = $_POST['lieuN9'];
                 $_SESSION['adresse9'] = $_POST['adresse9'];
                 $_SESSION['ville9'] = $_POST['ville9'];
                 $_SESSION['cp9'] = $_POST['cp9'];
                 $_SESSION['telPort9'] = $_POST['telPort9'];
                 $_SESSION['telDom9'] = $_POST['telDom9'];
                 $_SESSION['mail9'] = $_POST['mail9'];
                 $_SESSION['nat9'] = $_POST['nat9'];
                 $_SESSION['numSS9'] = $_POST['numSS9'];
                 $_SESSION['categorie9'] = $_POST['categorie9'];


                 $image9 = $_FILES['pieceI9']['tmp_name'];
                 $_SESSION['img9'] = addslashes(file_get_contents($image9));

                 break;

             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 10:
                 $_SESSION['nom1'] = $_POST['nom1'];
                 $_SESSION['prenom1'] = $_POST['prenom1'];
                 $_SESSION['dateNaiss1'] = $_POST['dateNaiss1'];
                 $_SESSION['lieuN1'] = $_POST['lieuN1'];
                 $_SESSION['adresse1'] = $_POST['adresse1'];
                 $_SESSION['ville1'] = $_POST['ville1'];
                 $_SESSION['cp1'] = $_POST['cp1'];
                 $_SESSION['telPort1'] = $_POST['telPort1'];
                 $_SESSION['telDom1'] = $_POST['telDom1'];
                 $_SESSION['mail1'] = $_POST['mail1'];
                 $_SESSION['nat1'] = $_POST['nat1'];
                 $_SESSION['numSS1'] = $_POST['numSS1'];
                 $_SESSION['categorie1'] = $_POST['categorie1'];


                $image1 = $_FILES['pieceI1']['tmp_name'];
                $_SESSION['img1'] = addslashes(file_get_contents($image1));


                 $_SESSION['nom2'] = $_POST['nom2'];
                 $_SESSION['prenom2'] = $_POST['prenom2'];
                 $_SESSION['dateNaiss2'] = $_POST['dateNaiss2'];
                 $_SESSION['lieuN2'] = $_POST['lieuN2'];
                 $_SESSION['adresse2'] = $_POST['adresse2'];
                 $_SESSION['ville2'] = $_POST['ville2'];
                 $_SESSION['cp2'] = $_POST['cp2'];
                 $_SESSION['telPort2'] = $_POST['telPort2'];
                 $_SESSION['telDom2'] = $_POST['telDom2'];
                 $_SESSION['mail2'] = $_POST['mail2'];
                 $_SESSION['nat2'] = $_POST['nat2'];
                 $_SESSION['numSS2'] = $_POST['numSS2'];
                 $_SESSION['categorie2'] = $_POST['categorie2'];


                 $image2 = $_FILES['pieceI1']['tmp_name'];
                 $_SESSION['img2'] = addslashes(file_get_contents($image2));

                 $_SESSION['nom3'] = $_POST['nom3'];
                 $_SESSION['prenom3'] = $_POST['prenom3'];
                 $_SESSION['dateNaiss3'] = $_POST['dateNaiss3'];
                 $_SESSION['lieuN3'] = $_POST['lieuN3'];
                 $_SESSION['adresse3'] = $_POST['adresse3'];
                 $_SESSION['ville3'] = $_POST['ville3'];
                 $_SESSION['cp3'] = $_POST['cp3'];
                 $_SESSION['telPort'] = $_POST['telPort3'];
                 $_SESSION['telDom3'] = $_POST['telDom3'];
                 $_SESSION['mail3'] = $_POST['mail3'];
                 $_SESSION['nat3'] = $_POST['nat3'];
                 $_SESSION['numSS3'] = $_POST['numSS3'];
                 $_SESSION['categorie3'] = $_POST['categorie3'];


                 $image3 = $_FILES['pieceI3']['tmp_name'];
                 $_SESSION['img3'] = addslashes(file_get_contents($image3));

                 $_SESSION['nom4'] = $_POST['nom4'];
                 $_SESSION['prenom4'] = $_POST['prenom4'];
                 $_SESSION['dateNaiss4'] = $_POST['dateNaiss4'];
                 $_SESSION['lieuN4'] = $_POST['lieuN4'];
                 $_SESSION['adresse4'] = $_POST['adresse4'];
                 $_SESSION['ville4'] = $_POST['ville4'];
                 $_SESSION['cp4'] = $_POST['cp4'];
                 $_SESSION['telPort4'] = $_POST['telPort4'];
                 $_SESSION['telDom4'] = $_POST['telDom4'];
                 $_SESSION['mail4'] = $_POST['mail4'];
                 $_SESSION['nat4'] = $_POST['nat4'];
                 $_SESSION['numSS4'] = $_POST['numSS4'];
                 $_SESSION['categorie4'] = $_POST['categorie4'];


                 $image4 = $_FILES['pieceI4']['tmp_name'];
                 $_SESSION['img4'] = addslashes(file_get_contents($image4));

                 $_SESSION['nom5'] = $_POST['nom5'];
                 $_SESSION['prenom5'] = $_POST['prenom5'];
                 $_SESSION['dateNaiss5'] = $_POST['dateNaiss5'];
                 $_SESSION['lieuN5'] = $_POST['lieuN5'];
                 $_SESSION['adresse5'] = $_POST['adresse5'];
                 $_SESSION['ville5'] = $_POST['ville5'];
                 $_SESSION['cp5'] = $_POST['cp5'];
                 $_SESSION['telPort5'] = $_POST['telPort5'];
                 $_SESSION['telDom5'] = $_POST['telDom5'];
                 $_SESSION['mail5'] = $_POST['mail5'];
                 $_SESSION['nat5'] = $_POST['nat5'];
                 $_SESSION['numSS5'] = $_POST['numSS5'];
                 $_SESSION['categorie5'] = $_POST['categorie5'];


                 $image5 = $_FILES['pieceI5']['tmp_name'];
                 $_SESSION['img5'] = addslashes(file_get_contents($image5));

                 $_SESSION['nom6'] = $_POST['nom6'];
                 $_SESSION['prenom6'] = $_POST['prenom6'];
                 $_SESSION['dateNaiss6'] = $_POST['dateNaiss6'];
                 $_SESSION['lieuN6'] = $_POST['lieuN6'];
                 $_SESSION['adresse6'] = $_POST['adresse6'];
                 $_SESSION['ville6'] = $_POST['ville6'];
                 $_SESSION['cp6'] = $_POST['cp6'];
                 $_SESSION['telPort6'] = $_POST['telPort6'];
                 $_SESSION['telDom6'] = $_POST['telDom6'];
                 $_SESSION['mail6'] = $_POST['mail6'];
                 $_SESSION['nat6'] = $_POST['nat6'];
                 $_SESSION['numSS6'] = $_POST['numSS6'];
                 $_SESSION['categorie6'] = $_POST['categorie6'];


                 $image6 = $_FILES['pieceI6']['tmp_name'];
                 $_SESSION['img6'] = addslashes(file_get_contents($image6));

                 $_SESSION['nom7'] = $_POST['nom7'];
                 $_SESSION['prenom7'] = $_POST['prenom7'];
                 $_SESSION['dateNaiss7'] = $_POST['dateNaiss7'];
                 $_SESSION['lieuN7'] = $_POST['lieuN7'];
                 $_SESSION['adresse7'] = $_POST['adresse7'];
                 $_SESSION['ville7'] = $_POST['ville7'];
                 $_SESSION['cp7'] = $_POST['cp7'];
                 $_SESSION['telPort7'] = $_POST['telPort7'];
                 $_SESSION['telDom7'] = $_POST['telDom7'];
                 $_SESSION['mail7'] = $_POST['mail7'];
                 $_SESSION['nat7'] = $_POST['nat7'];
                 $_SESSION['numSS7'] = $_POST['numSS7'];
                 $_SESSION['categorie7'] = $_POST['categorie7'];


                 $image7 = $_FILES['pieceI7']['tmp_name'];
                 $_SESSION['img7'] = addslashes(file_get_contents($image7));

                 $_SESSION['nom8'] = $_POST['nom8'];
                 $_SESSION['prenom8'] = $_POST['prenom8'];
                 $_SESSION['dateNaiss8'] = $_POST['dateNaiss8'];
                 $_SESSION['lieuN8'] = $_POST['lieuN8'];
                 $_SESSION['adresse8'] = $_POST['adresse8'];
                 $_SESSION['ville8'] = $_POST['ville8'];
                 $_SESSION['cp8'] = $_POST['cp8'];
                 $_SESSION['telPort8'] = $_POST['telPort8'];
                 $_SESSION['telDom8'] = $_POST['telDom8'];
                 $_SESSION['mail8'] = $_POST['mail8'];
                 $_SESSION['nat8'] = $_POST['nat8'];
                 $_SESSION['numSS8'] = $_POST['numSS8'];
                 $_SESSION['categorie8'] = $_POST['categorie8'];


                 $image8 = $_FILES['pieceI8']['tmp_name'];
                 $_SESSION['img8'] = addslashes(file_get_contents($image8));

                 $_SESSION['nom9'] = $_POST['nom9'];
                 $_SESSION['prenom9'] = $_POST['prenom9'];
                 $_SESSION['dateNaiss9'] = $_POST['dateNaiss9'];
                 $_SESSION['lieuN9'] = $_POST['lieuN9'];
                 $_SESSION['adresse9'] = $_POST['adresse9'];
                 $_SESSION['ville9'] = $_POST['ville9'];
                 $_SESSION['cp9'] = $_POST['cp9'];
                 $_SESSION['telPort9'] = $_POST['telPort9'];
                 $_SESSION['telDom9'] = $_POST['telDom9'];
                 $_SESSION['mail9'] = $_POST['mail9'];
                 $_SESSION['nat9'] = $_POST['nat9'];
                 $_SESSION['numSS9'] = $_POST['numSS9'];
                 $_SESSION['categorie9'] = $_POST['categorie9'];


                 $image9 = $_FILES['pieceI9']['tmp_name'];
                 $_SESSION['img9'] = addslashes(file_get_contents($image9));

                 $_SESSION['nom10'] = $_POST['nom10'];
                 $_SESSION['prenom10'] = $_POST['prenom10'];
                 $_SESSION['dateNaiss10'] = $_POST['dateNaiss10'];
                 $_SESSION['lieuN10'] = $_POST['lieuN10'];
                 $_SESSION['adresse10'] = $_POST['adresse10'];
                 $_SESSION['ville10'] = $_POST['ville10'];
                 $_SESSION['cp10'] = $_POST['cp10'];
                 $_SESSION['telPort10'] = $_POST['telPort10'];
                 $_SESSION['telDom10'] = $_POST['telDom10'];
                 $_SESSION['mail10'] = $_POST['mail10'];
                 $_SESSION['nat10'] = $_POST['nat10'];
                 $_SESSION['numSS10'] = $_POST['numSS10'];
                 $_SESSION['categorie10'] = $_POST['categorie10'];


                 $image10 = $_FILES['pieceI10']['tmp_name'];
                 $_SESSION['img10'] = addslashes(file_get_contents($image10));

                 break;

             default:
                 # code...
                 break;
         }
     }

         include("vues/entete.php");
         include("vues/suiteFormulaire.php");
         break;






     // VA RECUPERER LES INFOS NECESSAIRE POUR LE RECAPITULATIF AINSI QUE LE PRIX     

     case 'recap':

         switch ($_SESSION['choix']) {
             // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 1:
                 $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                 $_SESSION['villeName1'] = $_POST['villeName1'];
                 $_SESSION['dateLic1'] = $_POST['dateLic1'];
                 $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                 $_SESSION['nombre1'] = $_POST['nombre1'];
                 $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                 $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                 $_SESSION['fecha1'] = $_POST['fecha1'];
                 $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                 $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                 $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                 $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                 $_SESSION['nomMed1'] = $_POST['nomMed1'];
                 $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                 $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];

                 $_SESSION['choix11'] = $_POST['choix11'];
                 $_SESSION['choix21'] = $_POST['choix21'];
                 $_SESSION['choix31'] = $_POST['choix31'];
                 $_SESSION['choix41'] = $_POST['choix41'];
                 $_SESSION['choix51'] = $_POST['choix51'];
                 $_SESSION['nomPre1'] = $_POST['nomPre1'];
                 break;

                 // ------------------------------------------------------------------------------------------------------------------------
             case $_SESSION['choix'] == 2:
                 $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                 $_SESSION['villeName1'] = $_POST['villeName1'];
                 $_SESSION['dateLic1'] = $_POST['dateLic1'];
                 $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                 $_SESSION['nombre1'] = $_POST['nombre1'];
                 $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                 $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                 $_SESSION['fecha1'] = $_POST['fecha1'];
                 $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                 $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                 $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                 $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                 $_SESSION['nomMed1'] = $_POST['nomMed1'];
                 $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                 $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                 $_SESSION['choix11'] = $_POST['choix11'];
                 $_SESSION['choix21'] = $_POST['choix21'];
                 $_SESSION['choix31'] = $_POST['choix31'];
                 $_SESSION['choix41'] = $_POST['choix41'];
                 $_SESSION['choix51'] = $_POST['choix51'];
                 $_SESSION['nomPre1'] = $_POST['nomPre1'];

                 $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                 $_SESSION['villeName2'] = $_POST['villeName2'];
                 $_SESSION['dateLic2'] = $_POST['dateLic2'];
                 $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                 $_SESSION['nombre2'] = $_POST['nombre2'];
                 $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                 $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                 $_SESSION['fecha2'] = $_POST['fecha2'];
                 $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                 $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                 $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                 $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                 $_SESSION['nomMed2'] = $_POST['nomMed2'];
                 $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                 $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                 $_SESSION['choix12'] = $_POST['choix12'];
                 $_SESSION['choix22'] = $_POST['choix22'];
                 $_SESSION['choix32'] = $_POST['choix32'];
                 $_SESSION['choix42'] = $_POST['choix42'];
                 $_SESSION['choix52'] = $_POST['choix52'];
                 $_SESSION['nomPre2'] = $_POST['nomPre2'];
                 break;

                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 3:
                 $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                 $_SESSION['villeName1'] = $_POST['villeName1'];
                 $_SESSION['dateLic1'] = $_POST['dateLic1'];
                 $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                 $_SESSION['nombre1'] = $_POST['nombre1'];
                 $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                 $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                 $_SESSION['fecha1'] = $_POST['fecha1'];
                 $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                 $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                 $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                 $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                 $_SESSION['nomMed1'] = $_POST['nomMed1'];
                 $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                 $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                 $_SESSION['choix11'] = $_POST['choix11'];
                 $_SESSION['choix21'] = $_POST['choix21'];
                 $_SESSION['choix31'] = $_POST['choix31'];
                 $_SESSION['choix41'] = $_POST['choix41'];
                 $_SESSION['choix51'] = $_POST['choix51'];
                 $_SESSION['nomPre1'] = $_POST['nomPre1'];

                 $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                 $_SESSION['villeName2'] = $_POST['villeName2'];
                 $_SESSION['dateLic2'] = $_POST['dateLic2'];
                 $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                 $_SESSION['nombre2'] = $_POST['nombre2'];
                 $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                 $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                 $_SESSION['fecha2'] = $_POST['fecha2'];
                 $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                 $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                 $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                 $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                 $_SESSION['nomMed2'] = $_POST['nomMed2'];
                 $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                 $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                 $_SESSION['choix12'] = $_POST['choix12'];
                 $_SESSION['choix22'] = $_POST['choix22'];
                 $_SESSION['choix32'] = $_POST['choix32'];
                 $_SESSION['choix42'] = $_POST['choix42'];
                 $_SESSION['choix52'] = $_POST['choix52'];
                 $_SESSION['nomPre2'] = $_POST['nomPre2'];

                 $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                 $_SESSION['villeName3'] = $_POST['villeName3'];
                 $_SESSION['dateLic3'] = $_POST['dateLic3'];
                 $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                 $_SESSION['nombre3'] = $_POST['nombre3'];
                 $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                 $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                 $_SESSION['fecha3'] = $_POST['fecha3'];
                 $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                 $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                 $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                 $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                 $_SESSION['nomMed3'] = $_POST['nomMed3'];
                 $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                 $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                 $_SESSION['choix13'] = $_POST['choix13'];
                 $_SESSION['choix23'] = $_POST['choix23'];
                 $_SESSION['choix33'] = $_POST['choix33'];
                 $_SESSION['choix43'] = $_POST['choix43'];
                 $_SESSION['choix53'] = $_POST['choix53'];
                 $_SESSION['nomPre3'] = $_POST['nomPre3'];


                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 4:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];
                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 5:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];
                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 6:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];

                     $_SESSION['nomPrenom6'] = $_POST['nomPrenom6'];
                     $_SESSION['villeName6'] = $_POST['villeName6'];
                     $_SESSION['dateLic6'] = $_POST['dateLic6'];
                     $_SESSION['nomPersonne6'] = $_POST['nomPersonne6'];
                     $_SESSION['nombre6'] = $_POST['nombre6'];
                     $_SESSION['nomComplet6'] = $_POST['nomComplet6'];
                     $_SESSION['ciudadName6'] = $_POST['ciudadName6'];
                     $_SESSION['fecha6'] = $_POST['fecha6'];
                     $_SESSION['nomAcc6'] = $_POST['nomAcc6'];
                     $_SESSION['prenomAcc6'] = $_POST['prenomAcc6'];
                     $_SESSION['qualiteAcc6'] = $_POST['qualiteAcc6'];
                     $_SESSION['telephoneAcc6'] = $_POST['telephoneAcc6'];
                     $_SESSION['nomMed6'] = $_POST['nomMed6'];
                     $_SESSION['adresseMed6'] = $_POST['adresseMed6'];
                     $_SESSION['telephoneMed6'] = $_POST['telephoneMed6'];
                     $_SESSION['choix16'] = $_POST['choix16'];
                     $_SESSION['choix26'] = $_POST['choix26'];
                     $_SESSION['choix36'] = $_POST['choix36'];
                     $_SESSION['choix46'] = $_POST['choix46'];
                     $_SESSION['choix56'] = $_POST['choix56'];
                     $_SESSION['nomPre6'] = $_POST['nomPre6'];
                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 7:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];

                     $_SESSION['nomPrenom6'] = $_POST['nomPrenom6'];
                     $_SESSION['villeName6'] = $_POST['villeName6'];
                     $_SESSION['dateLic6'] = $_POST['dateLic6'];
                     $_SESSION['nomPersonne6'] = $_POST['nomPersonne6'];
                     $_SESSION['nombre6'] = $_POST['nombre6'];
                     $_SESSION['nomComplet6'] = $_POST['nomComplet6'];
                     $_SESSION['ciudadName6'] = $_POST['ciudadName6'];
                     $_SESSION['fecha6'] = $_POST['fecha6'];
                     $_SESSION['nomAcc6'] = $_POST['nomAcc6'];
                     $_SESSION['prenomAcc6'] = $_POST['prenomAcc6'];
                     $_SESSION['qualiteAcc6'] = $_POST['qualiteAcc6'];
                     $_SESSION['telephoneAcc6'] = $_POST['telephoneAcc6'];
                     $_SESSION['nomMed6'] = $_POST['nomMed6'];
                     $_SESSION['adresseMed6'] = $_POST['adresseMed6'];
                     $_SESSION['telephoneMed6'] = $_POST['telephoneMed6'];
                     $_SESSION['choix16'] = $_POST['choix16'];
                     $_SESSION['choix26'] = $_POST['choix26'];
                     $_SESSION['choix36'] = $_POST['choix36'];
                     $_SESSION['choix46'] = $_POST['choix46'];
                     $_SESSION['choix56'] = $_POST['choix56'];
                     $_SESSION['nomPre6'] = $_POST['nomPre6'];

                     $_SESSION['nomPrenom7'] = $_POST['nomPrenom7'];
                     $_SESSION['villeName7'] = $_POST['villeName7'];
                     $_SESSION['dateLic7'] = $_POST['dateLic7'];
                     $_SESSION['nomPersonne7'] = $_POST['nomPersonne7'];
                     $_SESSION['nombre7'] = $_POST['nombre7'];
                     $_SESSION['nomComplet7'] = $_POST['nomComplet7'];
                     $_SESSION['ciudadName7'] = $_POST['ciudadName7'];
                     $_SESSION['fecha7'] = $_POST['fecha7'];
                     $_SESSION['nomAcc7'] = $_POST['nomAcc7'];
                     $_SESSION['prenomAcc7'] = $_POST['prenomAcc7'];
                     $_SESSION['qualiteAcc7'] = $_POST['qualiteAcc7'];
                     $_SESSION['telephoneAcc7'] = $_POST['telephoneAcc7'];
                     $_SESSION['nomMed7'] = $_POST['nomMed7'];
                     $_SESSION['adresseMed7'] = $_POST['adresseMed7'];
                     $_SESSION['telephoneMed7'] = $_POST['telephoneMed7'];
                     $_SESSION['choix17'] = $_POST['choix17'];
                     $_SESSION['choix27'] = $_POST['choix27'];
                     $_SESSION['choix37'] = $_POST['choix37'];
                     $_SESSION['choix47'] = $_POST['choix47'];
                     $_SESSION['choix57'] = $_POST['choix57'];
                     $_SESSION['nomPre7'] = $_POST['nomPre7'];
                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 8:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];

                     $_SESSION['nomPrenom6'] = $_POST['nomPrenom6'];
                     $_SESSION['villeName6'] = $_POST['villeName6'];
                     $_SESSION['dateLic6'] = $_POST['dateLic6'];
                     $_SESSION['nomPersonne6'] = $_POST['nomPersonne6'];
                     $_SESSION['nombre6'] = $_POST['nombre6'];
                     $_SESSION['nomComplet6'] = $_POST['nomComplet6'];
                     $_SESSION['ciudadName6'] = $_POST['ciudadName6'];
                     $_SESSION['fecha6'] = $_POST['fecha6'];
                     $_SESSION['nomAcc6'] = $_POST['nomAcc6'];
                     $_SESSION['prenomAcc6'] = $_POST['prenomAcc6'];
                     $_SESSION['qualiteAcc6'] = $_POST['qualiteAcc6'];
                     $_SESSION['telephoneAcc6'] = $_POST['telephoneAcc6'];
                     $_SESSION['nomMed6'] = $_POST['nomMed6'];
                     $_SESSION['adresseMed6'] = $_POST['adresseMed6'];
                     $_SESSION['telephoneMed6'] = $_POST['telephoneMed6'];
                     $_SESSION['choix16'] = $_POST['choix16'];
                     $_SESSION['choix26'] = $_POST['choix26'];
                     $_SESSION['choix36'] = $_POST['choix36'];
                     $_SESSION['choix46'] = $_POST['choix46'];
                     $_SESSION['choix56'] = $_POST['choix56'];
                     $_SESSION['nomPre6'] = $_POST['nomPre6'];

                     $_SESSION['nomPrenom7'] = $_POST['nomPrenom7'];
                     $_SESSION['villeName7'] = $_POST['villeName7'];
                     $_SESSION['dateLic7'] = $_POST['dateLic7'];
                     $_SESSION['nomPersonne7'] = $_POST['nomPersonne7'];
                     $_SESSION['nombre7'] = $_POST['nombre7'];
                     $_SESSION['nomComplet7'] = $_POST['nomComplet7'];
                     $_SESSION['ciudadName7'] = $_POST['ciudadName7'];
                     $_SESSION['fecha7'] = $_POST['fecha7'];
                     $_SESSION['nomAcc7'] = $_POST['nomAcc7'];
                     $_SESSION['prenomAcc7'] = $_POST['prenomAcc7'];
                     $_SESSION['qualiteAcc7'] = $_POST['qualiteAcc7'];
                     $_SESSION['telephoneAcc7'] = $_POST['telephoneAcc7'];
                     $_SESSION['nomMed7'] = $_POST['nomMed7'];
                     $_SESSION['adresseMed7'] = $_POST['adresseMed7'];
                     $_SESSION['telephoneMed7'] = $_POST['telephoneMed7'];
                     $_SESSION['choix17'] = $_POST['choix17'];
                     $_SESSION['choix27'] = $_POST['choix27'];
                     $_SESSION['choix37'] = $_POST['choix37'];
                     $_SESSION['choix47'] = $_POST['choix47'];
                     $_SESSION['choix57'] = $_POST['choix57'];
                     $_SESSION['nomPre7'] = $_POST['nomPre7'];

                     $_SESSION['nomPrenom8'] = $_POST['nomPrenom8'];
                     $_SESSION['villeName8'] = $_POST['villeName8'];
                     $_SESSION['dateLic8'] = $_POST['dateLic8'];
                     $_SESSION['nomPersonne8'] = $_POST['nomPersonne8'];
                     $_SESSION['nombre8'] = $_POST['nombre8'];
                     $_SESSION['nomComplet8'] = $_POST['nomComplet8'];
                     $_SESSION['ciudadName8'] = $_POST['ciudadName8'];
                     $_SESSION['fecha8'] = $_POST['fecha8'];
                     $_SESSION['nomAcc8'] = $_POST['nomAcc8'];
                     $_SESSION['prenomAcc8'] = $_POST['prenomAcc8'];
                     $_SESSION['qualiteAcc8'] = $_POST['qualiteAcc8'];
                     $_SESSION['telephoneAcc8'] = $_POST['telephoneAcc8'];
                     $_SESSION['nomMed8'] = $_POST['nomMed8'];
                     $_SESSION['adresseMed8'] = $_POST['adresseMed8'];
                     $_SESSION['telephoneMed8'] = $_POST['telephoneMed8'];
                     $_SESSION['choix18'] = $_POST['choix18'];
                     $_SESSION['choix28'] = $_POST['choix28'];
                     $_SESSION['choix38'] = $_POST['choix38'];
                     $_SESSION['choix48'] = $_POST['choix48'];
                     $_SESSION['choix58'] = $_POST['choix58'];
                     $_SESSION['nomPre8'] = $_POST['nomPre8'];
                     break;
                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 9:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];

                     $_SESSION['nomPrenom6'] = $_POST['nomPrenom6'];
                     $_SESSION['villeName6'] = $_POST['villeName6'];
                     $_SESSION['dateLic6'] = $_POST['dateLic6'];
                     $_SESSION['nomPersonne6'] = $_POST['nomPersonne6'];
                     $_SESSION['nombre6'] = $_POST['nombre6'];
                     $_SESSION['nomComplet6'] = $_POST['nomComplet6'];
                     $_SESSION['ciudadName6'] = $_POST['ciudadName6'];
                     $_SESSION['fecha6'] = $_POST['fecha6'];
                     $_SESSION['nomAcc6'] = $_POST['nomAcc6'];
                     $_SESSION['prenomAcc6'] = $_POST['prenomAcc6'];
                     $_SESSION['qualiteAcc6'] = $_POST['qualiteAcc6'];
                     $_SESSION['telephoneAcc6'] = $_POST['telephoneAcc6'];
                     $_SESSION['nomMed6'] = $_POST['nomMed6'];
                     $_SESSION['adresseMed6'] = $_POST['adresseMed6'];
                     $_SESSION['telephoneMed6'] = $_POST['telephoneMed6'];
                     $_SESSION['choix16'] = $_POST['choix16'];
                     $_SESSION['choix26'] = $_POST['choix26'];
                     $_SESSION['choix36'] = $_POST['choix36'];
                     $_SESSION['choix46'] = $_POST['choix46'];
                     $_SESSION['choix56'] = $_POST['choix56'];
                     $_SESSION['nomPre6'] = $_POST['nomPre6'];

                     $_SESSION['nomPrenom7'] = $_POST['nomPrenom7'];
                     $_SESSION['villeName7'] = $_POST['villeName7'];
                     $_SESSION['dateLic7'] = $_POST['dateLic7'];
                     $_SESSION['nomPersonne7'] = $_POST['nomPersonne7'];
                     $_SESSION['nombre7'] = $_POST['nombre7'];
                     $_SESSION['nomComplet7'] = $_POST['nomComplet7'];
                     $_SESSION['ciudadName7'] = $_POST['ciudadName7'];
                     $_SESSION['fecha7'] = $_POST['fecha7'];
                     $_SESSION['nomAcc7'] = $_POST['nomAcc7'];
                     $_SESSION['prenomAcc7'] = $_POST['prenomAcc7'];
                     $_SESSION['qualiteAcc7'] = $_POST['qualiteAcc7'];
                     $_SESSION['telephoneAcc7'] = $_POST['telephoneAcc7'];
                     $_SESSION['nomMed7'] = $_POST['nomMed7'];
                     $_SESSION['adresseMed7'] = $_POST['adresseMed7'];
                     $_SESSION['telephoneMed7'] = $_POST['telephoneMed7'];
                     $_SESSION['choix17'] = $_POST['choix17'];
                     $_SESSION['choix27'] = $_POST['choix27'];
                     $_SESSION['choix37'] = $_POST['choix37'];
                     $_SESSION['choix47'] = $_POST['choix47'];
                     $_SESSION['choix57'] = $_POST['choix57'];
                     $_SESSION['nomPre7'] = $_POST['nomPre7'];

                     $_SESSION['nomPrenom8'] = $_POST['nomPrenom8'];
                     $_SESSION['villeName8'] = $_POST['villeName8'];
                     $_SESSION['dateLic8'] = $_POST['dateLic8'];
                     $_SESSION['nomPersonne8'] = $_POST['nomPersonne8'];
                     $_SESSION['nombre8'] = $_POST['nombre8'];
                     $_SESSION['nomComplet8'] = $_POST['nomComplet8'];
                     $_SESSION['ciudadName8'] = $_POST['ciudadName8'];
                     $_SESSION['fecha8'] = $_POST['fecha8'];
                     $_SESSION['nomAcc8'] = $_POST['nomAcc8'];
                     $_SESSION['prenomAcc8'] = $_POST['prenomAcc8'];
                     $_SESSION['qualiteAcc8'] = $_POST['qualiteAcc8'];
                     $_SESSION['telephoneAcc8'] = $_POST['telephoneAcc8'];
                     $_SESSION['nomMed8'] = $_POST['nomMed8'];
                     $_SESSION['adresseMed8'] = $_POST['adresseMed8'];
                     $_SESSION['telephoneMed8'] = $_POST['telephoneMed8'];
                     $_SESSION['choix18'] = $_POST['choix18'];
                     $_SESSION['choix28'] = $_POST['choix28'];
                     $_SESSION['choix38'] = $_POST['choix38'];
                     $_SESSION['choix48'] = $_POST['choix48'];
                     $_SESSION['choix58'] = $_POST['choix58'];
                     $_SESSION['nomPre8'] = $_POST['nomPre8'];

                     $_SESSION['nomPrenom9'] = $_POST['nomPrenom9'];
                     $_SESSION['villeName9'] = $_POST['villeName9'];
                     $_SESSION['dateLic9'] = $_POST['dateLic9'];
                     $_SESSION['nomPersonne9'] = $_POST['nomPersonne9'];
                     $_SESSION['nombre9'] = $_POST['nombre9'];
                     $_SESSION['nomComplet9'] = $_POST['nomComplet9'];
                     $_SESSION['ciudadName9'] = $_POST['ciudadName9'];
                     $_SESSION['fecha9'] = $_POST['fecha9'];
                     $_SESSION['nomAcc9'] = $_POST['nomAcc9'];
                     $_SESSION['prenomAcc9'] = $_POST['prenomAcc9'];
                     $_SESSION['qualiteAcc9'] = $_POST['qualiteAcc9'];
                     $_SESSION['telephoneAcc9'] = $_POST['telephoneAcc9'];
                     $_SESSION['nomMed9'] = $_POST['nomMed9'];
                     $_SESSION['adresseMed9'] = $_POST['adresseMed9'];
                     $_SESSION['telephoneMed9'] = $_POST['telephoneMed9'];
                     $_SESSION['choix19'] = $_POST['choix19'];
                     $_SESSION['choix29'] = $_POST['choix29'];
                     $_SESSION['choix39'] = $_POST['choix39'];
                     $_SESSION['choix49'] = $_POST['choix49'];
                     $_SESSION['choix59'] = $_POST['choix59'];
                     $_SESSION['nomPre9'] = $_POST['nomPre9'];
                     break;

                 // ------------------------------------------------------------------------------------------------------------------------
                 case $_SESSION['choix'] == 10:
                     $_SESSION['nomPrenom1'] = $_POST['nomPrenom1'];
                     $_SESSION['villeName1'] = $_POST['villeName1'];
                     $_SESSION['dateLic1'] = $_POST['dateLic1'];
                     $_SESSION['nomPersonne1'] = $_POST['nomPersonne1'];
                     $_SESSION['nombre1'] = $_POST['nombre1'];
                     $_SESSION['nomComplet1'] = $_POST['nomComplet1'];
                     $_SESSION['ciudadName1'] = $_POST['ciudadName1'];
                     $_SESSION['fecha1'] = $_POST['fecha1'];
                     $_SESSION['nomAcc1'] = $_POST['nomAcc1'];
                     $_SESSION['prenomAcc1'] = $_POST['prenomAcc1'];
                     $_SESSION['qualiteAcc1'] = $_POST['qualiteAcc1'];
                     $_SESSION['telephoneAcc1'] = $_POST['telephoneAcc1'];
                     $_SESSION['nomMed1'] = $_POST['nomMed1'];
                     $_SESSION['adresseMed1'] = $_POST['adresseMed1'];
                     $_SESSION['telephoneMed1'] = $_POST['telephoneMed1'];
                     $_SESSION['choix11'] = $_POST['choix11'];
                     $_SESSION['choix21'] = $_POST['choix21'];
                     $_SESSION['choix31'] = $_POST['choix31'];
                     $_SESSION['choix41'] = $_POST['choix41'];
                     $_SESSION['choix51'] = $_POST['choix51'];
                     $_SESSION['nomPre1'] = $_POST['nomPre1'];

                     $_SESSION['nomPrenom2'] = $_POST['nomPrenom2'];
                     $_SESSION['villeName2'] = $_POST['villeName2'];
                     $_SESSION['dateLic2'] = $_POST['dateLic2'];
                     $_SESSION['nomPersonne2'] = $_POST['nomPersonne2'];
                     $_SESSION['nombre2'] = $_POST['nombre2'];
                     $_SESSION['nomComplet2'] = $_POST['nomComplet2'];
                     $_SESSION['ciudadName2'] = $_POST['ciudadName2'];
                     $_SESSION['fecha2'] = $_POST['fecha2'];
                     $_SESSION['nomAcc2'] = $_POST['nomAcc2'];
                     $_SESSION['prenomAcc2'] = $_POST['prenomAcc2'];
                     $_SESSION['qualiteAcc2'] = $_POST['qualiteAcc2'];
                     $_SESSION['telephoneAcc2'] = $_POST['telephoneAcc2'];
                     $_SESSION['nomMed2'] = $_POST['nomMed2'];
                     $_SESSION['adresseMed2'] = $_POST['adresseMed2'];
                     $_SESSION['telephoneMed2'] = $_POST['telephoneMed2'];
                     $_SESSION['choix12'] = $_POST['choix12'];
                     $_SESSION['choix22'] = $_POST['choix22'];
                     $_SESSION['choix32'] = $_POST['choix32'];
                     $_SESSION['choix42'] = $_POST['choix42'];
                     $_SESSION['choix52'] = $_POST['choix52'];
                     $_SESSION['nomPre2'] = $_POST['nomPre2'];

                     $_SESSION['nomPrenom3'] = $_POST['nomPrenom3'];
                     $_SESSION['villeName3'] = $_POST['villeName3'];
                     $_SESSION['dateLic3'] = $_POST['dateLic3'];
                     $_SESSION['nomPersonne3'] = $_POST['nomPersonne3'];
                     $_SESSION['nombre3'] = $_POST['nombre3'];
                     $_SESSION['nomComplet3'] = $_POST['nomComplet3'];
                     $_SESSION['ciudadName3'] = $_POST['ciudadName3'];
                     $_SESSION['fecha3'] = $_POST['fecha3'];
                     $_SESSION['nomAcc3'] = $_POST['nomAcc3'];
                     $_SESSION['prenomAcc3'] = $_POST['prenomAcc3'];
                     $_SESSION['qualiteAcc3'] = $_POST['qualiteAcc3'];
                     $_SESSION['telephoneAcc3'] = $_POST['telephoneAcc3'];
                     $_SESSION['nomMed3'] = $_POST['nomMed3'];
                     $_SESSION['adresseMed3'] = $_POST['adresseMed3'];
                     $_SESSION['telephoneMed3'] = $_POST['telephoneMed3'];
                     $_SESSION['choix13'] = $_POST['choix13'];
                     $_SESSION['choix23'] = $_POST['choix23'];
                     $_SESSION['choix33'] = $_POST['choix33'];
                     $_SESSION['choix43'] = $_POST['choix43'];
                     $_SESSION['choix53'] = $_POST['choix53'];
                     $_SESSION['nomPre3'] = $_POST['nomPre3'];

                     $_SESSION['nomPrenom4'] = $_POST['nomPrenom4'];
                     $_SESSION['villeName4'] = $_POST['villeName4'];
                     $_SESSION['dateLic4'] = $_POST['dateLic4'];
                     $_SESSION['nomPersonne4'] = $_POST['nomPersonne4'];
                     $_SESSION['nombre4'] = $_POST['nombre4'];
                     $_SESSION['nomComplet4'] = $_POST['nomComplet4'];
                     $_SESSION['ciudadName4'] = $_POST['ciudadName4'];
                     $_SESSION['fecha4'] = $_POST['fecha4'];
                     $_SESSION['nomAcc4'] = $_POST['nomAcc4'];
                     $_SESSION['prenomAcc4'] = $_POST['prenomAcc4'];
                     $_SESSION['qualiteAcc4'] = $_POST['qualiteAcc4'];
                     $_SESSION['telephoneAcc4'] = $_POST['telephoneAcc4'];
                     $_SESSION['nomMed4'] = $_POST['nomMed4'];
                     $_SESSION['adresseMed4'] = $_POST['adresseMed4'];
                     $_SESSION['telephoneMed4'] = $_POST['telephoneMed4'];
                     $_SESSION['choix14'] = $_POST['choix14'];
                     $_SESSION['choix24'] = $_POST['choix24'];
                     $_SESSION['choix34'] = $_POST['choix34'];
                     $_SESSION['choix44'] = $_POST['choix44'];
                     $_SESSION['choix54'] = $_POST['choix54'];
                     $_SESSION['nomPre4'] = $_POST['nomPre4'];

                     $_SESSION['nomPrenom5'] = $_POST['nomPrenom5'];
                     $_SESSION['villeName5'] = $_POST['villeName5'];
                     $_SESSION['dateLic5'] = $_POST['dateLic5'];
                     $_SESSION['nomPersonne5'] = $_POST['nomPersonne5'];
                     $_SESSION['nombre5'] = $_POST['nombre5'];
                     $_SESSION['nomComplet5'] = $_POST['nomComplet5'];
                     $_SESSION['ciudadName5'] = $_POST['ciudadName5'];
                     $_SESSION['fecha5'] = $_POST['fecha5'];
                     $_SESSION['nomAcc5'] = $_POST['nomAcc5'];
                     $_SESSION['prenomAcc5'] = $_POST['prenomAcc5'];
                     $_SESSION['qualiteAcc5'] = $_POST['qualiteAcc5'];
                     $_SESSION['telephoneAcc5'] = $_POST['telephoneAcc5'];
                     $_SESSION['nomMed5'] = $_POST['nomMed5'];
                     $_SESSION['adresseMed5'] = $_POST['adresseMed5'];
                     $_SESSION['telephoneMed5'] = $_POST['telephoneMed5'];
                     $_SESSION['choix15'] = $_POST['choix15'];
                     $_SESSION['choix25'] = $_POST['choix25'];
                     $_SESSION['choix35'] = $_POST['choix35'];
                     $_SESSION['choix45'] = $_POST['choix45'];
                     $_SESSION['choix55'] = $_POST['choix55'];
                     $_SESSION['nomPre5'] = $_POST['nomPre5'];

                     $_SESSION['nomPrenom6'] = $_POST['nomPrenom6'];
                     $_SESSION['villeName6'] = $_POST['villeName6'];
                     $_SESSION['dateLic6'] = $_POST['dateLic6'];
                     $_SESSION['nomPersonne6'] = $_POST['nomPersonne6'];
                     $_SESSION['nombre6'] = $_POST['nombre6'];
                     $_SESSION['nomComplet6'] = $_POST['nomComplet6'];
                     $_SESSION['ciudadName6'] = $_POST['ciudadName6'];
                     $_SESSION['fecha6'] = $_POST['fecha6'];
                     $_SESSION['nomAcc6'] = $_POST['nomAcc6'];
                     $_SESSION['prenomAcc6'] = $_POST['prenomAcc6'];
                     $_SESSION['qualiteAcc6'] = $_POST['qualiteAcc6'];
                     $_SESSION['telephoneAcc6'] = $_POST['telephoneAcc6'];
                     $_SESSION['nomMed6'] = $_POST['nomMed6'];
                     $_SESSION['adresseMed6'] = $_POST['adresseMed6'];
                     $_SESSION['telephoneMed6'] = $_POST['telephoneMed6'];
                     $_SESSION['choix16'] = $_POST['choix16'];
                     $_SESSION['choix26'] = $_POST['choix26'];
                     $_SESSION['choix36'] = $_POST['choix36'];
                     $_SESSION['choix46'] = $_POST['choix46'];
                     $_SESSION['choix56'] = $_POST['choix56'];
                     $_SESSION['nomPre6'] = $_POST['nomPre6'];

                     $_SESSION['nomPrenom7'] = $_POST['nomPrenom7'];
                     $_SESSION['villeName7'] = $_POST['villeName7'];
                     $_SESSION['dateLic7'] = $_POST['dateLic7'];
                     $_SESSION['nomPersonne7'] = $_POST['nomPersonne7'];
                     $_SESSION['nombre7'] = $_POST['nombre7'];
                     $_SESSION['nomComplet7'] = $_POST['nomComplet7'];
                     $_SESSION['ciudadName7'] = $_POST['ciudadName7'];
                     $_SESSION['fecha7'] = $_POST['fecha7'];
                     $_SESSION['nomAcc7'] = $_POST['nomAcc7'];
                     $_SESSION['prenomAcc7'] = $_POST['prenomAcc7'];
                     $_SESSION['qualiteAcc7'] = $_POST['qualiteAcc7'];
                     $_SESSION['telephoneAcc7'] = $_POST['telephoneAcc7'];
                     $_SESSION['nomMed7'] = $_POST['nomMed7'];
                     $_SESSION['adresseMed7'] = $_POST['adresseMed7'];
                     $_SESSION['telephoneMed7'] = $_POST['telephoneMed7'];
                     $_SESSION['choix17'] = $_POST['choix17'];
                     $_SESSION['choix27'] = $_POST['choix27'];
                     $_SESSION['choix37'] = $_POST['choix37'];
                     $_SESSION['choix47'] = $_POST['choix47'];
                     $_SESSION['choix57'] = $_POST['choix57'];
                     $_SESSION['nomPre7'] = $_POST['nomPre7'];

                     $_SESSION['nomPrenom8'] = $_POST['nomPrenom8'];
                     $_SESSION['villeName8'] = $_POST['villeName8'];
                     $_SESSION['dateLic8'] = $_POST['dateLic8'];
                     $_SESSION['nomPersonne8'] = $_POST['nomPersonne8'];
                     $_SESSION['nombre8'] = $_POST['nombre8'];
                     $_SESSION['nomComplet8'] = $_POST['nomComplet8'];
                     $_SESSION['ciudadName8'] = $_POST['ciudadName8'];
                     $_SESSION['fecha8'] = $_POST['fecha8'];
                     $_SESSION['nomAcc8'] = $_POST['nomAcc8'];
                     $_SESSION['prenomAcc8'] = $_POST['prenomAcc8'];
                     $_SESSION['qualiteAcc8'] = $_POST['qualiteAcc8'];
                     $_SESSION['telephoneAcc8'] = $_POST['telephoneAcc8'];
                     $_SESSION['nomMed8'] = $_POST['nomMed8'];
                     $_SESSION['adresseMed8'] = $_POST['adresseMed8'];
                     $_SESSION['telephoneMed8'] = $_POST['telephoneMed8'];
                     $_SESSION['choix18'] = $_POST['choix18'];
                     $_SESSION['choix28'] = $_POST['choix28'];
                     $_SESSION['choix38'] = $_POST['choix38'];
                     $_SESSION['choix48'] = $_POST['choix48'];
                     $_SESSION['choix58'] = $_POST['choix58'];
                     $_SESSION['nomPre8'] = $_POST['nomPre8'];

                     $_SESSION['nomPrenom9'] = $_POST['nomPrenom9'];
                     $_SESSION['villeName9'] = $_POST['villeName9'];
                     $_SESSION['dateLic9'] = $_POST['dateLic9'];
                     $_SESSION['nomPersonne9'] = $_POST['nomPersonne9'];
                     $_SESSION['nombre9'] = $_POST['nombre9'];
                     $_SESSION['nomComplet9'] = $_POST['nomComplet9'];
                     $_SESSION['ciudadName9'] = $_POST['ciudadName9'];
                     $_SESSION['fecha9'] = $_POST['fecha9'];
                     $_SESSION['nomAcc9'] = $_POST['nomAcc9'];
                     $_SESSION['prenomAcc9'] = $_POST['prenomAcc9'];
                     $_SESSION['qualiteAcc9'] = $_POST['qualiteAcc9'];
                     $_SESSION['telephoneAcc9'] = $_POST['telephoneAcc9'];
                     $_SESSION['nomMed9'] = $_POST['nomMed9'];
                     $_SESSION['adresseMed9'] = $_POST['adresseMed9'];
                     $_SESSION['telephoneMed9'] = $_POST['telephoneMed9'];
                     $_SESSION['choix19'] = $_POST['choix19'];
                     $_SESSION['choix29'] = $_POST['choix29'];
                     $_SESSION['choix39'] = $_POST['choix39'];
                     $_SESSION['choix49'] = $_POST['choix49'];
                     $_SESSION['choix59'] = $_POST['choix59'];
                     $_SESSION['nomPre9'] = $_POST['nomPre9'];

                     $_SESSION['nomPrenom10'] = $_POST['nomPrenom10'];
                     $_SESSION['villeName10'] = $_POST['villeName10'];
                     $_SESSION['dateLic10'] = $_POST['dateLic10'];
                     $_SESSION['nomPersonne10'] = $_POST['nomPersonne10'];
                     $_SESSION['nombre10'] = $_POST['nombre10'];
                     $_SESSION['nomComplet10'] = $_POST['nomComplet10'];
                     $_SESSION['ciudadName10'] = $_POST['ciudadName10'];
                     $_SESSION['fecha10'] = $_POST['fecha10'];
                     $_SESSION['nomAcc10'] = $_POST['nomAcc10'];
                     $_SESSION['prenomAcc10'] = $_POST['prenomAcc10'];
                     $_SESSION['qualiteAcc10'] = $_POST['qualiteAcc10'];
                     $_SESSION['telephoneAcc10'] = $_POST['telephoneAcc10'];
                     $_SESSION['nomMed10'] = $_POST['nomMed10'];
                     $_SESSION['adresseMed10'] = $_POST['adresseMed10'];
                     $_SESSION['telephoneMed10'] = $_POST['telephoneMed10'];
                     $_SESSION['choix110'] = $_POST['choix110'];
                     $_SESSION['choix210'] = $_POST['choix210'];
                     $_SESSION['choix310'] = $_POST['choix310'];
                     $_SESSION['choix410'] = $_POST['choix410'];
                     $_SESSION['choix510'] = $_POST['choix510'];
                     $_SESSION['nomPre10'] = $_POST['nomPre10'];
                     break;

             default:
                 # code...10
                 break;
         }


        include("vues/entete.php");
        include("vues/recap.php");
        break;

    case 'enregistrer':
       /* //informations pour adherents
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaiss = $_POST['dateNaiss'];
        $lieuN = $_POST['lieuN'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $cp = $_POST['cp'];
        $telPort = $_POST['telPort'];
        $telDom = $_POST['telDom'];
        $mail = $_POST['mail'];
        $nat = $_POST['nat'];
        $numSS = $_POST['numSS'];


		$image1 = $_FILES['pieceI']['tmp_name'];
		$img1 = addslashes(file_get_contents($image1));

		//informations pour parent
        $nomP = $_POST['nomP'];
        $prenomP = $_POST['prenomP'];
        $ProfessionP = $_POST['professionP'];
        $villeP = $_POST['villeP'];
        $cpP = $_POST['cpP'];
        $adresseP = $_POST['adresseP'];
        $telPortP = $_POST['telPortP'];
        $telDomP = $_POST['telDomP'];
        $mailP = $_POST['mailP'];
        $lienP = $_POST['lienP'];
    
        
        $image = $_FILES['pieceIP']['tmp_name'];
        $img = addslashes(file_get_contents($image));

        $pdo->inscrireParent($nomP, $prenomP, $adresseP, $ProfessionP, $villeP, $cpP, $telPortP, $telDomP, $mailP, $lienP, $img);
        $res = $pdo->getIdParent($mailP, $telPortP);
       	foreach ($res as $idParent) {
            $id = $idParent['idParent'];
        }

        $pdo->inscrire($nom, $prenom, $dateNaiss, $lieuN, $adresse, $ville,$cp, $telPort, $telDom, $mail, $nat, $numSS, $id, $img1);

        //CODE POUR GENERER LE PDF DES INSCRIPTIONS 
        
         require('fpdf/fpdf.php');
         
            
        $pdf = new FPDF();
        
        // ajoute une page
        $pdf->AddPage();
        // définit la police courante
        $pdf->SetFont('Arial','B',16);
        //ajouter une image
        $pdf->Image('images/logo.png',20,20, 74, 58);
        $pdf->Ln(80);
        // affiche du texte
        $pdf->Cell(40);
        $pdf->Cell(40,10,'RUGBY !');
        $pdf->Ln(20);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('Adherant : '.$nom.' '.$prenom));
        $pdf->Ln(10);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('Date de Naissaince : '.$dateNaiss));
        $pdf->Ln(10);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('Adresse : '.$adresse.' '.$ville.' '.$cp));
        $pdf->Ln(10);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('téléphone Portable : '.$telPort));
        $pdf->Ln(10);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('Nationalité : '.$nat));
        $pdf->Ln(10);
        $pdf->Cell(10);
        $pdf->Cell(40,10, utf8_decode('Numéro de Sécurité Social : '.$numSS));
        // Enfin, le document est terminé et envoyé au navigateur grâce à Output().
        ob_end_clean();
        $pdf->Output(); */

       

        ob_end_clean();
        $pdf->Output(); 
        break; 


    

}





?>
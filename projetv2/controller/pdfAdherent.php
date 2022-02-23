<?php
session_start();
include('../modele/connexionDB.php');
require("../fpdf/fpdf.php");


$id=$_SESSION['id'];
$adherent=$DB->query("select * from adherents WHERE idAdh='$id'");
$adherent = $adherent->fetch();

$autorisation=$DB->query("select participation, encadrer, CNILFRR, sortie, image FROM autorisation INNER JOIN adherents ON autorisation.idAutorisation = adherents.idAdh WHERE adherents.idAdh='$id'");
$autorisation = $autorisation->fetch();

$charte=$DB->query("select lieu, date FROM charte LEFT JOIN adherents ON charte.idCharte = adherents.idAdh WHERE adherents.idAdh='$id'");
$charte = $charte->fetch();

$medecinTraitant=$DB->query("select medecintraitant.nom, medecintraitant.prenom, medecintraitant.adresse, tel FROM medecintraitant LEFT JOIN adherents ON medecintraitant.idMT = adherents.idAdh WHERE adherents.idAdh='$id'");
$medecinTraitant = $medecinTraitant->fetch();

$mere=$DB->query("select mere.nom, mere.prenom, mere.mail, mere.profession, mere.adresse, mere.ville, mere.cp, mere.telPortable, mere.telDomicile, mere.entreprise FROM mere LEFT JOIN adherents ON mere.idMere = adherents.idAdh WHERE adherents.idAdh='$id'");
$mere = $mere->fetch();

$pere=$DB->query("select pere.nom, pere.prenom, pere.mail, pere.profession, pere.adresse, pere.ville, pere.cp, pere.telPortable, pere.telDomicile, pere.entreprise FROM pere LEFT JOIN adherents ON pere.idPere = adherents.idAdh WHERE adherents.idAdh='$id'");
$pere = $pere->fetch();

$personneContact=$DB->query("select personnecontact.nom, personnecontact.prenom, personnecontact.qualite, personnecontact.telPortable, personnecontact.telDomicile FROM personnecontact LEFT JOIN adherents ON personnecontact.idPC = adherents.idAdh WHERE adherents.idAdh='$id'");
$personneContact = $personneContact->fetch();



//--------------------------------------------------------------------


//requete autorisation de l'id 19 : SELECT participation, encadrer, CNILFRR, sortie, image FROM autorisation INNER JOIN adherents ON autorisation.idAutorisation = adherents.idAdh WHERE adherents.idAdh=19;
//requete charte de l'id 19 : SELECT lieu, date FROM charte LEFT JOIN adherents ON charte.idCharte = adherents.idAdh WHERE adherents.idAdh=19;
//requete medecin traitant de l'id 19 : SELECT medecintraitant.nom, medecintraitant.prenom, medecintraitant.adresse, tel FROM medecintraitant LEFT JOIN adherents ON medecintraitant.idMT = adherents.idAdh WHERE adherents.idAdh=19;
//requete mere de l'id 19 : SELECT mere.nom, mere.prenom, mere.mail, mere.profession, mere.adresse, mere.ville, mere.cp, mere.telPortable, mere.telDomicile, mere.entreprise FROM mere LEFT JOIN adherents ON mere.idMere = adherents.idAdh WHERE adherents.idAdh=19;
//requete pere de l'id 19 : SELECT pere.nom, pere.prenom, pere.mail, pere.profession, pere.adresse, pere.ville, pere.cp, pere.telPortable, pere.telDomicile, pere.entreprise FROM pere LEFT JOIN adherents ON pere.idPere = adherents.idAdh WHERE adherents.idAdh=19;
//requete personne à contacter de l'id 19 : SELECT personnecontact.nom, personnecontact.prenom, personnecontact.qualite, personnecontact.telPortable, personnecontact.telDomicile FROM personnecontact LEFT JOIN adherents ON personnecontact.idPC = adherents.idAdh WHERE adherents.idAdh=19;


//--------------------------------------------------------------------




class PDF extends FPDF {
    //header
    function Header() {

    }
    // Footer
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);

        // Police Arial italique 8
        $this->SetFont('Helvetica','I',9);

        // Numéro de page, centré (C)
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}



// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new PDF('P','mm','A4');
// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
// Polices par défaut : Helvetica taille 9
$pdf->SetFont('Helvetica','',9);
// Couleur par défaut : noir
$pdf->SetTextColor(255);
// Compteur de pages {nb}
$pdf->AliasNbPages();
// Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement
$pdf->Image('../images/logo1.png',25,10,50);

$pdf->Ln(60); // saut de ligne 10mm


// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Helvetica','B',20);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(34, 66, 124);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
$pdf->SetX(0);
$pdf->Cell(175,25,'Inscription pour la saison 2022/2023',0,1,'L',1);      
$pdf->Ln(30); // saut de ligne 10mm




// Fonction en-tête des tableaux en 3 colonnes de largeurs variables
function entete_table($position_entete) {
    global $pdf;
    $pdf->SetDrawColor(34, 66, 124); // Couleur du fond RVB
    $pdf->SetFillColor(255); // Couleur des filets RVB
    $pdf->SetTextColor(0); // Couleur du texte noir
    $pdf->SetY($position_entete);
    // position de colonne 1 (5mm à gauche)  
    $pdf->Ln(30); // saut de ligne 10mm
    $pdf->SetX(0);
    $pdf->Cell(180,8,'Ville',1,0,'C',1);  // 60 >largeur colonne, 8 >hauteur colonne

    // position de la colonne 2 (70 = 10+60)
    //$pdf->SetX(70); 
    //$pdf->Cell(60,8,'Pays',1,0,'C',1);
    // position de la colonne 3 (130 = 70+60)
    //$pdf->SetX(130); 
    //$pdf->Cell(30,8,'Repas',1,0,'C',1);
  
    $pdf->Ln(); // Retour à la ligne
  }
  // AFFICHAGE EN-TÊTE DU TABLEAU
  // Position ordonnée de l'entête en valeur absolue par rapport au sommet de la page (70 mm)
  $position_entete = 70;
  // police des caractères
  $pdf->SetFont('Helvetica','',9);
  $pdf->SetTextColor(0);
  // on affiche les en-têtes du tableau
  entete_table($position_entete);



/*
  $position_detail = 78; // Position ordonnée = $position_entete+hauteur de la cellule d'en-tête (60+8)
  $requete2 = "SELECT * FROM gastro WHERE id_voyageur='1'";
  $result2 = mysqli_query($link, $requete2);
  while ($data_visit = mysqli_fetch_array($result2)) {
    // position abcisse de la colonne 1 (10mm du bord)
    $pdf->SetY($position_detail);
    $pdf->SetX(10);
    $pdf->MultiCell(60,8,utf8_decode($data_visit['ville']),1,'C');
      // position abcisse de la colonne 2 (70 = 10 + 60)  
    $pdf->SetY($position_detail);
    $pdf->SetX(70); 
    $pdf->MultiCell(60,8,utf8_decode($data_visit['pays']),1,'C');
    // position abcisse de la colonne 3 (130 = 70+ 60)
    $pdf->SetY($position_detail);
    $pdf->SetX(130); 
    $pdf->MultiCell(30,8,$data_visit['nb_repas'],1,'C');
  
    // on incrémente la position ordonnée de la ligne suivante (+8mm = hauteur des cellules)  
    $position_detail += 8; 
  }
  mysqli_free_result($result2);

*/





    // Nouvelle page PDF
    $pdf->AddPage();
    // Polices par défaut : Helvetica taille 9
    $pdf->SetFont('Helvetica','',11);
    // Couleur par défaut : noir
    $pdf->SetTextColor(0);
    // Compteur de pages {nb}
    $pdf->AliasNbPages();
    $pdf->Cell(500,20,utf8_decode('Plus rien à vous dire ;-)'));


    $pdf->Output('test.pdf','I');



?>

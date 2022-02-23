<?php
  session_start(); 
  include('modele/connexionDB.php');
  error_reporting(0); //retirer les rapports d'erreurs
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title>Accueil</title>
 </head>
 <body>
  <h1>Mon site</h1>

  <?php
   if(empty($_SESSION['autorisation'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
  ?>
   <a href="vues/formInscription.php">Inscription</a> <!-- Liens de nos futures pages -->
   <?php 
   $_SESSION["form"]="age";
   ?>
   <a href="vues/choixConnexion.php">Connexion</a>
   <a href="vues/formReinitialise.php">Réinitialisé son mot de passe</a>
  <?php
    }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
  ?>

   <a href="modele/deconnexion.php">Déconnexion</a>
  <?php
   }
   if($_SESSION['autorisation']=="manager"){
  ?>
  <br>
    <a href="vues/manager/modifProfil.php">Modifier mon profil</a> <br>
    <a href="vues/manager/formMDPManager.php">Changer votre mot de passe</a><br>
    <a href="vues/entraineur/gestionEntraineur.php">Gerer les entraineurs</a><br>
    <a href="vues/responsable/gestionResponsable.php">Gerer les responsables</a><br>
    <a href="vues/competition/gestionCompetition.php">Gerer les compétitions</a><br>
    <a href="vues/adherent/vueAdherent.php">donner une categorie aux adhérents</a><br>
    <a href="vues/categorie/vueCategorie.php">voir les catégories</a><br>
    <a href="vues/verifPaiement.php">voir les paiements</a>

  <?php 
    }
    if($_SESSION['autorisation']=="entraineur"){
  ?>
<a href="vues/entraineur/formMDPEntraineur.php">Changer votre mot de passe</a><br>
<a href="vues/entraineur/ModifProfil.php">Modifier mon profil</a>


<?php 
    }
  ?>


<?php 
    if($_SESSION['autorisation']=="responsable"){
  ?>
<a href="vues/responsable/formMDPResponsable.php">Changer votre mot de passe</a><br>
<a href="vues/responsable/ModifProfil.php">Modifier mon profil</a>


<?php 
    }
    if($_SESSION['autorisation']=="adherent"){
  ?>
<a href="vues/adherent/formMDPAdherent.php">Changer votre mot de passe</a><br>
<a href="vues/adherent/ModifProfil.php">Modifier mon profil</a><br>
<a href="controller/test.php">Générer un pdf d'inscription</a><br>
<a href="vues/reinscriptionMajeur.php">Se réinscrirre pour l'année prochaine</a>

<?php 
    }
    if($_SESSION['autorisation']=="mere"){
  ?>
<a href="vues/mere/formMDPMere.php">Changer votre mot de passe</a><br>
<a href="vues/mere/modifProfil.php">Modifier mon profil</a><br>
<a href="controller/test.php">Générer un pdf d'inscription</a><br>
<a href="vues/reinscriptionMineur.php">Se réinscrirre pour l'année prochaine</a>


<?php 
    }
    if($_SESSION['autorisation']=="pere"){
  ?>
<a href="vues/pere/formMDPPere.php">Changer votre mot de passe</a><br>
<a href="vues/pere/modifProfil.php">Modifier mon profil</a><br>
<a href="controller/test.php">Générer un pdf d'inscription</a><br>
<a href="vues/reinscriptionMineur.php">Se réinscrirre pour l'année prochaine</a>

<?php 
    }
  ?>



 </body>
</html>
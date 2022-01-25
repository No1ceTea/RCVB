<?php
  // Permet de savoir s'il y a une session. 
  // C'est-à-dire si un utilisateur s'est connecté à votre site 
  session_start(); 
  
  // Fichier PHP contenant la connexion à votre BDD
  include('connexionDB.php'); 
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
   if(!isset($_SESSION['id'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
  ?>
   <a href="formInscription.php">Inscription</a> <!-- Liens de nos futures pages -->
   <?php 
   $_SESSION["form"]="age";
   ?>
   <a href="formConnexion.php">Connexion</a>
  <?php
    }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
  ?>
   <a href="profil.php">Mon profil</a>
   <a href="modifier-profil.php">Modifier mon profil</a>
   <a href="deconnexion.php">Déconnexion</a>
  <?php
   }
  ?>
 </body>
</html>
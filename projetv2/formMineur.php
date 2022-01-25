<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
  </head>
  <body>
    
  <!-- pour l'enfant -->
  <div>Inscription de l'enfant</div>
    <form method="post" action="inscription.php" enctype="multipart/form-data">
        <input type="text" placeholder="Votre nom" name="nom" required>
        <input type="text" placeholder="Votre prenom" name="prenom" required> 
        <input type="date" placeholder="Votre date de naissance" name="dateNaissance" required>
        <input type="text" placeholder="Votre lieu de naissance" name="lieuNaissance" required> 
        <input type="text" placeholder="Votre adresse" name="adresse" required>
        <input type="text" placeholder="Votre ville" name="ville" required>
        <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" required>
        <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
        <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile" required> 
        <input type="text" placeholder="Votre numéro de Sécurité social" name="numSS" pattern="[0-9]{15}" required>
        <input type="text" placeholder="Votre nationalité" name="nationalite" required> 
        <label> piece d'identité : </label>
        <input type="file" name="pieceIdentite" required>
        <label> photo : </label>
        <input type="file" name="photo" required>

    <!-- pour les parents -->
    
    <div>Inscription du père</div>
    <input type="text" placeholder="Votre nom" name="nomPere" required>
    <input type="text" placeholder="Votre prenom" name="prenomPere" required> 
    <input type="text" placeholder="Votre adresse" name="adressePere" required>
    <input type="text" placeholder="Votre ville" name="villePere" required>
    <input type="text" placeholder="Votre code postale" name="cpPere" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortablePere" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicilePere" required> 
    <input type="text" placeholder="Votre profession" name="professionPere" required>   
    <input type="email" placeholder="Adresse mail" name="mailPere" required>
    <input type="password" placeholder="Votre mot de passe" name="mdpPere" required> 


    <div>Inscription de la mère</div>
    <input type="text" placeholder="Votre nom" name="nomMere" required>
    <input type="text" placeholder="Votre prenom" name="prenomMere" required> 
    <input type="text" placeholder="Votre adresse" name="adresseMere" required>
    <input type="text" placeholder="Votre ville" name="villeMere" required>
    <input type="text" placeholder="Votre code postale" name="cpMere" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMere" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileMere" required> 
    <input type="text" placeholder="Votre profession" name="professionMere" required>   
    <input type="email" placeholder="Adresse mail" name="mailMere" required>
    <input type="password" placeholder="Votre mot de passe" name="mdpMere" required> 

    <!-- pour les autorisations -->

    <label>Participation à la vie du club</label>
    <input type="radio" name="participation" value="1" required> OUI
    <input type="radio" name="participation" value="0" required> NON
    <label>Encadrer les enfants au sein du club sur ou en dehors du terrain</label>
    <input type="radio" name="encadrer" value="1" required> OUI
    <input type="radio" name="encadrer" value="0" required> NON
    <label>Autorisation CNIL FFR</label>
    <input type="radio" name="CNIL" value="1" required> OUI
    <input type="radio" name="CNIL" value="0" required> NON
    <label>Autorisation de sortie</label>
    <input type="radio" name="sortie" value="1" required> OUI
    <input type="radio" name="sortie" value="0" required> NON
    <label>Droit à l'image</label>
    <input type="radio" name="image" value="1" required> OUI
    <input type="radio" name="image" value="0" required> NON

    <!-- pour la charte -->

    <input type="text" placeholder="lieuCharte" name="lieu" required>
    <label>date du jour</label>
    <input type="date" name="dateCharte" required> 

    <!-- pour l'autorisation de soin -->

    <input type="text" placeholder="lieu" name="lieuSoin" required>
    <label>date du jour</label>
    <input type="date" name="dateSoin" required> 

    <!-- pour le medecin traitant -->

    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="adresse" placeholder="Adresse" name="adresse" required>

    <!-- pour la personne à contacter -->



        <button type="submit" name="inscriptionMineur">Envoyer</button>
    </form>
  </body>
</html>
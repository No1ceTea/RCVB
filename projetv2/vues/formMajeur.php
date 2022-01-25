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
  <div>Inscription de l'adhérent</div>
    <form method="post" action="inscription.php" enctype="multipart/form-data">
        <input type="text" placeholder="Votre nom" name="nom" required>
        <input type="text" placeholder="Votre prenom" name="prenom" required>
        <input type="email" placeholder="Adresse mail" name="mailAdherent" required>
        <input type="password" placeholder="Votre mot de passe" name="mdpAdherent" required> 
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

    <!-- pour les autorisations -->
    <br><br>
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
    <br><br>
    <input type="text" placeholder="lieuCharte" name="lieu" required>
    <label>date du jour</label>
    <input type="date" name="dateCharte" required> 

    <!-- pour l'autorisation de soin -->
    <br><br>
    <input type="text" placeholder="lieuSoin" name="lieuSoin" required>
    <label>date du jour</label>
    <input type="date" name="dateSoin" required> 

    <!-- pour le medecin traitant -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="adresse" placeholder="Adresse" name="adresse" required>

    <!-- pour la personne à contacter -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableContact" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileContact" required> 
    <input type="text" placeholder="Adresse" name="adresse" required>




        <button type="submit" name="inscriptionMineur">Envoyer</button>
    </form>
  </body>
</html>
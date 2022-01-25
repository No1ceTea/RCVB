<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<div>Inscription de l'enfant</div>
<form method="post" action="inscription.php" enctype="multipart/form-data">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="date" placeholder="Votre date de naissance" name="dateNaissance" required>
    <input type="text" placeholder="Votre lieu de naissance" name="lieuNaissance" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="text" placeholder="Votre adresse" name="adresse" required>
    <input type="text" placeholder="Votre ville" name="ville" required>
    <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile" required> 
    <input type="email" placeholder="Adresse mail" name="mail" required>
    <input type="text" placeholder="Votre numéro de Sécurité social" name="numSS" pattern="[0-9]{15}" required>
    <input type="text" placeholder="Votre nationalité" name="nationalite" required> 
    <input type="password" placeholder="Votre mot de passe" name="mdp" required> 
    <label> piece d'identité : </label>
    <input type="file" name="pieceIdentite" required>
    <label> photo : </label>
    <input type="file" name="photo" required>
    <button type="submit" name="inscriptionEnfant">Envoyer</button>
</form>
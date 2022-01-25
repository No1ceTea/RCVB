<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<a href="dejaInscrit.php"> Déjà inscrits?</a>
<div>Inscription du père</div>
<form method="post" action="inscription.php">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="text" placeholder="Votre adresse" name="adresse" required>
    <input type="text" placeholder="Votre ville" name="ville" required>
    <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile" required> 
    <input type="email" placeholder="Adresse mail" name="mail" required>
    <input type="text" placeholder="Votre profession" name="profession" required>
    <input type="password" placeholder="Votre mot de passe" name="mdp" required> 
    <button type="submit" name="inscriptionPere">Envoyer</button>
</form>

<div>Inscription de la mère</div>
<form method="post" action="inscription.php">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="text" placeholder="Votre adresse" name="adresse" required>
    <input type="text" placeholder="Votre ville" name="ville" required>
    <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile" required> 
    <input type="email" placeholder="Adresse mail" name="mail" required>
    <input type="text" placeholder="Votre profession" name="profession" required>
    <input type="password" placeholder="Votre mot de passe" name="mdp" required> 
    <button type="submit" name="inscriptionMere">Envoyer</button>
</form>
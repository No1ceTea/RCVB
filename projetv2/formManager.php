<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<div>Inscription du Manager</div>
<form method="post" action="inscription.php">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
    <input type="password" placeholder="Votre mot de passe" name="mdp" required> 
    <input type="email" placeholder="Adresse mail" name="mail" required>
    <button type="submit" name="inscriptionManager">Envoyer</button>
</form>
<?php
  session_start(); 
  include('../modele/connexionDB.php');
?>
<div> </div>
<form method="post" action="../controller/mdpOublie.php">
<input type="email" placeholder="Adresse mail" name="mail" required>
<button type="submit" name="connexion">envoyer votre nouveau mot de passe par mail</button>
</form>
<?php
  session_start();
  include('../modele/connexionDB.php');
?>

<form method="post" action="../controller/reinitialiseMDP.php">
    <input type="email" placeholder="Adresse mail" name="mail" required>
    <input type="password" placeholder="votre mot de passe temporaire" name="mdpTemp" required>
    <input type="password" placeholder="votre nouveau mot de passe" name="Nmdp" required>
    <input type="password" placeholder="confirmez votre nouveau mot de passe" name="mdpC" required>
    <button type="submit" name="changerMDP">Envoyer</button>
</form>
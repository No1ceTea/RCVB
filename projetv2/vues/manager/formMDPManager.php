<?php
  session_start();
  include('../../modele/connexionDB.php');
?>

<form method="post" action="../../controller/manager/changerMDPManager.php">
    <input type="password" placeholder="votre mot de passe actuel" name="mdp" required>
    <input type="password" placeholder="votre nouveau mot de passe" name="Nmdp" required>
    <input type="password" placeholder="confirmez votre nouveau mot de passe" name="mdpC" required>
    <button type="submit" name="changerMDPManager">Envoyer</button>
</form>
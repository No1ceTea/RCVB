<?php
  session_start(); 
  include('../modele/connexionDB.php');
?>
<div>Avez vous plus de 18 ans?</div>
    <form method="post" action="formInscription.php">
      <input type="radio" name="rep" value="1" required> OUI
      <input type="radio" name="rep" value="0" required> NON
      <button type="submit" name="choixAge">Envoyer</button>
    </form>
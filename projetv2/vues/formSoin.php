<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<div>
autorisation de soins en cas d'accident RCVB - SAISON 2020-2021
</div>
<form method="post" action="inscription.php">
    <input type="text" placeholder="lieu" name="lieu" required>
    <label>date du jour</label>
    <input type="date" name="date" required> 
    <button type="submit" name="soin">Envoyer</button>
</form>
<?php
  session_start(); 
  include('connexionDB.php'); 
?>
<div>
    Charte des Licenciés du RCVB - SAISON 2020-2021
</div>
<form method="post" action="inscription.php">
    <input type="text" placeholder="Votre nom" name="nom" required>
    <input type="text" placeholder="Votre prenom" name="prenom" required> 
    <input type="text" placeholder="lieu" name="lieu" required>
    <label>date du jour</label>
    <input type="date" name="date" required> 
    <button type="submit" name="charte">Envoyer</button>
</form>
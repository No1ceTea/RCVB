<?php
  session_start(); 
  include('../modele/connexionDB.php');
?>


<div>Se connecter en tant que...</div>
    <form method="post" action="formConnexion.php">
        <select name="selectConnexion" id="selectConnexion">
            <option name="choixC" value="adherent">adherent</option>
            <option name="choixC" value="entraineur">entraineur</option>
            <option name="choixC" value="responsable">responsable</option>
            <option name="choixC" value="manager">manager</option>
            <option name="choixC" value="mere">mere</option>
            <option name="choixC" value="pere">pere</option>
        </select>
        <button type="submit" name="choixConnexion">Envoyer</button>
    </form>
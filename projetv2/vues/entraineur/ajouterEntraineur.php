<?php
  session_start();
  include('../../modele/connexionDB.php');
?>

<form method="post" action="../../controller/entraineur/ajouter2Entraineur.php">
    <input type="text" placeholder="Le nom" name="nom" required>
    <input type="text" placeholder="Le prenom" name="prenom" required>
    <input type="mail" placeholder="Le mail" name="mail" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="tel" required>
    <button type="submit" name="ajouterEntraineur">Envoyer</button>
</form>
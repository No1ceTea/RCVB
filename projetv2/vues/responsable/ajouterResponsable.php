<?php
  session_start();
  include('../../modele/connexionDB.php');
?>

<form method="post" action="../../controller/responsable/ajouter2Responsable.php">
    <input type="text" placeholder="Le nom" name="nom" required>
    <input type="text" placeholder="Le prenom" name="prenom" required>
    <input type="mail" placeholder="Le mail" name="mail" required>
    <input type="tel" placeholder="Le portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="tel" required>
    <input type="text" placeholder="Le poste" name="poste" required>
    <button type="submit" name="ajouterResponsable">Envoyer</button>
</form>
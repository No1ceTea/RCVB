<?php
  session_start();
  include('../../modele/connexionDB.php');
?>

<form method="post" action="../../controller/categorie/ajouter2Categorie.php">
    <input type="text" placeholder="abréviation de la catégorie" name="idCat" required>
    <input type="text" placeholder="nom complet categorie" name="nomCat" required>
    <input type="text" placeholder="Le prix" name="prix" required>
    <button type="submit" name="ajouterCategorie">Envoyer</button>
</form>
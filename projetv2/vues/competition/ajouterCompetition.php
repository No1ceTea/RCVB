<?php
  session_start();
  include('../../modele/connexionDB.php');

  $res=$DB->query("SELECT * from categorie");
?>

<form method="post" action="../../controller/competition/ajouter2Competition.php">
    <input type="text" placeholder="Le nom" name="nom" required>
    <input type="text" placeholder="Le lieu" name="lieu" required>
    <input type="date" placeholder="la date" name="date" required>
    <input type="time" name="heureDebut" required>

    <select name="idCat" id="idCat">
    <?php
    while($categorie = $res->fetch(PDO::FETCH_OBJ)){
   ?>
    <option name="idCat" value="<?php echo $categorie->idCat ?>"><?php echo $categorie->idCat ?></option>
    <?php
    }
    ?>
    </select>

    <button type="submit" name="ajouterResponsable">Envoyer</button>
</form>
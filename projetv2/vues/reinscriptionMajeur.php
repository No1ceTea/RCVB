<?php
  session_start(); 
  include('../modele/connexionDB.php');
  $id=$_SESSION['id'];
  $req = $DB->query("SELECT * FROM adherents WHERE idAdh = ? ",
  array($id));
  $req = $req->fetch();
  //donnee de la personne à contacter
  $PC = $DB->query("SELECT * FROM personnecontact WHERE idPC = ? ",
  array($req['idPC']));
  $PC = $PC->fetch();
  //donnee du medecin traitant
  $MT = $DB->query("SELECT * FROM medecintraitant WHERE idMT = ? ",
  array($req['idMT']));
  $MT = $MT->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
  </head>
  <body>
    
  <!-- pour l'enfant -->
  <div>Inscription de l'adhérent</div>
    <form method="post" action="../controller/reinscription.php" enctype="multipart/form-data">
        <input type="text" placeholder="Votre nom" name="nom" value="<?php echo $req['nom'] ?>" required>
        <input type="text" placeholder="Votre prenom" name="prenom" value="<?php echo $req['prenom'] ?>" required>
        <input type="email" placeholder="Adresse mail" name="mail" value="<?php echo $req['mail'] ?>" required>
        <input type="text" placeholder="Votre adresse" name="adresse" value="<?php echo $req['adresse'] ?>" required>
        <input type="text" placeholder="Votre ville" name="ville" value="<?php echo $req['ville'] ?>" required>
        <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" value="<?php echo $req['cp'] ?>" required>
        <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?php echo $req['telPortable'] ?>" name="telPortable" required> 
        <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?php echo $req['telDomicile'] ?>" name="telDomicile" > 
        <input type="text" placeholder="Votre numéro de Sécurité social" name="numSS" pattern="[0-1]{1}[0-9]{14}" value="<?php echo $req['numSS'] ?>" required>
        <input type="text" placeholder="Votre nationalité" name="nationalite" value="<?php echo $req['nationalite'] ?>" required> 

    <!-- pour les autorisations -->
    <br><br>
    <label>Participation à la vie du club</label>
    <input type="radio" name="participation" value="1" required> OUI
    <input type="radio" name="participation" value="0" required> NON
    <label>Encadrer les enfants au sein du club sur ou en dehors du terrain</label>
    <input type="radio" name="encadrer" value="1" required> OUI
    <input type="radio" name="encadrer" value="0" required> NON
    <label>Autorisation CNIL FFR</label>
    <input type="radio" name="CNIL" value="1" required> OUI
    <input type="radio" name="CNIL" value="0" required> NON
    <label>Autorisation de sortie</label>
    <input type="radio" name="sortie" value="1" required> OUI
    <input type="radio" name="sortie" value="0" required> NON
    <label>Droit à l'image</label>
    <input type="radio" name="image" value="1" required> OUI
    <input type="radio" name="image" value="0" required> NON

    <!-- pour la charte -->
    <br><br>
    <input type="text" placeholder="lieuCharte" name="lieuCharte" required>

    <!-- pour l'autorisation de soin -->
    <br><br>
    <input type="text" placeholder="lieuSoin" name="lieuSoin" required>

    <!-- pour le medecin traitant -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nomMedecin" value="<?php echo $MT['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomMedecin" value="<?php echo $MT['prenom'] ?>" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMedecin" value="<?php echo $MT['tel'] ?>" required> 
    <input type="adresse" placeholder="Adresse" name="adresseMedecin" value="<?php echo $MT['adresse'] ?>"  required>

    <!-- pour la personne à contacter -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nomContact" value="<?php echo $PC['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomContact" value="<?php echo $PC['prenom'] ?>" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableContact" value="<?php echo $PC['telPortable'] ?>" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileContact" value="<?php echo $PC['telDomicile'] ?>">
    <select name="qualiteContact" id="qualiteContact" value="<?php echo $PC['qualite'] ?>">
      <option name="choixC" value="pere">Père</option>
      <option name="choixC" value="mere">Mère</option>
      <option name="choixC" value="frere">frère</option>
      <option name="choixC" value="soeur">Soeur</option>
      <option name="choixC" value="grand-pere">Grand-père</option>
      <option name="choixC" value="grand-mere">Grand-mère</option>
      <option name="choixC" value="ami">Ami</option>
    </select>
    <button type="submit" name="inscriptionMajeur">Envoyer</button>

    </form>
  </body>
</html>
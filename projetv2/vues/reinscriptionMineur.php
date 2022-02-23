<?php
  session_start(); 
  include('../modele/connexionDB.php');
  $id=$_SESSION['id'];
  if($_SESSION['autorisation']=='pere'){
    $pere = $DB->query("SELECT * FROM pere WHERE idPere = ? ",
    array($id));
    $pere = $pere->fetch();

    $adherent = $DB->query("SELECT * FROM adherents WHERE idPere = ? ",
    array($id));
    $adherent = $adherent->fetch();

    $mere = $DB->query("SELECT * FROM mere WHERE idMere = ? ",
    array($adherent['idMere']));
    $mere = $mere->fetch();
  }
  if($_SESSION['autorisation']=='mere'){
    $mere = $DB->query("SELECT * FROM mere WHERE idMere = ? ",
    array($id));
    $mere = $mere->fetch();

    $adherent = $DB->query("SELECT * FROM adherents WHERE idMere = ? ",
    array($id));
    $adherent = $adherent->fetch();

    $pere = $DB->query("SELECT * FROM pere WHERE idPere = ? ",
    array($adherent['idPere']));
    $pere = $pere->fetch();
  }
    //donnee de la personne à contacter
    $PC = $DB->query("SELECT * FROM personnecontact WHERE idPC = ? ",
    array($adherent['idPC']));
    $PC = $PC->fetch();
    //donnee du medecin traitant
    $MT = $DB->query("SELECT * FROM medecintraitant WHERE idMT = ? ",
    array($adherent['idMT']));
    $MT = $MT->fetch();
        //donnee du medecin traitant
    $soin = $DB->query("SELECT * FROM soin WHERE idSoin = ? ",
    array($adherent['idSoin']));
    $soin = $soin->fetch();


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
  <div>Inscription de l'enfant</div>
  <div>Inscription de l'adhérent</div>
    <form method="post" action="../controller/reinscription.php" enctype="multipart/form-data">
        <input type="text" placeholder="Votre nom" name="nom" value="<?php echo $adherent['nom'] ?>" required>
        <input type="text" placeholder="Votre prenom" name="prenom" value="<?php echo $adherent['prenom'] ?>" required>
        <input type="text" placeholder="Votre adresse" name="adresse" value="<?php echo $adherent['adresse'] ?>" required>
        <input type="text" placeholder="Votre ville" name="ville" value="<?php echo $adherent['ville'] ?>" required>
        <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" value="<?php echo $adherent['cp'] ?>" required>
        <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?php echo $adherent['telPortable'] ?>" name="telPortable" required> 
        <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" value="<?php echo $adherent['telDomicile'] ?>" name="telDomicile" > 
        <input type="text" placeholder="Votre numéro de Sécurité social" name="numSS" pattern="[0-1]{1}[0-9]{14}" value="<?php echo $adherent['numSS'] ?>" required>
        <input type="text" placeholder="Votre nationalité" name="nationalite" value="<?php echo $adherent['nationalite'] ?>" required> 

    <!-- pour les parents -->
    <br><br>
    <div>Inscription du père</div>
    <input type="text" placeholder="Votre nom" name="nomPere" value="<?php echo $pere['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomPere" value="<?php echo $pere['prenom'] ?>" required> 
    <input type="text" placeholder="Votre adresse" name="adressePere" value="<?php echo $pere['adresse'] ?>" required>
    <input type="text" placeholder="Votre ville" name="villePere" value="<?php echo $pere['ville'] ?>" required>
    <input type="text" placeholder="Votre entreprise" name="entreprisePere" value="<?php echo $pere['entreprise'] ?>" required>
    <input type="text" placeholder="Votre code postale" name="cpPere" pattern="[0-9]{5}" value="<?php echo $pere['cp'] ?>" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortablePere" value="<?php echo $pere['telPortable'] ?>" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicilePere" value="<?php echo $pere['telDomicile'] ?>"> 
    <input type="text" placeholder="Votre profession" name="professionPere" value="<?php echo $pere['profession'] ?>" required>   
    <input type="email" placeholder="Adresse mail" name="mailPere" value="<?php echo $pere['mail'] ?>" required>

    <br><br>
    <div>Inscription de la mère</div>
    <input type="text" placeholder="Votre nom" name="nomMere" value="<?php echo $mere['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomMere" value="<?php echo $mere['prenom'] ?>" required> 
    <input type="text" placeholder="Votre adresse" name="adresseMere" value="<?php echo $mere['adresse'] ?>" required>
    <input type="text" placeholder="Votre ville" name="villeMere" value="<?php echo $mere['ville'] ?>" required>
    <input type="text" placeholder="Votre entreprise" name="entrepriseMere" value="<?php echo $mere['entreprise'] ?>" required>
    <input type="text" placeholder="Votre code postale" name="cpMere" pattern="[0-9]{5}" value="<?php echo $mere['cp'] ?>" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMere" value="<?php echo $mere['telPortable'] ?>" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileMere"value="<?php echo $mere['telDomicile'] ?>" > 
    <input type="text" placeholder="Votre profession" name="professionMere" value="<?php echo $mere['profession'] ?>" required>   
    <input type="email" placeholder="Adresse mail" name="mailMere" value="<?php echo $mere['mail'] ?>" required>

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
    <input type="text" placeholder="lieuSoin" name="lieuSoin" value="<?php echo $soin['lieuSoin'] ?>" required>
    <input type="text" placeholder="Votre nom" name="nomSoin" value="<?php echo $soin['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomSoin" value="<?php echo $soin['prenom'] ?>" required> 
    <select name="qualiteSoin" id="qualiteSoin" value="<?php echo $soin['qualite'] ?>">
      <option name="choixS" value="pere">Père</option>
      <option name="choixS" value="mere">Mère</option>
      <option name="choixS" value="frere">frère</option>
      <option name="choixS" value="soeur">Soeur</option>
      <option name="choixS" value="grand-pere">Grand-père</option>
      <option name="choixS" value="grand-mere">Grand-mère</option>
      <option name="choixS" value="ami">Ami</option>
    </select>

    <!-- pour le medecin traitant -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nomMedecin" value="<?php echo $MT['nom'] ?>" required>
    <input type="text" placeholder="Votre prenom" name="prenomMedecin" value="<?php echo $MT['prenom'] ?>" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMedecin" value="<?php echo $MT['tel'] ?>" required> 
    <input type="adresse" placeholder="Adresse" name="adresseMedecin" value="<?php echo $MT['adresse'] ?>" required>

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
      <button type="submit" name="inscriptionMineur">Envoyer</button>

    </form>
  </body>
</html>
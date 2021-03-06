<?php
  session_start(); 
  include('../modele/connexionDB.php');
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
    <form method="post" action="../controller/inscription.php" enctype="multipart/form-data">
        <input type="text" placeholder="Votre nom" name="nom" required>
        <input type="text" placeholder="Votre prenom" name="prenom" required> 
        <input type="date" placeholder="Votre date de naissance" name="dateNaissance" max=<?php echo date('Y-m-d', mktime(0, 0, 0, date("m"), date("d"), date("Y")-5)); ?> required>
        <input type="text" placeholder="Votre lieu de naissance" name="lieuNaissance" required> 
        <input type="text" placeholder="Votre adresse" name="adresse" required>
        <input type="text" placeholder="Votre ville" name="ville" required>
        <input type="text" placeholder="Votre code postale" name="cp" pattern="[0-9]{5}" required>
        <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable">
        <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile">
        <input type="text" placeholder="Votre numéro de Sécurité social" name="numSS" pattern="[0-1]{1}[0-9]{14}" required>
        <input type="text" placeholder="Votre nationalité" name="nationalite" required> 
        <label> piece d'identité : </label>
        <input type="file" name="pieceIdentite" required>
        <label> photo : </label>
        <input type="file" name="photo" required>

    <!-- pour les parents -->
    <br><br>
    <div>Inscription du père</div>
    <input type="text" placeholder="Votre nom" name="nomPere" required>
    <input type="text" placeholder="Votre prenom" name="prenomPere" required> 
    <input type="text" placeholder="Votre adresse" name="adressePere" required>
    <input type="text" placeholder="Votre ville" name="villePere" required>
    <input type="text" placeholder="Votre entreprise" name="entreprisePere" required>
    <input type="text" placeholder="Votre code postale" name="cpPere" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortablePere" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicilePere"> 
    <input type="text" placeholder="Votre profession" name="professionPere" required>   
    <input type="email" placeholder="Adresse mail" name="mailPere" required>
    <input type="password" placeholder="Votre mot de passe" name="mdpPere" required> 

    <br><br>
    <div>Inscription de la mère</div>
    <input type="text" placeholder="Votre nom" name="nomMere" required>
    <input type="text" placeholder="Votre prenom" name="prenomMere" required> 
    <input type="text" placeholder="Votre adresse" name="adresseMere" required>
    <input type="text" placeholder="Votre ville" name="villeMere" required>
    <input type="text" placeholder="Votre entreprise" name="entrepriseMere" required>
    <input type="text" placeholder="Votre code postale" name="cpMere" pattern="[0-9]{5}" required>
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMere" required> 
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileMere"> 
    <input type="text" placeholder="Votre profession" name="professionMere" required>   
    <input type="email" placeholder="Adresse mail" name="mailMere" required>
    <input type="password" placeholder="Votre mot de passe" name="mdpMere" required> 

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
<?php /*
    <!-- pour la charte -->
    <br><br>Je, soussigné(e) , licencié au RCVB (éducateur, joueur, 
            dirigeant), adhère à la charte des joueurs du club. 
            Cela signifie que pour la saison 2020-2021, je m’engage :<br>
            1/ dans le fonctionnement <br>
            • À être présent les jours d'entraînement et/ou de match, et à prévenir et justifier de mes
            absences (téléphone, sms, mail…)<br>
            • À arriver à l’heure à tous les rendez-vous<br>
            • À avoir et prendre soin de toutes mes affaires avant, pendant, et après les séances
            (protège-dents, maillot, short, manteau...)<br>
            • À aider les coachs à sortir, rincer et ranger tout le matériel nécessaire à la pratique du
            rugby (entrainement ou match)<br>
            2/ sur le terrain<br>
            • À ne pas avoir peur de me faire mal (« le rugby se pratique en sécurité »)<br>
            • À disposer des 2 ingrédients magiques de l’apprentissage : la CONCENTRATION et
            l’ENVIE<br>
            • À apprendre à marquer et faire marquer des essais<br>
            • À apprendre à plaquer et le faire<br>
            • À connaitre et respecter les règles du jeu<br>
            • À respecter ses coéquipiers, les adversaires, les arbitres et les dirigeants (code du
            sportif)<br>
            • À avoir un comportement loyal, généreux, combattif et fair-play sur et en dehors du
            terrain (code du sportif)<br>
            signé à :
    <input type="text" placeholder="lieuCharte" name="lieuCharte" required>

    <!-- pour l'autorisation de soin -->
    <br><br>
    Je, soussigné <input type="text" placeholder="Votre nom" name="nomSoin" required>, <input type="text" placeholder="Votre prenom" name="prenomSoin" required>      <select name="qualiteSoin" id="qualiteSoin">
      <option name="choixS" value="pere">Père</option>
      <option name="choixS" value="mere">Mère</option>
      <option name="choixS" value="frere">frère</option>
      <option name="choixS" value="soeur">Soeur</option>
      <option name="choixS" value="grand-pere">Grand-père</option>
      <option name="choixS" value="grand-mere">Grand-mère</option>
      <option name="choixS" value="ami">Ami</option>
    </select>,

    en cas d’accident du licencié

    autorise par la présente : 
    - tout examen ou intervention chirurgicale qui serait nécessaire
    - le responsable de l’association, du Comité ou de la FFR :
    - à prendre toutes mesures utiles et notamment à demander son admission
    en établissement de soins
    - à reprendre l’enfant à sa sortie, uniquement en cas d’indisponibilité
    absolue des parents ou du représentant légal du mineur

    Fait à : <input type="text" placeholder="lieuSoin" name="lieuSoin" required>
    */?>

    <!-- pour le medecin traitant -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nomMedecin" required>
    <input type="text" placeholder="Votre prenom" name="prenomMedecin" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableMedecin" required> 
    <input type="adresse" placeholder="Adresse" name="adresseMedecin" required>

    <!-- pour la personne à contacter -->
    <br><br>
    <input type="text" placeholder="Votre nom" name="nomContact" required>
    <input type="text" placeholder="Votre prenom" name="prenomContact" required> 
    <input type="tel" placeholder="portable : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortableContact" required>
    <input type="tel" placeholder="domicile : 06 06 06 06 06" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicileContact"> 
    <select name="qualiteContact" id="qualiteContact">
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
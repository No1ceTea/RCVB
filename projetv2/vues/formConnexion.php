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
    <title>Connexion</title>
  </head>
  <body>
    <div>Se connecter</div>
    <form method="post" action="../modele/connexion.php">
      <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
      <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
      <button type="submit" name="connexion">Se connecter</button>
    </form>
    <a href="formMotdepasseOublie.php">Mot de passe oublié ?</a>

    <?php 
    if ($_POST["selectConnexion"]=="adherent"){
      $_SESSION['ChoixConnexion']="adherent";
    }
    if ($_POST["selectConnexion"]=="responsable"){
      $_SESSION['ChoixConnexion']="responsable";
    }
    if ($_POST["selectConnexion"]=="entraineur"){
      $_SESSION['ChoixConnexion']="entraineur";
    }
    if ($_POST["selectConnexion"]=="manager"){
      $_SESSION['ChoixConnexion']="manager";
    }
    ?>
  </body>
</html>
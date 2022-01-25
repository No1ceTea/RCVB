<?php
  session_start(); 
  include('connexionDB.php'); 
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
  <?php
  if($_SESSION["form"]=="age"){
    header('Location: formAge.php');
  }
  if(isset($_POST["rep"])){
    if($_POST["rep"]=="1"){
      header('Location: formAdherent.php');
    }
    elseif($_POST["rep"]=="0"){
      header('Location: formParent.php');
    }
  }


  ?>









  </body>
</html>
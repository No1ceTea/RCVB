<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">

    <!-- Pour les icons (fb, yt) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- autocomplétion ville et cp --> 
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">

    <title>Design rcvb</title>
  </head>
  <body>


<link rel="stylesheet" href="styles/styleSommaireD.css">

<div class="sidenav">

  <img src="images/logo1.png" class="img-fluid" alt="...">


  <a href="#" class="nav-link active">  Dirigeant :<br>
    <?php echo $_SESSION['prenom']."  ".$_SESSION['nom'] ?>
  </a>
  <a href="index.php?action=dirigeant&option=listeAdh">Liste des adhérents par catégorie</a>
  <a href="index.php?action=dirigeant&option=suiviePaiement">Suivie des paiements</a>
  <a href="index.php?action=dirigeant&option=majInfosPerso">Mettre à jour mes informations personnelles</a>
  <a href="index.php?action=seConnecter&option=deconnexion">Déconnexion</a>
</div>

<div class="main">
  <p></p>
  <p></p>
</div>



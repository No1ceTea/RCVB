<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <link rel="stylesheet" href="styles/style.css">

    <!-- Pour les icons (fb, yt) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- autocomplétion ville et cp --> 
    <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css"> -->

    <!-- Bootstrap Date-Picker Plugin -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    
    


    <title>Design rcvb</title>
  </head>
  <body>


    <style type="text/css">
  .dropdown-submenu{
    position: relative;
}
.dropdown-submenu a::after{
    transform: rotate(-90deg);
    position: absolute;
    right: 3px;
    top: 40%;
}

.dropdown-submenu:hover .dropdown-menu, .dropdown-submenu:focus .dropdown-menu{
    display: flex;
    flex-direction: column;
    position: absolute ;
    margin-top: -30px;
    left: 100%;
}
@media (max-width: 992px) {
    .dropdown-menu{
        width: 50%;
    }
    .dropdown-menu .dropdown-submenu{
        width: auto;
    }
}
</style>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="images/logo1.png" class="img-fluid" alt="...">
    <a class="navbar-brand" href="index.php?action=accueil">RCVB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=accueil">Accueil</a>
        </li>
        <li class="nav-item">

          <?php
          
          $jour = date('j');

          switch ($jour) {
            case $jour == 4 :{
              echo '<a class="nav-link active" aria-current="page" href="https://clubs.misterugby.com/rcvb/" target="_blank"><span tooltip="La boutique fermera demain">Boutique</span></a>';
              break;
              }
            case $jour >= 1 && $jour < 6 :{
              echo '<a class="nav-link active" aria-current="page" href="https://clubs.misterugby.com/rcvb/" target="_blank">Boutique</a>';
              break;
              }
              case $jour >= 25 :{
                echo '<a class="nav-link active" Onclick="alerte();" aria-current="page" href="#"><span tooltip="La boutique sera bientôt ouverte (du 1 au 5)">Boutique</span></a>';
                break;
                }
            case $jour >= 6 :{
              echo '<a class="nav-link active" Onclick="alerte();" aria-current="page" href="#">Boutique</a>';
                break;
                }
            
              }
          ?>   
        </li>


         <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="index.php?action=categories&option=rugbyLoisir">Rugby Loisir</a></li>
          <li><a class="dropdown-item" href="index.php?action=categories&option=rugbyAdapte">Rugby Adapte</a></li>
          <li><a class="dropdown-item" href="index.php?action=categories&option=rugbyCancer">Rugby Cancer</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Ecole de rugby</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="index.php?action=categories&option=lutins">Lutins</a>
              <a class="dropdown-item" href="index.php?action=categories&option=miniPoussins">Minis poussins</a>
              <a class="dropdown-item" href="index.php?action=categories&option=poussins">Poussins</a>
              <a class="dropdown-item" href="index.php?action=categories&option=benjamins">Benjamins</a>
              <a class="dropdown-item" href="index.php?action=categories&option=minimes">Minimes</a>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Compétition junior</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="index.php?action=categories&option=cadets">Cadets</a>
              <a class="dropdown-item" href="index.php?action=categories&option=cadettes">Cadettes</a>
              <a class="dropdown-item" href="index.php?action=categories&option=juniors">Juniors</a>
            </ul>
          </li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Compétition sénior</a>
            <ul class="dropdown-menu">
              <a class="dropdown-item" href="index.php?action=categories&option=seniors">Séniors masculins</a>
              <a class="dropdown-item" href="index.php?action=categories&option=seniorsFem">Séniors féminines</a>
            </ul>
          </li>
        </ul>
      </li>
        
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Nos partenaires</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=histoire">Histoire du club</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=inscription&option=preInscription">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=contact">Contactez-nous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?action=connexion&option=connexion">Connexion</a>
        </li>
        <li class="nav-item">
          <a href="https://www.facebook.com/people/Rcvb-BleuNoir/100012242898893" class="fa fa-facebook" target="_blank"></a>
        </li>
        <li class="nav-item">
          <a href="https://www.youtube.com/channel/UCNgudBHMG72wxAjjk7Uz6Sg" class="fa fa-youtube" target="_blank"></a>
        </li>
      </ul>
    </div>
  </div>
</nav> 


















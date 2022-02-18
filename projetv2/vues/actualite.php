<?php
  session_start(); 
  include('../modele/connexionDB.php');
  error_reporting(0); //retirer les rapports d'erreurs
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  
  <link href="/dist/output.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  
  <title>Rugby Club Val de Bièvre - Accueil</title>

 </head>
 <body>

  <nav class="bg-gray-900">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">

        <div class="flex space-x-4">
          <!-- logo -->
          <div>
            <a href="../index.php" class="flex items-center py-5 px-2 text-gray-100 hover:text-blue-600">
              <div class="pr-2" >
                <i class="uil uil-football-ball"></i>
              </div>
            <span class="font-bold text-gray-100"> RCVB</span>
            </i>

            </a>
          </div>

          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
            <a href="../vues/actualite.php" class="py-5 px-3 text-gray-100 hover:text-blue-400">Actus</a>
            <a href="../vues/les-ecoles-de-rugby.php" class="py-5 px-3 text-gray-100 hover:text-blue-400">Les écoles de rugby</a>
            <a href="../vues/les-equipes.php" class="py-5 px-3 text-gray-100 hover:text-blue-400">Les équipes</a>
            <a href="../vues/contact.php" class="py-5 px-3 text-gray-100 hover:text-blue-400">Contact</a>
        

        <?php
        if(empty($_SESSION['autorisation'])){ // Si on ne détecte pas de session alors on verra les liens ci-dessous
        ?>
          <div class="hidden md:flex items-center space-x-1">
            <a href="vues/choixConnexion.php" class="py-5 px-3 text-gray-100">Connexion</a>
            <?php 
              $_SESSION["form"]="age";
            ?>
            <a href="vues/formInscription.php" class="py-2 px-3 bg-blue-700 hover:bg-blue-600 text-gray-100 hover:text-gray-900 rounded transition duration-300">Inscription</a>
          </div>

        <?php
          }else{ // Sinon s'il y a une session alors on verra les liens ci-dessous
        ?>

        <a href="modele/deconnexion.php" class="py-2 px-3 bg-blue-700 hover:bg-blue-600 text-gray-100 hover:text-gray-900 rounded transition duration-300">Déconnexion</a>
        <?php
        }
        if($_SESSION['autorisation']=="manager"){
        ?>
          <a href="vues/manager/modifProfilAdherent.php" class="py-5 px-3 text-gray-100">Modifier mon profil</a>
          <a href="vues/entraineur/gestionEntraineur.php" class="py-5 px-3 text-gray-100">Gerer les entraineurs</a>
          <a href="vues/responsable/gestionResponsable.php" class="py-5 px-3 text-gray-100">Gerer les responsables</a>
          <a href="vues/categorie/vueCategorie.php" class="py-5 px-3 text-gray-100">voir les catégories</a>
          <a href="vues/verifPaiement.php" class="py-5 px-3 text-gray-100">voir les paiements</a>

        <?php 
          }
          if($_SESSION['autorisation']=="entraineur"){
        ?>
      <a href="vues/entraineur/formMDPEntraineur.php" class="py-5 px-3 text-gray-100">Changer votre mot de passe</a>
      <a href="vues/entraineur/ModifProfil.php" class="py-5 px-3 text-gray-100">Modifier mon profil</a>


      <?php 
          }
        ?>


      <?php 
          if($_SESSION['autorisation']=="responsable"){
        ?>
      <a href="vues/responsable/formMDPResponsable.php" class="py-5 px-3 text-gray-100">Changer votre mot de passe</a>
      <a href="vues/responsable/ModifProfil.php" class="py-5 px-3 text-gray-100">Modifier mon profil</a>


      <?php 
          }
          if($_SESSION['autorisation']=="adherent"){
        ?>
      <a href="vues/adherent/formMDPAdherent.php" class="py-5 px-3 text-gray-100">Changer votre mot de passe</a>
      <a href="vues/adherent/ModifProfil.php" class="py-5 px-3 text-gray-100">Modifier mon profil</a>
      <a href="controller/test.php" class="py-5 px-3 text-gray-100">Générer un pdf d'inscription</a>

      <?php 
          }
        ?>
      </div>
    </div>
    <div class="md:hidden flex items-center">
          <button class="mobile-menu-button">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <div class="mobile-menu hidden md:hidden">
      <a href="#" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Actus</a>
      <a href="#" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Les écoles de rugby</a>
      <a href="#" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Les équipes</a>
      <a href="#" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Nos partenariats</a>
      <a href="#" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Contact</a>
      <a href="vues/choixConnexion.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Connexion</a>
      <a href="vues/formInscription.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Inscription</a>
      <a class="block py-2 px-4 text-gray-100 hover:text-blue-400"></a>


      <?php 
        if($_SESSION['autorisation']=="adherent"){
      ?>
      <a href="vues/adherent/formMDPAdherent.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Changer votre mot de passe</a>
      <a href="vues/adherent/ModifProfil.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Modifier mon profil</a>
      <a href="controller/test.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Générer un pdf d'inscription</a>
      <a class="block py-2 px-4 text-gray-100 hover:text-blue-400"></a>      
      <?php 
        }
      ?>

        <?php
          if($_SESSION['autorisation']=="manager"){
        ?>
          <a href="vues/manager/modifProfilAdherent.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Modifier mon profil</a>
          <a href="vues/entraineur/gestionEntraineur.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Gerer les entraineurs</a>
          <a href="vues/responsable/gestionResponsable.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Gerer les responsables</a>
          <a href="vues/categorie/vueCategorie.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">voir les catégories</a>
          <a href="vues/verifPaiement.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">voir les paiements</a>

        <?php 
          }
          if($_SESSION['autorisation']=="entraineur"){
        ?>
      <a href="vues/entraineur/formMDPEntraineur.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Changer votre mot de passe</a>
      <a href="vues/entraineur/ModifProfil.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Modifier mon profil</a>


      <?php 
          }
        ?>


      <?php 
          if($_SESSION['autorisation']=="responsable"){
        ?>
      <a href="vues/responsable/formMDPResponsable.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Changer votre mot de passe</a>
      <a href="vues/responsable/ModifProfil.php" class="block py-2 px-4 text-gray-100 hover:text-blue-400">Modifier mon profil</a>


      <?php 
          }
      ?>




    </div>

    <script type="text/javascript">
      // grab everything we need
      const btn = document.querySelector("button.mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");

      // add event listeners
      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });  

    </script>
    </nav>


<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-12">
      <div class="p-12 md:w-1/2 flex flex-col items-start">
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">inauguration tribune André Boniface</h2>
        <p class="leading-relaxed mb-8">Nous étions nombreux et heureux ce dimanche 19 Janvier pour l'inauguration de notre tribune André Boniface.
        Bertrand notre président avait introduit cette cérémonie par un très beau discours, et à travers cet article, je tiens à lui témoigner toute notre reconnaissance pour le travail accompli ces trois dernières années : Fusion Administrative du RCVB (et mise en sommeil de ses trois associations historiques), créations d'équipes nous permettant de faire de notre devise un leitmotiv, organisation de notre 1er tournoi Chanka,
        pérennisation et revalorisation de notre salarié Edouard Normand, etc... Par ailleurs, et une nouvelle fois, je remercie l'intégralité de la famille Corneille et Babeth pour leur fidèle soutien et leur gentillesse. Elles ont œuvré énormément pour que ce soit une grande et belle fête du rugby.
        Après avoir lu le courrier d'André Boniface, Edouard laissa la parole à M. le Maire, qui rappela à nouveau les enjeux du mouvement associatif et de cette tribune pour notre club. Merci à notre partenaire institutionnel privilégié : Villejuif.
        Nous remercions enfin tous les adhérents, joueurs, dirigeants, et les anciens présents ce dimanche pour cette belle journée, et insistons sur la présence de nos plus jeunes de l'école de rugby qui garderont des souvenirs de ce grand moment pour notre club. Pour la petite histoire, c'est Mao et Tophe, nos anciens du club qui ont dévoilé la plaque et coupé le ruban. Merci à tous.</p>
        <a class="inline-flex items-center">
          <img alt="blog" src="https://dummyimage.com/104x104" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">Coach Sportif</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">Manager</span>
          </span>
        </a>
      </div>
      <div class="p-12 md:w-1/2 flex flex-col items-start">
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Mise à jour du site !</h2>
        <p class="leading-relaxed mb-8">C'est l'heure de la V2! Nous vous proposons une toute nouvelle interface pour plus de confort visuel ainsi que des nouvelles fonctionnalités.</p>
        <a class="inline-flex items-center">
          <img alt="blog" src="https://dummyimage.com/103x103" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">Ronan</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">Developer</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>



    <footer class="text-gray-600 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <span class="ml-3 text-xl">RCVB</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 RCVB —
          <a href="#" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Ronan</a>
          <a href="https://github.com/No1ceTea" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Thai</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-500" href="https://www.facebook.com/people/Rcvb-BleuNoir/100012242898893/">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
        </span>
      </div>
    </footer>
  



 </body>
</html>
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
            <a href="../vues/partenaire.php" class="py-5 px-3 text-gray-100 hover:text-blue-400">Nos partenariats</a>
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


    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=45%20Av.%20Carnot,%20Cachan,%20France&t=&z=13&ie=UTF8&iwloc=&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADRESSE</h2>
                <p class="mt-1">45 Av. Carnot, 94230 Cachan</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                <p class="leading-relaxed">06 82 82 70 31</p>
                </div>
            </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contactez-nous !</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Pour une prise de contact rapide, obtenir des infos... Contactez-nous via ce formulaire.</p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
                <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Adresse mail</label>
                <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Envoyer</button>
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
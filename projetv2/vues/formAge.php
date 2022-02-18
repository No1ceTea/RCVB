<?php
  session_start(); 
  include('../modele/connexionDB.php');
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

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <h2 class="sm:text-3xl text-2xl text-gray-900 font-medium title-font mb-2 md:w-2/5">Pour vous inscrire, vous devez premièrement renseigner votre âge</h2>
        <div class="md:w-3/5 md:pl-6">
          <p class="leading-relaxed text-base">Avez vous plus de 18 ans ?</p>
          <div class="flex md:mt-4 mt-6">
            <form method="post" action="formInscription.php">
              <fieldset>
                <div class="flex items-center mb-4">
                  <input type="radio" name="rep" value="1" required class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1"> 
                  <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-800">
                    OUI
                  </label>
                </div>
                <div class="flex items-center mb-4">
                  <input type="radio" name="rep" value="0" required class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1">
                  <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-800">
                    NON
                  </label>
                </div>
              </fieldset>
              <button type="submit" name="choixAge" class="inline-flex text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </section>
 </body>
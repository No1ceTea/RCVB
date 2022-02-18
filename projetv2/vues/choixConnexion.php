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
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Veuillez choisir votre mode de connexion ... </h1>
                <form method="post" action="formConnexion.php">
                    <select name="selectConnexion" id="selectConnexion">
                        <option name="choixC" value="adherent">adherent</option>
                        <option name="choixC" value="entraineur">entraineur</option>
                        <option name="choixC" value="responsable">responsable</option>
                        <option name="choixC" value="manager">manager</option>
                    </select>
                    <button class="flex-shrink-0 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-10 sm:mt-0 type="submit" name="choixConnexion">Envoyer</button>
                </form>
            </div>
        </section>
    </body>

<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD


  $res=$DB->query("SELECT * from entraineurs");

  ?>
  <a href="ajouterEntraineur.php">ajouter un entraineur</a>
  <?php


  while($entrainuer = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $entrainuer->nom ?></h5>
                  <p class='card-text'> <?php echo $entrainuer->prenom ?></p>
                  
                  <a id='mywish' class='btn btn-danger' href='../../controller/entraineur/supprimer2Entraineur.php?supp=<?php echo $entrainuer->idEntrn ;?>' onClick='return confirm("Voulez vous vraiment supprimer cet entraineur?")'>supprimer</a>
              </div>
          </div>
          <br>

<?php
  } // $produit->idEntrn
?> 








<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD


  $res=$DB->query("SELECT * from categorie");


  ?>
  <a href="ajouterCategorie.php">ajouter une catégorie</a><br><br><br><br>
  <?php



while($categorie = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $categorie->nomCat ?></h5>

                  <a id='mywish' class='btn btn-danger' href='../../controller/categorie/supprimer2Categorie.php?supp=<?php echo $categorie->idCat ;?>' onClick='return confirm("Voulez vous vraiment supprimer cet entraineur?")'>supprimer cette catégorie</a>
                  <br>
                  <a id='mywish' class='btn btn-danger' href='adherentCategorie.php?select=<?php echo $categorie->idCat ;?>'>Voir les adhérents de cette catégorie</a>
                </div>
          </div>
          <br><br>

<?php
  } // $produit->idEntrn
?> 
<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

  ?>
  <a href="ajouterResponsable.php">ajouter un responsable</a>
  <?php

  $res=$DB->query("SELECT * from responsable");

  while($responsable = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $responsable->nom ?></h5>
                  <p class='card-text'> <?php echo $responsable->prenom ?></p>
                  <a id='mywish' class='btn btn-danger' href='../../controller/responsable/supprimer2Responsable.php?supp=<?php echo $responsable->idResp ;?>' onClick='return confirm("Voulez vous vraiment supprimer ce responsable?")'>supprimer</a>
              </div>
          </div>
          <br>

<?php
  }
?>
<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

  ?>
  <a href="ajouterCompetition.php">Ajouter une compétition</a>
  <?php

  $res=$DB->query("SELECT * from competition");

  while($competition = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $competition->nom ?></h5>
                  <p class='card-text'> <?php echo $competition->date ?></p>
                  <p class='card-text'> <?php echo $competition->heure ?></p>
                  <p class='card-text'> <?php echo $competition->idCat ?></p>
                  <a id='mywish' class='btn btn-danger' href='../../controller/competition/supprimer2Competition.php?supp=<?php echo $competition->id ;?>' onClick='return confirm("Voulez vous vraiment supprimer ce responsable?")'>Supprimer</a>
              </div>
          </div>
          <br>

<?php
  }
?>
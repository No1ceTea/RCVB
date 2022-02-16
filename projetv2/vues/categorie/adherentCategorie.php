<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

  $select=$_GET["select"] ;
  $res=$DB->query("select * from adherents WHERE idCat='$select'");

  while($adherent = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $adherent->nom ?></h5>
                  <h5 class='card-title'><?php echo $adherent->prenom ?></h5>

                  <a id='mywish' class='btn btn-danger' href='changerCatAdherent.php?idAdh=<?php echo $adherent->idAdh ;?>&select=<?php echo $select ;?>'>changement de catégorie</a>
                </div>
          </div>
          <br>
<?php
  }
?>
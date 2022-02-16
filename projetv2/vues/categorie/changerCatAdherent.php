<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  $idAdh=$_GET["idAdh"] ;
  $res=$DB->query("select idCat from categorie");
  while($categorie = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $categorie->idCat ?></h5>
                  <a id='mywish' class='btn btn-danger' href='../../controller/categorie/changerCat2Adherent.php?idcat=<?php echo $categorie->idCat ;?>&idAdh=<?php echo $idAdh ;?>' onClick='return confirm("Voulez vous vraiment changer cet adherent de catégorie?")'>changer la catégorie de l'adhérent</a>
                </div>
          </div>
          <br>
<?php
  }
?>
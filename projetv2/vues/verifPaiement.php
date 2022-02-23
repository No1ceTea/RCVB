<?php
  session_start();
  include('../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD
  error_reporting(0);
?>

<form method="post" action="../controller/choixPaiement.php">
  <p>Veuillez choisir l'état de paiement à afficher :</p>
  
    <input type="radio" id="valide" name="paiement" value="valide" checked>
    <label>valide</label>

    <input type="radio" id="enCours" name="paiement" value="enCours">
    <label> en cours</label>

    <input type="radio" id="non" name="paiement" value="non">
    <label>non</label>

    <input type="radio" id="definir" name="paiement" value="definir">
    <label>à définir</label>
  
    <button type="submit">Afficher</button>

</form>
<br><br>





<?php
  if(empty($_SESSION['afficherPaiement']=="")){
    $res=$DB->query("select * from adherents where reglement=''");
  }
  if($_SESSION['afficherPaiement']=="definir"){
    $res=$DB->query("select * from adherents where reglement=''");
  }
  else if($_SESSION['afficherPaiement']=="valide"){
    $res=$DB->query("select * from adherents where reglement='valide'");
  }
  else if($_SESSION['afficherPaiement']=="enCours"){
    $res=$DB->query("select * from adherents where reglement='enCours'");
  }
  else if($_SESSION['afficherPaiement']=="non"){
    $res=$DB->query("select * from adherents where reglement='non'");
  }
  

  while($adherent = $res->fetch(PDO::FETCH_OBJ))
  {
   
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $adherent->nom ?></h5>
                  <h5 class='card-title'><?php echo $adherent->prenom ?></h5>
                  <form method="post" action="../controller/changePaiement.php?idAdh=<?php echo $adherent->idAdh ?>">
                    <p>Veuillez choisir l'état du paiement :</p>
                    <div>
                      <input type="radio" id="valide" name="changerPaiement" value="valide" checked>
                      <label for="changer1">valide</label>

                      <input type="radio" id="enCours" name="changerPaiement" value="enCours">
                      <label for="changer2">en cours</label>

                      <input type="radio" id="non" name="changerPaiement" value="non">
                      <label for="changer3">non</label>
                    </div>
                    <div>
                      <button type="submit">changer la situation</button>
                    </div>
                  </form>
                </div>
          </div>
          <br>
<?php
  }
?>
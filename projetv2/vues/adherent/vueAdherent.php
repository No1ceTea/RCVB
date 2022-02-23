<?php
  session_start();
  include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD


  $res=$DB->query("SELECT * from adherents");





while($adherent = $res->fetch(PDO::FETCH_OBJ))
  {
   if($adherent->idCat==""){
   ?>
   <div class='card text-center' style='width: 15rem;'>
              <div class='card-body'>
                  <h5 class='card-title'><?php echo $adherent->nom ?></h5>
                  <h5 class='card-title'><?php echo $adherent->prenom ?></h5>
                  <form method="post" action="../../controller/adherent/changerCatAdherent.php?idAdh=<?php echo $adherent->idAdh ?>" enctype="multipart/form-data">
                    <select name="choixC" id="choixC">
                        <option name="choixC" value="RA">RA</option>
                        <option name="choixC" value="RC">RC</option>
                        <option name="choixC" value="RL">RL</option>
                        <option name="choixC" value="U6">U6</option>
                        <option name="choixC" value="U8">U8</option>
                        <option name="choixC" value="U10">U10</option>
                        <option name="choixC" value="U12">U12</option>
                        <option name="choixC" value="U14">U14</option>
                        <option name="choixC" value="U16">U16</option>
                        <option name="choixC" value="U18">U18</option>
                        <option name="choixC" value="U19">U19</option>
                        <option name="choixC" value="U20">U20</option>
                        <option name="choixC" value="U20F">U20F</option>
                    </select>
                  <button type="submit" name="choixC">Envoyer</button>
                </div>
          </div>
          <br><br>

<?php
   }
  }
?>
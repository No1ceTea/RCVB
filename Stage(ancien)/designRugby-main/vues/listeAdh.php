<link rel="stylesheet" href="styles/styleListAdh.css">

<center> <div class="container-md">
<table class="table table-dark table-striped">
  <thead>

    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Lieu de naissance</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone portable</th>
      <th scope="col">Telephone fixe</th>
      <th scope="col">Email</th>
      <th scope="col">Nationalité</th>
      <th scope="col">Numéro de Sécurité Social</th>
      <th scope="col">Pièce d'identité</th>
      <th scope="col">Photo </th>
      <th scope="col">Voir fiche  </th>
    </tr>
  </thead>


<?php

	foreach($lesLignes as $leAdh) {
		echo"<tr class='table-light'>
      		<td>".$leAdh['nom']."</td>
          <td>".$leAdh['prenom']."</td>
      		<td>".$leAdh['dateNaiss']."</td>
      		<td>".$leAdh['lieuNaiss']."</td>
      		<td>".$leAdh['adresse']." ".$leAdh['cp']." ".$leAdh['ville']."</td>
          <td>".$leAdh['telPortable']."</td>
          <td>".$leAdh['telDomicile']."</td>
          <td>".$leAdh['mail']."</td>
          <td>".$leAdh['nationalite']."</td>
          <td>".$leAdh['numSS']."</td>
          <td>".$leAdh['pieceIdentite']."</td>
          <td>".$leAdh['photo']."</td>
          <td><a href='index.php?action=' class='btn btn-primary'>Voir la fiche</a></td>
  			</tr>";
	}
?>


</table> 
</div>
</center>


<link rel="stylesheet" href="styles/styleCat.css">

<br><br>


<div class="container-sm" style="max-width: 600px; margin: 0 auto;">

  <form method="POST" action="index.php?action=inscription&option=recap" enctype="multipart/form-data" >

<div class="container">
  <div class="row">
  <div class="col-md-12">


<?php


  $conteur = 1;

  while ($conteur <= $_SESSION['choix']) {
    # code...


?>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><U>Participations </U> </h5> <br>
        <p class="card-text">


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <U>Participation à la vie du club :</U> Je souhaite participer aux différents déplacements de l’équipe, aux gouters </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="choix1<?php echo $conteur; ?>" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Oui
  </label>
<br>
  <input class="form-check-input" type="radio" name="choix1<?php echo $conteur; ?>" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Non
  </label>
</div>
  </div>


<hr>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <U>Encadrer les enfants au sein du club sur
ou en dehors du terrain : </U>  </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="choix2<?php echo $conteur; ?>" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Oui
  </label>
<br>
  <input class="form-check-input" type="radio" name="choix2<?php echo $conteur; ?>" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Non
  </label>
</div>
  </div>


<hr>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <U>Autorisation CNIL FFR : </U></label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="choix3<?php echo $conteur; ?>" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Oui
  </label>
<br>
  <input class="form-check-input" type="radio" name="choix3<?php echo $conteur; ?>" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Non
  </label>
</div>
  </div>


<hr>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <U>Autorisation de Sortie :</U>
J’autorise mon enfant à quitter le complexe sportif seul lors de la fin des séances et/ou
des rassemblements en compétition. </label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="choix4<?php echo $conteur; ?>" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Oui
  </label>
<br>
  <input class="form-check-input" type="radio" name="choix4<?php echo $conteur; ?>" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Non
  </label>
</div>
  </div>

  
<hr>



<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> <U>Droit à l'image :</U> dans le cadre de la loi informatique et liberté, j’autorise la diffusion d’images et de vidéos de mon enfant prises dans le cadre de son activité (site internet, calendrier, promotion du club) </label>
    <div class="form-check">
 <input class="form-check-input" type="radio" name="choix5<?php echo $conteur; ?>" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Non
  </label>
<br>
  <input class="form-check-input" type="radio" name="choix5<?php echo $conteur; ?>" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Oui
  </label>
  <br>
  <label for="exampleInputEmail1" class="form-label">Nom et prénom</label>
    <input type="text" name="nomPre<?php echo $conteur; ?>" class="form-control" id="exampleInputEmail1" >
    <br>
    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
    <label class="form-check-label" for="flexRadioDefault1">
    Signature (numerique) OBLIGATOIRE
  </label>
<br>
  
</div>
  </div>

      </div>
    </div>
  </div>
</div>

<br>
<!-- <button Onclick="return ConfirmDelete();"  type="submit" class="btn btn-primary">Valider</button> -->
</div>
</div>
</div>

</div>


<br><br><br>

























<div class="container-sm" style="max-width: 600px; margin: 0 auto;">


  <div class="container">
  <div class="row">
  <div class="col-md-12">


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><U>Charte du licencié 2020/2021 </U></h5> <br>
        <p class="card-text">

Prénom et Nom : <input type="text" id="fname" name="nomPrenom<?php echo $conteur; ?>" > <br>
<div align="right">
 À     <input type="text" id="fname" name="villeName<?php echo $conteur; ?>">       , le    <input type="date" id="fname" name="dateLic<?php echo $conteur; ?>">     . </div><br>
 Je, soussigné(e) <input type="text" id="fname" name="nomPersonne<?php echo $conteur; ?>">, licencié au RCVB (éducateur, joueur, dirigeant), adhère à la charte des joueurs du club.<br>
Cela signifie que pour la saison 2020-2021, je m’engage :<br><br>
<B><U>1/ dans le fonctionnement : </U></B><br>

• À être présent les jours d'entraînement et/ou de match, et à prévenir et justifier de mes
absences (téléphone, sms, mail...)<br>
• À arriver à l’heure à tous les rendez-vous <br>
• À avoir et prendre soin de toutes mes affaires avant, pendant, et après les séances
(protège-dents, maillot, short, manteau...) <br>
• À aider les coachs à sortir, rincer et ranger tout le matériel nécessaire à la pratique du
rugby (entrainement ou match) <br><br>

<B><U>2/ sur le terrain : </U></B><br>
• À ne pas avoir peur de me faire mal (« le rugby se pratique en sécurité ») <br>
• À disposer des 2 ingrédients magiques de l’apprentissage : la CONCENTRATION et
l’ENVIE <br>
• À apprendre à marquer et faire marquer des essais <br>
• À apprendre à plaquer et le faire <br>
• À connaitre et respecter les règles du jeu <br>
• À respecter ses coéquipiers, les adversaires, les arbitres et les dirigeants (code du
sportif) <br>
• À avoir un comportement loyal, généreux, combattif et fair-play sur et en dehors du
terrain (code du sportif) <br><br>
Signature du joueur : <br>
Signatures des parents :

      </div>
    </div>
  </div>
</div>

<br>
<!-- <button Onclick="return ConfirmDelete();"  type="submit" class="btn btn-primary">Valider</button> -->

 </p>
  </div>
  </div>
  </div>


  
</div>








<br><br><br>

































<div class="container-sm" style="max-width: 600px; margin: 0 auto;">


  <div class="container">
  <div class="row">
  <div class="col-md-12">


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><U>AUTORISATION DES SOINS EN CAS D'ACCIDENT </U></h5> <br>
        <p class="card-text">

Je, soussigné(e) <input type="text" id="fname" name="nombre<?php echo $conteur; ?>" placeholder="Nom et prénom"><br>

en cas d'accident de (Nom,Prénom du licencié) :<input type="text" id="fname" name="nomComplet<?php echo $conteur; ?>" placeholder="Nom,prénom du licencié" > <br><br>

autorise par la présente :<br>
− tout examen ou intervention chirurgicale qui serait nécessaire<br>
− le responsable de l’association, du Comité ou de la FFR :<br>
&nbsp;&nbsp;&nbsp;&nbsp;• à prendre toutes mesures utiles et notamment à demander son admission en établissement de soins<br>
&nbsp;&nbsp;&nbsp;&nbsp;• à reprendre l’enfant à sa sortie, uniquement en cas d’indisponibilité absolue des parents ou du représentant légal du mineur<br><br>

Fait à <input type="text" id="fname" name="ciudadName<?php echo $conteur; ?>">: Le <input type="date" id="fname" name="fecha<?php echo $conteur; ?>">:<br>


   <label class="form-check-label" for="flexRadioDefault1">
    Signature (numérique)OBLIGATOIRE &nbsp;&nbsp;&nbsp;
  </label> &nbsp;&nbsp;
  <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">

<br>

<hr>
<div align="center">
INFORMATIONS COMPLEMENTAIRES </div>
<U> <B>Coordonnées de la personne à joindre en cas d’accident :</B></U><br>
NOM : <input type="text" id="fname" name="nomAcc<?php echo $conteur; ?>"> <br><br>

Prénom : <input type="text" id="fname" name="prenomAcc<?php echo $conteur; ?>" > <br><br>
Qualité : <input type="text" id="fname" name="qualiteAcc<?php echo $conteur; ?>"> <br><br>
Téléphone (portable et fixe si possible) : <input type="number" id="fname" name="telephoneAcc<?php echo $conteur; ?>"> <br> <br>
<U> <B>Coordonnées du médecin traitant : </B></U> <br><br>
NOM et Prénom : <input type="text" id="fname" name="nomMed<?php echo $conteur; ?>"> <br><br>
Adresse : <input type="text" id="fname" name="adresseMed<?php echo $conteur; ?>"> <br><br>
Téléphone : <input type="number" id="fname" name="telephoneMed<?php echo $conteur; ?>">
 
 <br><br>

      </div>
    </div>
  </div>
</div>

<br>
<!-- <button Onclick="return ConfirmDelete();"  type="submit" class="btn btn-primary">Valider</button>
 -->
 </p>
  </div>
  </div>
  </div>


  
</div>


<br><br><br>

<?php
 $conteur++;
 echo '<br>';
 }

 ?>






















<div class="container-sm" style="max-width: 600px; margin: 0 auto;">


  <div class="container">
  <div class="row">
  <div class="col-md-12">


<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><U>OBLIGATION ET RECOMMANDATIONS 2020/2021 </U></h5> <br>
        <p class="card-text">

1. Respecter la charte du licencié remise lors de l’inscription. <br><br>
2. Marquer tous les vêtements, sportifs ou civils ; indispensable en cas d’oubli. Tous les ans, des vêtements ne retrouvent pas leur propriétaire.<br><br>
3. Eviter tout objet de valeur, bijou, porte-monnaie, smartphone ou console de jeux. Nous ne pourrons être tenus pour responsable de perte ou de vols.<br><br>
4. Les enfants doivent venir avec un sac de sport contenant tout le nécessaire pour se changer, se sécher, se laver, et se vêtir selon la météo pour attendre la fin du plateau ou leurs parents. Il n’est pas acceptable qu’un enfant reparte des complexes sportifs dans sa tenue de sport, crampons au pied, en particulier en hiver.<br><br>
5. Le parking n’est pas un lieu d’attente. Les parents doivent s’assurer que les enfants ont bien été pris en charge par un éducateur. Ils doivent également venir les chercher et les reprendre au club-house. Nous apprécions également de pouvoir discuter avec vous.<br><br>
6. Le club est engagé dans plusieurs compétitions départementales, régionales et nationales. En s’inscrivant au club, le joueur s’engage à honorer les convocations émises par le référent de chaque catégorie. A chaque manifestation, le référent de chaque catégorie fait un sondage pour pouvoir organiser les groupes le week-end, il convient de répondre à ce dernier, pour permettre la bonne organisation. Nous ne pourrons prendre les enfants que dans la mesure des places disponibles pour ces manifestations. En cas d'empêchement pour une manifestation, faites-le nous savoir rapidement.<br><br>
7. Les joueurs ne peuvent monter dans le bus avec des affaires sales et des chaussures à crampons. Les enfants sans change ne pourront pas être acceptés.<br><br>
8. Pour le plein épanouissement de votre enfant, merci de nous transmettre toute information nécessaire (relationnel, santé, ...), et en cas de souci, venez-nous en parler rapidement.<br><br>
9. N'hésitez pas à venir encourager votre enfant, tout en gardant en tête que, lors des matchs, vous participez à l’image du club, et à nous aider dans la mesure de vos possibilités (un petit peu est déjà un grand beaucoup).<br><br>
10. Respecter le règlement intérieur sous peine de sanctions disciplinaires.

      </div>
    </div>
  </div>
</div>

<br>
<button   type="submit" class="btn btn-primary">Suivant</button>
<!-- Onclick="return ConfirmDelete();" -->
 </p>
  </div>
  </div>
  </div>

</form>
  
</div>



<br><br><br><br>
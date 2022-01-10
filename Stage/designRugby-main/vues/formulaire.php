<!-- autocomplétion ville et cp -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.7.3/themes/base/jquery-ui.css">
<link rel="stylesheet" href="styles/styleCat.css">

<br><br>




<h1></h1>
    <center><h2 class="title">S'inscrire</h2></center>

    <br><br>

<div class="container-sm" style="max-width: 600px; margin: 0 auto;">
 
<form method="POST" action="index.php?action=inscription&option=suiteInscription" enctype="multipart/form-data">

<?php

$conteur = 1;

while ($conteur <= $choix) {
  # code...


?>

<div class="container">
  <div class="row">
  <div class="col-md-12">



<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> <U> Fiche de renseignement </U></h5>
        <p class="card-text">
  <div class="mb-3">
    <B><label for="exampleInputEmail1" class="form-label">Nom :</label></B>
    <input type="text" name="nom<?php echo$conteur; ?>" class="form-control" id="exampleInputEmail1" >

  </div>

  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Prenom (tous les prénoms de l’état civil) :</label></B>
    <input type="text" name="prenom<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <B><label for="date" class="form-label">Date de naissance :</label></B>
    <!-- <input type="date" name="dateNaiss" class="form-control" id="exampleInputPassword1"> -->
    <input class="form-control" id="date" name="dateNaiss<?php echo$conteur; ?>" placeholder="JJ/MM/AAAA" type="text"/>
     <!-- Date input -->
        <!-- <label class="control-label" for="date">Date de naissance</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/> -->
      
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Lieu et code postal de naissance :</label></B>
    <input type="text" name="lieuN<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Adresse :</label></B>
    <!-- <input type="text" name="adresse"  id="exampleInputPassword1"> -->
    <input name="adresse<?php echo$conteur; ?>" id="adresse" type="text" placeholder="Adresse" class="form-control">
  </div>

   <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Code Postal :</label></B>
     <!--<input type="text" name="cp"  id="exampleInputPassword1"> -->
    <input name="cp<?php echo$conteur; ?>" id="cp" type="text" placeholder="CP" class="form-control">
  </div>

  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Ville :</label></B>
    <!-- <input type="text" name="ville"  id="exampleInputPassword1"> -->
    <input name="ville<?php echo$conteur; ?>" id="ville" type="text" placeholder="Ville" class="form-control">
  </div>
  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Téléphone portable :</label></B>
    <input type="text" name="telPort<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Téléphone domicile:</label></B>
    <input type="text" name="telDom<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Email :</label></B>
    <input type="email" name="mail<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1" > <!-- oninvalid="setCustomValidity('entrez une adresse email valide!')" onchange="try{setCustomValidity('')}catch(e){}" required="" -->
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Nationalité :</label></B>
    <input type="text" name="nat<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Numéro de Sécurité Social :
    </label></B>
    <input type="text" name="numSS<?php echo$conteur; ?>" class="form-control" id="exampleInputPassword1">
  </div>


<div class="mb-3"> 
  <script type="text/javascript">
    function choixValue(){
      document.getElementById('showId').value=document.getElementById('value').value;
    }
  </script>
  <B><label name="trancheAge" for="exampleInputPassword1" class="form-label">Tranche d'âge :</label></B>
  <select id="value" class="form-select" aria-label="Default select example" onchange="choixValue();">
  <option selected>Choisir </option>
  <option value="U6 Lutins">2015-2017</option>
  <option value="U8 Minipoussins">2013-2014</option>
  <option value="U10 Poussins">2011-2012</option>
  <option value="U12 Benjamins">2009-2010</option>
  <option value="U14 Minimes">2007-2008</option>
  <option value="U16 Cadets">2005-2006</option>
  <option value="U18 Cadettes">2003-2005</option>
  <option value="U19 Juniors">2002-2004</option>
  <option value="U20 Séniors féminins ou masculins">1998-2000</option>
  <option value="R5, Five mixte">Joueurs nés en ou avant 2002</option>
  <option value="Rugby Adapté">Jeunes de 8 à 16 ans atteints d'un handicap mental</option>
  <option value="Rugby cancer">Joueurs atteints d'un cancer</option>
</select>
<br>
<B><label for="exampleInputPassword1" class="form-label">Catégorie (à préciser pour les catégories Rugby Loisir,Adapté et Cancer):</label></B>
    <input type='text' id='showId' name="categorie<?php echo$conteur; ?>" class="form-control"/>
 </div>


<B><label for="exampleInputPassword1" class="form-label">Carte Nationale d’Identité ou Passeport :</label></B>
 <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="pieceI<?php echo$conteur; ?>" accept="application/pdf">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Valider</button>
</div>

<br>
<B><label for="exampleInputPassword1" class="form-label">Photo numerique :</label></B>
 <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="photo<?php echo$conteur; ?>" accept="application/pdf">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Valider</button>
</div>

<br>
<B><label for="exampleInputPassword1" class="form-label">Autre(s) document(s) à télécharger :</label></B>
 <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="autreDoc<?php echo$conteur; ?>" accept="application/pdf">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Valider</button>
</div>
<br>


      
      


</p>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>

<?php
$conteur++;
echo '<br>';
}


?>









  
<br> <br> <br>

  <div class="container">
  <div class="row">
  <div class="col-md-12">

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> <U> Personne à contacter </U></h5>
        <p class="card-text">
  <div class="mb-3">
    <B><label for="exampleInputEmail1" class="form-label">Nom :</label></B>
    <input type="text" name="nomP" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Prenom :</label></B>
    <input type="text" name="prenomP" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Téléphone portable :</label></B>
    <input type="text" name="telPortP" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Téléphone domicile:</label></B>
    <input type="text" name="telDomP" class="form-control" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
    <B><label for="exampleInputPassword1" class="form-label">Lien de parenté :</label></B>
    <input type="text" name="lienP" class="form-control" id="exampleInputPassword1">
  </div>

  <B><label for="exampleInputPassword1" class="form-label">Carte Nationale d’Identité ou Passeport (si l'adhérent est mineur):</label></B>
 <div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="pieceIP" accept="application/pdf">
  <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Valider</button>
</div>
<br>


</p>
      </div>
    </div>
  </div>
</div>
<br>
<button   type="submit" class="btn btn-primary">Suivant</button>
</div>
</div>
</div>

</form>
</div>

<br><br><br>



<br><br><br>
















<!-- autocomplétion ville et cp -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- POUR LA CARTE ADHERENT -->

<script>
$("#cp").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                var postcodes = [];
                response($.map(data.features, function (item) {
                    // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                    if ($.inArray(item.properties.postcode, postcodes) == -1) {
                        postcodes.push(item.properties.postcode);
                        return { label: item.properties.postcode + " - " + item.properties.city, 
                                 city: item.properties.city,
                                 value: item.properties.postcode
                        };
                    }
                }));
            }
        });
    },
    // On remplit aussi la ville
    select: function(event, ui) {
        $('#ville').val(ui.item.city);
    }
});
$("#ville").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?city="+$("input[name='ville']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                var cities = [];
                response($.map(data.features, function (item) {
                    // Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
                    if ($.inArray(item.properties.postcode, cities) == -1) {
                        cities.push(item.properties.postcode);
                        return { label: item.properties.postcode + " - " + item.properties.city, 
                                 postcode: item.properties.postcode,
                                 value: item.properties.city
                        };
                    }
                }));
            }
        });
    },
    // On remplit aussi le CP
    select: function(event, ui) {
        $('#cp').val(ui.item.postcode);
    }
});
$("#adresse").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cp']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                response($.map(data.features, function (item) {
                    return { label: item.properties.name, value: item.properties.name};
                }));
            }
        });
    }
});
</script>
















<!-- POUR LA CARTE PERSONNE A CONTACTER --> 


<script>
$("#cpP").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cpP']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                var postcodes = [];
                response($.map(data.features, function (item) {
                    // Ici on est obligé d'ajouter les CP dans un array pour ne pas avoir plusieurs fois le même
                    if ($.inArray(item.properties.postcode, postcodes) == -1) {
                        postcodes.push(item.properties.postcode);
                        return { label: item.properties.postcode + " - " + item.properties.city, 
                                 city: item.properties.city,
                                 value: item.properties.postcode
                        };
                    }
                }));
            }
        });
    },
    // On remplit aussi la ville
    select: function(event, ui) {
        $('#villeP').val(ui.item.city);
    }
});
$("#villeP").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?city="+$("input[name='villeP']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                var cities = [];
                response($.map(data.features, function (item) {
                    // Ici on est obligé d'ajouter les villes dans un array pour ne pas avoir plusieurs fois la même
                    if ($.inArray(item.properties.postcode, cities) == -1) {
                        cities.push(item.properties.postcode);
                        return { label: item.properties.postcode + " - " + item.properties.city, 
                                 postcode: item.properties.postcode,
                                 value: item.properties.city
                        };
                    }
                }));
            }
        });
    },
    // On remplit aussi le CP
    select: function(event, ui) {
        $('#cpP').val(ui.item.postcode);
    }
});
$("#adresseP").autocomplete({
    source: function (request, response) {
        $.ajax({
            url: "https://api-adresse.data.gouv.fr/search/?postcode="+$("input[name='cpP']").val(),
            data: { q: request.term },
            dataType: "json",
            success: function (data) {
                response($.map(data.features, function (item) {
                    return { label: item.properties.name, value: item.properties.name};
                }));
            }
        });
    }
});
</script>

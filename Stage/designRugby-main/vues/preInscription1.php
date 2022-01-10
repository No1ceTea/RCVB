<link rel="stylesheet" href="styles/styleCat.css">

 <br><br>
 <div class="container">
   <div class="card mb-3" style="max-width: 540px;">
   <div class="row g-0">
     <div class="col-md-4">
       <img src="images/logo1.png" class ="img-thumbnail" alt="...">
     </div>
     <div class="col-md-8">
       <div class="card-body">
         <B><U><h5 class="card-title">Tarifs d'inscription</h5></U></B>
         <p class="card-text">Ces tarifs comprennent la licence FFR, l’adhésion à l’association et l’assurance.
 Tests possibles. À l’inscription, vous recevrez short, chaussettes et maillot du club, et un protège-dents. <br><br>
  - Séniors Compétition : 260€ <br>
  - Juniors, Cadets, Ecole de Rugby: 200€ <br>
  - Cadettes, Séniors Feminines, Hommes et Femmes pour le R5 : 150€</p>
         
       </div>
     </div>
   </div>
 </div>
 </div>




 <br><br>



 <div class="container-sm" style="max-width: 600px; margin: 0 auto;">

      
 <form method="POST" action="index.php?action=inscription&option=inscrire">



    <div class="row row-cols-1 row-cols-md-2 g-4">
       <div class="col">
       <div class="card">

     <h4> <u> Combien d'enfants voulez vous inscrire ? </u> </h4>
 			
          <br>
       
          <label for=""  class="form-label">Entrez le nombre d´enfant(s)</label>
             <select name="choix" class="form-select" aria-label="Default select example">
                 <option selected>Choisir </option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                 <option value="7">7</option>
                 <option value="8">8</option>
                 <option value="9">9</option>
                 <option value="10">10</option>
  
             </select>
       
       </div>
       <br>

       <div class="card">

     <h4> <u> Entrez le mail de la personne a contacter déja inscrit </u> </h4>
 			
          <br>
       
             <label for=""  class="form-label">Entrez le mail ci-dessous</label>
             <input type="mail"  name="mailP"> 
       
       </div>
       <br>


          <input type="submit" value="Valider" name="valider">
          <input type="reset" value="Annuler" name="annuler"> 
       </p>
       </div>
       </div>
       

 </form>

 </div>

 <br><br><br><br> 
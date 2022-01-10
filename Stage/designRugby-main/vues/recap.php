<br><br>



 <?php


 switch ($_SESSION['choix']) {
 	case $_SESSION['choix'] == 1:?>
 		<section>
 			<div class="row">
   				<div class="col-sm-2">
     				<div class="card">
       					<div class="card-body">
 	  						<center><h2> Adherent </h2></center>
 	  						<hr>
 		 					 <br>
     						<h4 class="card-title"><?php echo$_SESSION['nom1']; ?></h4>
     						<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['dateNaiss1']; ?></h6>
     						<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['categorie1']; ?></h6>
     						<hr>
 							<h6 class="card-subtitle mb-2 text-muted">Prix: </h6>
       					</div>
     				</div>
   				</div>
   				<br>
   				<div class="col-sm-2">
     				<div class="card">
       					<div class="card-body">
 	  						<center><h2> Parent </h2></center>
 		 				 	<br>
 		 				 	<hr>
     						<h4 class="card-title"><?php echo$_SESSION['nomP']; ?> <?php echo$_SESSION['prenomP']; ?></h4>
     						<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['telPortP']; ?></h6>
     						<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['mailP']; ?></h6>
 							<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['villeP']; ?></h6>
       					</div>
     				</div>
   				</div>
 			</div>
 		</section>
 		<br>
 		<?php
 		break;

 		case $_SESSION['choix'] == 2:?>
 			<section>
 				<div class="row">
 					  <div class="col-sm-2">
 						<div class="card">
 							  <div class="card-body">
 								  <center><h2> Adherent </h2></center>
 								  <br>
 								  <hr>
 								<h4 class="card-title"><?php echo$_SESSION['nom1']; ?></h4>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['dateNaiss1']; ?></h6>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['categorie1']; ?></h6>
 								<hr>
 								<h6 class="card-subtitle mb-2 text-muted">Prix: </h6>
 							  </div>
 						</div>
 					  </div>
 					  <br>
 					  <div class="col-sm-2">
 						<div class="card">
 							  <div class="card-body">
 								  <center><h2> Adherent </h2></center>
 								  <br>
 								  <hr>
 								<h4 class="card-title"><?php echo$_SESSION['nom2']; ?></h4>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['dateNaiss2']; ?></h6>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['categorie2']; ?></h6>
 								<hr>
 								<h6 class="card-subtitle mb-2 text-muted">Prix: </h6>
 							  </div>
 						</div>
 					  </div>
 					  <br>
 					  <div class="col-sm-2">
 						<div class="card">
 							  <div class="card-body">
 								  <center><h2> Parent </h2></center>
 								  <br>
 								  <hr>
 								<h4 class="card-title"><?php echo$_SESSION['nomP']; ?> <?php echo$_SESSION['prenomP']; ?></h4>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['telPortP']; ?></h6>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['mailP']; ?></h6>
 								<h6 class="card-subtitle mb-2 text-muted"><?php echo$_SESSION['villeP']; ?></h6>
 							  </div>
 						</div>
 					  </div>
 				</div>
 			</section>
 			<br>
 			<?php
 			break;

 ?>









 <?php


 default:
 # code...
 break;
 }

 ?>
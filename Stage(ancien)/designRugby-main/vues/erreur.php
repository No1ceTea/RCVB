<br><br>
<div class="container">
<div class ="erreur alert alert-danger" role="alert">
<ul>
<?php 
foreach($_REQUEST['erreurs'] as $erreur)
	{
      echo "<li>$erreur</li>";
	}
?>

</ul></div>
</div>
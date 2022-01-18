<link rel="stylesheet" href="styles/styleConnexion.css">
<br><br>

<div class="container-sm">
  <form action="index.php?action=seConnecter&option=seConnecter" method="POST">
  <div class="imgcontainer">
    <img src="images/loginIcon.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

  
    <label for="identifiant"><b>Identifiant</b></label>
    <input type="text" class="form-control" placeholder="Entrez votre identifiant" name="login" id="login" required >
  

    <label for="mdp"><b>Mot de passe </b></label>
    <input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="mdp" id="mdp" required>
        
    <button type="submit" name="valider" >S'authentifier</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="mdp"><a href="index.php?action=seConnecter&option=mdpOublie">Mot de passe oublié ?</a></span>
  </div>
</form>
</div>

<br><br><br><br>
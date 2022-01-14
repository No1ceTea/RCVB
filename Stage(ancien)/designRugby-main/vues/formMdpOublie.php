 <link rel="stylesheet" href="styles/styleMdp.css">

 
 <br>
<!-- <div class="container-sm" style=" max-width: 650px; margin: 0 auto;">

<form action="index.php?action=seConnecter&option=mdpOublie" method="POST">

  <div class="container">
  <div class="row">
  <div class="col-md-12">

    
      <div class="row row-cols-1 row-cols-md-2 g-4">
         <div class="col">
            <div class="col">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Mot de passe oublié ?</h2>
                          <p>Vous pouvez le réinitialiser ici.</p>
                            <div class="panel-body">
                              
                              <form class="form">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      
                                      <span class="input-group-text" id="basic-addon1">@</span>
                                      
                                      <input id="emailInput" placeholder="adresse email" class="form-control" type="email" oninvalid="setCustomValidity('entrez une adresse email valide!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Reinitialiser" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
  </div>
  </div>

</form>
</div> -->





















 <!--Pour changer le mdp apres avoir cliquer sur le lien du mail recu -->
<!--<section class="mb-5 text-center">

  <p>Set a new password</p>

  <form action="#!">

    <div class="md-form md-outline">
      <input type="password" id="newPass" class="form-control">
      <label data-error="wrong" data-success="right" for="newPass">New password</label>
    </div>

    <div class="md-form md-outline">
      <input type="password" id="newPassConfirm" class="form-control">
      <label data-error="wrong" data-success="right" for="newPassConfirm">Confirm password</label>
    </div>

    <button type="submit" class="btn btn-primary mb-4">Change password</button>

  </form>

  <div class="d-flex justify-content-between align-items-center mb-2">

    <u><a href="https://mdbootstrap.com/docs/jquery/admin/auth/login/">Back to Log In</a></u>

    <u><a href="https://mdbootstrap.com/docs/jquery/admin/auth/register/">Register</a></u>

  </div>

</section>-->
<!--Section: Block Content--> 

















<h4 class="title-element">Récupération de mot de passe</h4>
<?php if($section == 'code') { ?>
Un code de vérification vous a été envoyé par mail: <?= $_SESSION['recup_mail'] ?>
<br/>
<form method="post">
   <input type="text" placeholder="Code de vérification" name="verif_code"/><br/>
   <input type="submit" value="Valider" name="verif_submit"/>
</form>
<?php } elseif($section == "changemdp") { ?>
Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?>
<form method="post">
   <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
   <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
   <input type="submit" value="Valider" name="change_submit"/>
</form>
<?php } else { ?>
<form method="post">
   <input type="email" placeholder="Votre adresse mail" name="recup_mail"/><br/>
   <input type="submit" value="Valider" name="recup_submit"/>
</form>
<?php } ?>
<?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } else { echo ""; } ?>





<br><br>




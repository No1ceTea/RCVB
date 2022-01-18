<link rel="stylesheet" href="styles/styleContact.css">

<br>
<div class="container" style="max-width: 600px; margin: 0 auto;">
  <form method="POST" action="controleurs/mail.php">
  
    <label for="fname">Nom</label>
    <input type="text" id="fname" name="nom" placeholder="Votre nom...">

    <label for="lname">Prénom</label>
    <input type="text" id="lname" name="prenom" placeholder="Votre prénom...">
    
    <label for="email" class="">Email</label>
    <input type="text" id="email" name="email" class="form-control" placeholder=" Votre email...">
    
    <fieldset>
    <label for="fobjet" class="">Objet</label>
    <input type="text" id="disabledTextInput" name="objet" class="form-control" placeholder=" L'objet de votre message...">
    </fieldset>

    
    <label for=message>Message</label>
    <textarea id="message" name="message" placeholder="Écrivez quelque chose..." style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
</div>

<br><br><br><br>



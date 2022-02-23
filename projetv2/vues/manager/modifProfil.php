<?php
    session_start();
    include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

    $id=$_SESSION['id'];
    $res=$DB->query("select * from manager WHERE idManager='$id'");
    $res = $res->fetch();
?>
    <div>Inscription de l'adhérent</div>
    <form method="post" action="../../controller/modifProfil.php" enctype="multipart/form-data">
        <input type="text"  value=<?php echo $res['nom'];?> name="nom" readonly="readonly">
        <input type="text" value=<?php echo $res['prenom'];?> name="prenom" readonly="readonly">
        <input type="email" value=<?php echo $res['mail'];?> name="mail" onFocus="this.value='';" required>
        <input type="tel" value="<?php echo $res['telPortable'];?>" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" onFocus="this.value='';" name="telephone" required> 

        <button type="submit" name="modifProfil">Envoyer</button>
    </form>
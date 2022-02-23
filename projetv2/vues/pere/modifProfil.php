<?php
    session_start();
    include('../../modele/connexionDB.php'); // Fichier PHP contenant la connexion à votre BDD

    $id=$_SESSION['id'];
    $res=$DB->query("select * from pere WHERE idPere='$id'");
    $res = $res->fetch();
?>
    <div>Modification de votre profil</div>
    <form method="post" action="../../controller/modifProfil.php" enctype="multipart/form-data">
        <input type="text"  value=<?php echo $res['nom'];?> name="nom" readonly="readonly">
        <input type="text" value=<?php echo $res['prenom'];?> name="prenom" readonly="readonly">
        <input type="email" value=<?php echo $res['mail'];?> name="mail" onFocus="this.value='';" required>
        <input type="text" value=<?php echo $res['adresse'];?> name="adresse" onFocus="this.value='';" required>
        <input type="text" value=<?php echo $res['ville'];?> name="ville" onFocus="this.value='';" required>
        <input type="text" value=<?php echo $res['cp'];?> name="cp" onFocus="this.value='';" pattern="[0-9]{5}" required>
        <input type="tel" value="<?php echo $res['telPortable'];?>" onFocus="this.value='';" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telPortable" required> 
        <input type="tel" value="<?php echo $res['telDomicile'];?>" onFocus="this.value='';" pattern="[0]{1}[0-9]{1} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" name="telDomicile" required> 
        <input type="text" value=<?php echo $res['entreprise'];?> onFocus="this.value='';" name="entreprise" required>
        <input type="text" value=<?php echo $res['profession'];?> onFocus="this.value='';" name="profession" required>

        <button type="submit" name="modifProfil">Envoyer</button>
    </form>
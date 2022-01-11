<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application Rugby
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoRugby qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoRugby{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=rcvb';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoRugby=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoRugby::$monPdo = new PDO(PdoRugby::$serveur.';'.PdoRugby::$bdd, PdoRugby::$user, PdoRugby::$mdp); 
		PdoRugby::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoRugby::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoRugby = PdoRugby::getPdoRugby();
 
 * @return l'unique objet de la classe PdoRugby
 */
	public  static function getPdoRugby(){
		if(PdoRugby::$monPdoRugby==null){
			PdoRugby::$monPdoRugby= new PdoRugby();
		}
		return PdoRugby::$monPdoRugby;  
    }
    
    // fonction qui va permettre d'inscrire de nouveaux adhérents

    // essai1 
    /*public function inscrire($nom, $prenom, $dateNaiss, $lieuN, $adresse, $ville,$cp, $telPort, $telDom, $mail, $nat, $numSS){
		$req = "insert into adherents (nom, prenom, dateNaiss, lieuNaiss, adresse, ville, cp, telPortable, telDomicile, mail, nationalite, numSS) 
        values ('$nom', '$prenom', '$dateNaiss', '$lieuN', '$adresse', '$ville','$cp', '$telPort', '$telDom','$mail','$nat', '$numSS')"; 

        PdoRugby::$monPdo->exec($req);
	}*/

	//essai2
	public function inscrire($nom, $prenom, $dateNaiss, $lieuN, $adresse, $ville,$cp, $telPort, $telDom, $mail, $nat, $numSS, $id, $pieceI, $photo){
		$req = "insert into adherents (nom, prenom, dateNaiss, lieuNaiss, adresse, ville, cp, telPortable, telDomicile, mail, nationalite, numSS, idP, pieceIdentite, photo) values ('$nom', '$prenom', '$dateNaiss', '$lieuN', '$adresse', '$ville','$cp', '$telPort', '$telDom','$mail','$nat', '$numSS', '$id', '$pieceI', '$photo')"; 

    
        PdoRugby::$monPdo->exec($req);
	}


	
	//va permettre de recuperer l'id de l'adherent
	public function getIdAdh($dateNaiss, $telPort){
		$req = "select idAdh FROM adherents WHERE dateNaiss='$dateNaiss' AND telPortable='$telPort'";
		$res = PdoRugby::$monPdo->query($req);
		
		$lesLignes = $res->fetchAll();
		
		return $lesLignes;
	}

	// fonction qui va permettre de recuperer les données des parents 

	//essai1 
	/*public function inscrireParent($nom, $prenom, $adresse, $profession, $ville, $cp, $telPort, $telDom, $mail,$lienP, $idAdh){
		$req = "insert into parents (nom, prenom, adresse, profession, ville, cp, telPor, telDom, mail, lienParente, idAdh) 
        values ('$nom', '$prenom', '$adresse', '$profession', '$ville','$cp', '$telPort', '$telDom', '$mail', '$lienP', '$idAdh')"; 

        PdoRugby::$monPdo->exec($req);
	}*/

	//essai2
	public function getIdParent($mail, $telPort){
		$req = "select idParent FROM parents WHERE mail='$mail' AND telPor='$telPort'";
		$res = PdoRugby::$monPdo->query($req);
		
		$lesLignes = $res->fetchAll();
		
		return $lesLignes;
	}

	public function inscrireParent($nom, $prenom, $adresse, $profession, $ville, $cp, $telPort, $telDom, $mail, $lienP, $pieceIP){
		$req = "insert into parents (nom, prenom,  adresse, profession, ville, cp, telPor, telDom, mail, lienParente, pieceIdentiteP) 
        values ('$nom', '$prenom', '$adresse', '$profession', '$ville','$cp', '$telPort', '$telDom', '$mail', '$lienP', '$pieceIP')"; 

        PdoRugby::$monPdo->exec($req);
	}

	public function getInfosDirigeant($login, $mdp){
		$req = "select idDirigeant, nom, prenom FROM dirigeant 
		WHERE login='$login' AND mdp='$mdp' ";
		$res = PdoRugby::$monPdo->query($req);
		$ligne = $res->fetch();
		return $ligne;
	}


	public function getIdPersonneAContacter($mail){
 		$req = "select idParent, nom, prenom, ville, mail, telPor FROM parents WHERE mail='$mail'";
 		$res = PdoRugby::$monPdo->query($req);

 		$lesLignes = $res->fetchAll();

 		return $lesLignes;
 	}

 	// Pour la partie connexion : avoir la liste des adherents par categorie
 	public function getInfosAdh(){

 		$adherents = array();
 		$req = " select nom, prenom, dateNaiss, lieuNaiss, adresse, cp, ville, telPortable, telDomicile, mail, nationalite, numSS, pieceIdentite, photo from adherents";
 		$res =  PdoRugby::$monPdo->query($req);

 		$lesLignes = $res->fetchAll();

 		return $lesLignes;
 		/*SELECT * 
FROM adherents 
WHERE idAdh in (SELECT idAdh, idCat, nomCat 
                FROM inscrits, categorie
                where inscrits.idCat = categorie.numCat
                and categorie.nomCat = 'poussins')*/
 	}


 	public function majInfosPerso(){
 		$req1 = "update dirigeant set email = '$email' where idDirigeant = '$idDirigeant' ";
		PdoRugby::$monPdo->exec($req1);

		$req2 = "update dirigeant set telPortable = '$telPortable' where idDirigeant = '$idDirigeant' ";
		PdoRugby::$monPdo->exec($req2);
 	}

                                        

}

?>
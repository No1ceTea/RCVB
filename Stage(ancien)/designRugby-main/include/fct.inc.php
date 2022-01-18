<?php

function estConnecte(){
   return isset($_SESSION['idVisiteur']);
 }

function connecter($id,$nom,$prenom){
	$_SESSION['idVisiteur']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
}

function ajouterErreur($msg){
    if (! isset($_REQUEST['erreurs'])){
       $_REQUEST['erreurs']=array();
     } 
    $_REQUEST['erreurs'][]=$msg;
 }

 /**
 * Transforme une date au format français jj/mm/aaaa vers le format anglais aaaa-mm-jj
 
 * @param $madate au format  jj/mm/aaaa
 * @return la date au format anglais aaaa-mm-jj
*/
function dateFrancaisVersAnglais($maDate){
	@list($jour,$mois,$annee) = explode('/',$maDate);
	return date('Y-m-d',mktime(0,0,0,$mois,$jour,$annee));
}
/**
 * Transforme une date au format format anglais aaaa-mm-jj vers le format français jj/mm/aaaa 
 
 * @param $madate au format  aaaa-mm-jj
 * @return la date au format format français jj/mm/aaaa
*/
function dateAnglaisVersFrancais($maDate){
   @list($annee,$mois,$jour)=explode('-',$maDate);
   $date="$jour"."/".$mois."/".$annee;
   return $date;
}

 
?>
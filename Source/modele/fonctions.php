<?php
require "config.php";

class Music{


	function connect()
	{
	try
	{
		$connect= new PDO('mysql:host='.HOTE.';dbname='.BDD , UTILISATEUR , MDP);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		echo "Problème de connexion à la BDD <br>". $e->getMessage() ;
	}
	return $connect;
	}

	function getLesCours()
		{

		// Déclaration d’un tableau
		$cours = array();

		$bdd = Music::connect();
		$sql="select * from professeur natural join seance join heure on heure.heureDebut = seance.idHeure";
		$req=$bdd->query($sql);

		$cours = $req->fetchAll();
		

		return ($cours);
		}
		
	function getInscrits()
	{	
		$inscrits = array();

		$bdd= Music::connect();
		$sql="select * from matiere join seance natural join inscrire natural join adherent on matiere.idMatiere = seance.idInstrument";
		$req=$bdd->query($sql);

		$inscrits = $req->fetchAll();

		return ($inscrits);
	}
	function inscrire($nom,$prenom,$tel,$seance)
	{	
		$bdd= Music::connect();

		$sql="insert into adherent(nomAdherent, prenomAdherent,telAdherent) values ('$nom','$prenom','$tel')";
		$res=$bdd->exec($sql);

		$adherent = array();

		$sql2="select idAdherent from adherent where nomAdherent='$nom' and prenomAdherent='$prenom'";
		$res2=$bdd->query($sql2);

		$adherent=$res2->fetchAll();

		foreach($adherent as $unAdh)
		{
			$idAd = $unAdh['idAdherent'];
		}
		
		
		$sql3="insert into inscrire(idAdherent,idSeance) values ('$idAd','$seance')";
		$res3=$bdd->exec($sql3);

	}	

	function supprimer($inscription){
		
		$bdd= Music::connect();

		$sql="delete from inscrire where idAdherent=".$inscription['idAdherent']." and idSeance=".$inscription['idSeance'];
		$res=$bdd->exec($sql);
	}
}
?>
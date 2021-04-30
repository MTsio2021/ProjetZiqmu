<?php
include("modele/fonctions.php");
if(!isset($_REQUEST['action']))
{
 $action = 'accueil';
}
else {
 $action = $_REQUEST['action'];
}
// vue qui crée l’en-tête de la page
if($action != "pdfInscription"){
    include("vues/sousvue/v_entete.php") ;
}

switch($action)
{
 case 'accueil':
 // vue qui crée le contenu de la page d’accueil
 include("vues/v_accueil.php");
 break;
 case 'cours':
 $lesCours = Music::getLesCours();
 include("vues/v_cours.php");
 break;
 case 'inscriptions':
 $lesInscrits = Music::getInscrits();
 include("vues/v_inscriptions.php");
 break;
 case'inscrire':
 include("vues/v_formulaireInscription.php");
 break;
 case 'validInscription':
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $seance=$_POST['cours'];
    Music::inscrire($nom,$prenom,$tel,$seance);
    include("vues/v_valideInscription.php");
 break;
 case 'pdfInscription':
    $lesInscriptions = Music::getInscrits();
    $num = $_REQUEST['numInscription'];
    $ligne = $lesInscriptions[$num];
    include("vues/pdf_inscription.php");
    creerPdfInscription($ligne);
     
 break;
 case 'supprimerInscription':
    $lesInscriptions = Music::getInscrits();
    $num = $_REQUEST['numInscription'];
    $ligne = $lesInscriptions[$num];
    include("vues/v_supprInscription.php");
    Music::supprimer($ligne);
 break;
}
// vue qui crée le pied de page
if($action != "pdfInscription"){
    include("vues/v_pied.php") ;
}
?>

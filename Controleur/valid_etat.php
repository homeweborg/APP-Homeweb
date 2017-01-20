<?php

session_start();
require("../Modele/connexionBDD.php");

$id_Utilisateur = $_SESSION['id'];
$nom_piece = $_GET['piece'];

$consigne_eau = 5;
$consigne_gaz = 5;
$consigne_elec = 5;
$consigne_porte = 5;

// ON VERIFIE l'ETAT DES CHECKBOXS

// EAU
if ( isset($_POST['eau']))
{
    $consigne_eau = $_POST['eau'];
}
else
{
    $consigne_eau = 0;
}

// GAZ
if ( isset($_POST['gaz']))
{
    $consigne_gaz = $_POST['gaz'];
}
else
{
    $consigne_gaz = 0;
}

// ELEC
if ( isset($_POST['elec']))
{
    $consigne_elec = $_POST['elec'];
}
else
{
    $consigne_elec = 0;
}

// PORTE
if ( isset($_POST['porte']))
{
    $consigne_porte = $_POST['porte'];
}
else
{
    $consigne_porte = 0;
}

// ON TRAITE LA DEMANDE

//EAU
$req = $db->prepare('UPDATE eau SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne_eau,
	'id_Utilisateur' => $id_Utilisateur
	));

//GAZ
$req = $db->prepare('UPDATE gaz SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne_gaz,
	'id_Utilisateur' => $id_Utilisateur
	));

//ELEC
$req = $db->prepare('UPDATE elec SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne_elec,
	'id_Utilisateur' => $id_Utilisateur
	));

//PORTE
$req = $db->prepare('UPDATE porte SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne_porte,
	'id_Utilisateur' => $id_Utilisateur
	));

header('Refresh:0 ; URL= ../Vues/etat.php');

?>
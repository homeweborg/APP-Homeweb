<?php

// Envoie les données de lumière à la bbd

session_start();
require("../Modele/connexionBDD.php");

$id_Utilisateur = $_SESSION['id'];
$nom_piece = $_GET['piece'];

if ( isset($_POST['box']))
{
    $consigne = $_POST['box'];
}
else
{
    $consigne = 0;
}

$req = $db->prepare('UPDATE pieces SET lumiere = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
$req->execute(array(
	'consigne' => $consigne,
	'id' => $id_Utilisateur,
	'Nom_piece' => $nom_piece
	));

header('Refresh:0 ; URL= ../Vues/etat.php');

?>
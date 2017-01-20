<?php

// Envoie les données de température à la bbd

session_start();
require("../Modele/connexionBDD.php");

$id_Utilisateur = $_SESSION['id'];
$nom_piece = $_GET['piece'];
$consigne = $_POST['range'];

$req = $db->prepare('UPDATE pieces SET consigne_temp = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
$req->execute(array(
	'consigne' => $consigne,
	'id' => $id_Utilisateur,
	'Nom_piece' => $nom_piece
	));

echo($id_Utilisateur);
echo($nom_piece);
echo($consigne);

header('Refresh:0 ; URL= ../Vues/etat.php');

?>
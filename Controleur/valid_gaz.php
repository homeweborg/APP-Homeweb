<?php

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

$req = $db->prepare('UPDATE gaz SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne,
	'id_Utilisateur' => $id_Utilisateur
	));

header('Refresh:0 ; URL= ../Vues/etat.php');

?>
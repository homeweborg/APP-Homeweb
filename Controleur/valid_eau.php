<?php

session_start();
require("../Modele/connexionBDD.php");
require("fonctions.php");

$id_Utilisateur = $_SESSION['id'];
$nom_piece = $_GET['piece'];

// On traite l'activation ou la désactivation de l'eau

if ( isset($_POST['box']))
{
    $consigne = $_POST['box'];
}
else
{
    $consigne = 0;
}

$req = $db->prepare('UPDATE eau SET etat = :consigne WHERE id = :id_Utilisateur');
$req->execute(array(
	'consigne' => $consigne,
	'id_Utilisateur' => $id_Utilisateur
	));

// On traite le changement de tarif

if (isset($_POST['Prix_eau']))
{
    
    $Prix_consigne = $_POST['Prix_eau'];

    $req = $db->prepare('UPDATE eau SET prix_eau = :consigne WHERE id = :id_Utilisateur');
    $req->execute(array(
        'consigne' => $Prix_consigne,
        'id_Utilisateur' => $id_Utilisateur
        ));
    
}

header('Refresh:0 ; URL= ../Vues/eau.php');

?>
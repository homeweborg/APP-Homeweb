<?php
    
    /* Gère l'ajout de pièce */
session_start();
require("../Modele/connexionBDD.php");

$nom = $_POST['nom'];
$objet = $_POST['objet'];
$demande = $_POST['demande'];
    
$ajout = $db->exec('INSERT INTO domisep_messagerie(nom,objet,demande) VALUES ("'.$nom.'","'.$objet.'","'.$demande.'")');

header('Refresh:0 ; URL= ../Vues/User/etat.php');

//on le signale sur la page 
echo "<script>window.alert('Demande envoyée')</script>" ;

?>
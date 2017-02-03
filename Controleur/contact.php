<?php
    
    /* Gère l'envoi d'un formulaire de contact pour un utilisateur connecté */
session_start();
require("../Modele/connexionBDD.php");

$nom = $_POST['nom'];
$objet = $_POST['objet'];
$demande = $_POST['demande'];
    
$ajout = $db->exec('INSERT INTO domisep_messagerie (mail,objet,demande) VALUES ("'.$nom.'","'.$objet.'","'.$demande.'")');

header('Refresh:0 ; URL= ../Vues/login.php?message=Demande envoy%C3%A9e');



?>
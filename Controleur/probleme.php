<?php
    
    /* Gère l'envoi d'un formulaire de contact pour un utilisateur connecté */
session_start();
require("../Modele/connexionBDD.php");

$capteur = $_POST['capteurD'];
$probleme = $_POST['probleme'];
$id = $_SESSION['id'];
    
$ajout = $db->exec('INSERT INTO domisep_probleme (capteur,probleme,id_user) VALUES ("'.$capteur.'","'.$probleme.'","'.$id.'")');

header('Refresh:0 ; URL= ../Vues/User/etat.php?message=Probl%C3%A8me signal%C3%A9.');
?>
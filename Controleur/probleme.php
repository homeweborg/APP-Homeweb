<?php
    
    /* Gère l'envoi d'un formulaire de contact pour un utilisateur connecté */
session_start();
require("../Modele/connexionBDD.php");

$capteur = $_POST['capteurD'];
$objet = $_POST['objet'];
$probleme = $_POST['probleme'];
$id = $_SESSION['id'];
    
$ajout = $db->exec('INSERT INTO domisep_probleme (capteur,objet,probleme,id_user) VALUES ("'.$capteur.'","'.$objet.'","'.$probleme.'","'.$id.'")');

header('Refresh:0 ; URL= ../Vues/User/etat.php');

//on le signale sur la page 
echo "<script>window.alert('Problème signalé')</script>" ;

?>
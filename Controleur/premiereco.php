<?php
/* CONTROLEUR POUT MODIFIER LES INFORMATIONS DES UTILISATEURS */

session_start();

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

$eau = $_POST['eau'];
$elec = $_POST['elec'];
$gaz = $_POST['gaz'];
$porte = $_POST['porte'];
         
$modif = $db -> prepare('UPDATE eau SET  numero_effecteur=:effecteur WHERE id="'.$_SESSION['id'].'"');

$modif->execute(array(
'effecteur' => $eau
));

$modif = $db -> prepare('UPDATE elec SET  numero_effecteur=:effecteur WHERE id="'.$_SESSION['id'].'"');

$modif->execute(array(
'effecteur' => $elec
));

$modif = $db -> prepare('UPDATE gaz SET  numero_effecteur=:effecteur WHERE id="'.$_SESSION['id'].'"');

$modif->execute(array(
'effecteur' => $gaz
));

$modif = $db -> prepare('UPDATE porte SET  numero_effecteur=:effecteur WHERE id="'.$_SESSION['id'].'"');

$modif->execute(array(
'effecteur' => $porte
));

//on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../Vues/User/etat.php');
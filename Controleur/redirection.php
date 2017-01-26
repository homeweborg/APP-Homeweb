<?php

//Se connecte à la base de données
session_start ();
require("../Modele/connexionBDD.php"); 

//on recupere les informations de l'utilisateur choisi
$reponse5 = $db -> query('SELECT * FROM utilisateurs WHERE mail="'.$_POST['box'].'"');
$reponseuser= $reponse5->fetch();

//on assigne les variables de session
$_SESSION['id'] = $reponseuser['id'];
$_SESSION['mail'] = $reponseuser['mail'];
$_SESSION['pwd'] = $reponseuser['mdp'];

//et on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../Vues/User/etat.php'); 

?>
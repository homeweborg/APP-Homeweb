<?php 

//On détruit notre session ();
session_destroy ();

//et on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../accueil.php');

?>
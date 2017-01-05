<?php 

session_start();

//On reinitialise les variables de session si elles existent
unset ($_SESSION['id']);
unset ($_SESSION['pwd']);

//et on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../accueil.php');

//on le signale sur la page 
echo "<script>window.alert('Vous êtes maintenant deconnecté')</script>";

?>
<?php 

session_start();

//On reinitialise les variables de session si elles existent
unset ($_SESSION['idadmin']);
unset ($_SESSION['mailadmin']);
unset ($_SESSION['pwdadmin']);

//et on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../Vues/login.php?erreur=Vous etes maintenant deconnecte');

?>
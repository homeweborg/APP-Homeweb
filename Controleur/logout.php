<?php 

session_start();

//On reinitialise les variables de session si elles existent
unset ($_SESSION['id']);
unset ($_SESSION['mail']);
unset ($_SESSION['pwd']);

//et on redirige vers la page d'accueil
header('Refresh:0 ; URL= ../Vues/login.php?erreur="Vous %C3%AAtes maintenant d%C3%A9connect%C3%A9.');

?>
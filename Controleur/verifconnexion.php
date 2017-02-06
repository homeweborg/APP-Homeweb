<?php 
session_start();

//on vérifie si un utilisateur est déjà connecté
if (isset ($_SESSION['id']) == False or empty($_SESSION['id'])) {
    
    //si personne n'est connecté on le redirige vers la page de connexion
    header('Refresh:0 ; URL= ../login.php?erreur=Vous devez C3%AAtre connect%C3%A9'); 

    
    die();
}
?>
<?php 
session_start();

//on vérifie si un utilisateur est déjà connecté
if (isset ($_SESSION['idadmin']) == False or empty($_SESSION['idadmin'])) {
    
    //si personne n'est connecté on le redirige vers la page de connexion
    header('Refresh:0 ; URL= ../login.php'); 
    
    //on le signale sur la page ////ERREUR NE MARCHE PASSSSSS
    echo "<script>window.alert('Vous n'êtes pas connecté ')</script>" ;
    
    die();
}
?>
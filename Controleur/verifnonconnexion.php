<?php 
session_start();
//on vérifie si un utilisateur est déjà connecté
if (isset ($_SESSION['id']) == True) {
    
    //si personne n'est connecté on le redirige vers la page de connexion
    header('Refresh:0 ; URL= ../Vues/User/etat.php'); 
    
    //on le signale sur la page ////ERREUR NE MARCHE PASSSSSS
    echo "<script>window.alert('Vous êtes déjà connecté ')</script>" ;
    
    die();
}
?>
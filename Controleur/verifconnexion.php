<?php 

//on vérifie si un utilisateur est déjà connecté
if (isset ($_SESSION['login'])==False) {
    
    //si personne n'est connecté on le redirige vers la page de connexion
    header('Refresh:0 ; URL= ../accueil.php'); 
    
    //on le signale sur la page 
    echo "<script>window.alert('Vous n'êtes pas connecté ')</script>" ;

}

?>
<?php 
    session_start();
    require("Modele/connexion.php");
    require("Vues/accueil.php");
   
   
     // L'utilisateur est connecté
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($_GET['cible'] == 'etat'){
                include("Vues/etat.php");
            } 
            else if ($_GET['cible'] == "temperature"){
                include("Vues/temperature.php");
            } 
            else if ($_GET['cible'] == "contact"){
                include("Vues/contact.php");    
            } 
            
            }
         else { // affichage par défaut
                include("Vues/etat.php");
        }
    
?>
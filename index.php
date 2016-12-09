<?php 
    session_start();
    require("Modele/connexion.php");
    require("Vues/accueil.php");
   
    if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/connexion.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
        
    } else { // L'utilisateur est connecté
        if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($_GET['cible'] == 'Etat'){
                include("Vues/etat.php");
            } else if ($_GET['cible'] == "Temperature"){
                include("Vues/temperature.php");
                
            } else if ($_GET['cible'] == "Contact"){
                include("Vues/contact.php");    
            
            }else if ($_GET['cible'] == "Deconnexion"){
                // Détruit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("Vues/accueil.php");
            } 
                
        } else { // affichage par défaut
                include("Vues/etat.php");
        }
    }
    
?>
<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

$login_valide = "moi";
$pwd_valide = "lemien";

if (isset($_POST['connexion'])){ //si on clique sur le bouton login
    
    if($login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) { //on vérifie si les informations du formulaire sont les memes que celles etablies au dessus
        
    //si les infos sont bonnes, on redirige vers la page et on démarre la session
    session_start ();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    include("Vues/etat.php");
    }
}
?>
<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

$login_valide = "moi";
$pwd_valide = "lemien";

//on vérifie les informations du formulaire
if($login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) {
        
    //si les infos sont bonnes, on redirige vers la page et on démarre la session
    session_start ();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    include("etat.php");
}
    
//si le guest n'a pas ete reconnu
else {
    //on le signale sur la page
    echo '<body onLoad="alert(\'Identifiant non attribué\')">';
    //on redirige ver la page d'accueil
    include("accueil.php");
}
?>
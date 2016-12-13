<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

$username_valide = "moi";
$password_valide = "lemien";

//on démarre la session
session_start ();

//lorsque le bouton "connexion est appuyé:
if(isset($_POST['connexion'])) {
    
    //on vérifie que les champs ne soient pas vides
    if(!empty($_POST['username'])) { //on vérifie que "Identifiant" n'est pas vide
        echo "Le champ Identifiant est vide.";
        
    } else { //on vérifie maintenant que "Mot de Passe" n'est pas vide  
        if(empty($_POST['password'])){
            echos "Le champ Mot de passe est vide.";
            
        } else { //si les champs sont remplis, on sécurise les données
            $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1");
            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            
            
                    
                } else {
                    // on ouvre la session avec $_SESSION:
                    session_start(); 
                    $_SESSION['username'] = $Pseudo;
                    include("Vues/etat.php");
        }
    }
}
    
    
    //on vérifie les informations du formulaire
    if(&login_valide == $_POST['username'] && $pwd_valide == $_POST['password']) {
        
    //si les infos sont bonnes, on redirige vers la page et on démarre la session
    $_SESSION['username'] = $_POST['login'];
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
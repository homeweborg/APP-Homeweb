<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    
    include("Modele/utilisateurs.php"); //on appelle le fichier avec les fonctions définies pour pouvoir les appeler
    
    $reponse = pass($bdd,$_POST['username']); 
    
    if($reponse->rowcount()==0) { //si l'identifiant n'a pas ete trouvé dans la BDD
        echo '<body onLoad="alert(\'Identifiant non attribué\')">'; //on le signale sur la page
        include("accueil.php"); //et on redirige vers la page d'accueil
        }
    
    else { //si l'identifiant a été trouvé
        
        $ligne = $reponse->fetch();
        
        if (md5($_POST['password'])!=$ligne['password]']){ //si le mdp ne correspond pas à l'id dans la BDD
            
            echo '<body onLoad="alert(\'Mot de Passe incorrect\')">'; //on le signale sur la page
            include("accueil.php"); //et on redirige vers la page d'accueil
        }
        
        else { //si le mdp correspond 
            
            $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); // on sécurise l'identifiant
            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1"); // on sécurise le mot de passe
        
            session_start (); // on démarre la session
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];

            include("Vues/etat.php"); //on redirige vers la page du compte
        }
    }

    
?>
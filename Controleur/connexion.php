<?php
// Controleur pour gérer le formulaire de connexion des utilisateurs
    
    //Se connecte à la base de données
    require("../Modele/connexionBDD.php");

    //on assigne l'identifiant entré à la variable $id
    $id= $_POST['username'];

    //on récupère les identifiants des clients dans la base de données
    $reponse = $db->query('SELECT id FROM utilisateurs');
    $reponseid = $reponse->fetch(); 
    return $reponseid ; 

    echo'Test1';
    
    if($id -> rowcount()==0) { //si l'identifiant n'a pas ete trouvé dans la BDD
        echo '<body onLoad="alert(\'Identifiant non attribué\')">'; //on le signale sur la page
        include("../accueil.php"); //et on redirige vers la page d'accueil
        }
    
    echo'Test2';

    else { //si l'identifiant a été trouvé
        
        $reponsemdp = $db -> query('SELECT , mdp FROM utilisateurs WHERE username="'.$reponseid.'"');
        return $reponsemdp ;
        
        if (md5($_POST['password'])!=$reponsemdp){ //si le mdp ne correspond pas à l'id dans la BDD
            
            echo '<body onLoad="alert(\'Mot de Passe incorrect\')">'; //on le signale sur la page
            include("../accueil.php"); //et on redirige vers la page d'accueil
        }
        
        else { //si le mdp correspond 
            
            $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); // on sécurise l'identifiant
            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1"); // on sécurise le mot de passe
        
            session_start (); // on démarre la session
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];

            echo '<body onLoad="alert(\'Vous êtes maintenant connectés\')">'; //on le signale sur la page
            include("../Vues/etat.php"); //on redirige vers la page du compte
        }
        
    }
    
?>
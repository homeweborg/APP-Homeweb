<?php 
/* CONTROLEUR POUT GERER LE FORMULAIRE DE CONNEXION DES UTILISATEURS */

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

//on assigne l'identifiant entré à la variable $id
$id= $_POST['username'];

//on récupère l'identifiant des clients dans la base de données
$reponse = $db->query('SELECT id FROM utilisateurs WHERE id="'.$id.'"');
$reponseid = $reponse->fetch();

if ($reponse -> rowcount()==0) { //si l'identifiant n'a pas ete trouvé dans la BDD
    echo '<body onLoad="alert(\'Identifiant non attribué\')">'; //on le signale sur la page
    include("../accueil.php"); //et on redirige vers la page d'accueil
    }

else { //si l'identifiant a été trouvé
    $reponse = $db -> query('SELECT mdp FROM utilisateurs WHERE id="'.$id.'"');
    $reponsemdp = $reponse->fetch();
        
    if (md5($_POST['password'])!=$reponsemdp){ //si le mdp ne correspond pas à l'id dans la BDD
        echo '<body onLoad="alert(\'Mot de Passe incorrect\')">'; //on le signale sur la page
        sleep(5);
        header('Location: http://localhost/APP-Homeweb/accueil.php'); //on redirige vers la page d'accueil
        exit(); //et on interromp le script puisque le reste est useless
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
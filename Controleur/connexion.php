<?php 
/* CONTROLEUR POUT GERER LE FORMULAIRE DE CONNEXION DES UTILISATEURS */

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

//on assigne l'identifiant entré à la variable $id et le mdp entré à la variable $mdp
$id= $_POST['username'];
$mdp= $_POST['password'];

//on récupère l'identifiant des clients dans la base de données
$reponse = $db->query('SELECT id FROM utilisateurs WHERE id="'.$id.'"');
$reponseid = $reponse->fetch();

//SI L'IDENTIFIANT N'EST PAS TROUVE DANS LA BDD
if ($reponse -> rowcount()==0) { 
    //on le signale sur la page
    echo '<body onLoad="alert(\'Identifiant non attribué\')">';
    //et on redirige vers la page d'accueil
    header('Location: ../accueil.php'); 
    }

//si l'identifiant a été trouvé
else { 
    $reponse = $db -> query('SELECT mdp FROM utilisateurs WHERE id="'.$id.'"');
    $reponsemdp = $reponse->fetch();
        
    //si le mdp ne correspond pas à l'id dans la BDD
    if (md5($mdp)!=$reponsemdp){ 
        //on le signale sur la page
        echo '<body onLoad="alert(\'Mot de Passe incorrect\')">'; 
        //on redirige vers la page d'accueil
        header('Location: ;;/accueil.php'); 
    }
        
    //si le mdp correspond 
    else { 
        // on sécurise l'identifiant    
        $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); 
        // on sécurise le mot de passe
        $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1"); 
        
        // on démarre la session
        session_start (); 
        $_SESSION['username'] = $id;
        $_SESSION['password'] = $bdd;
        //on le signale sur la page
        echo '<body onLoad="alert(\'Vous êtes maintenant connectés\')">'; 
        //on redirige vers la page du compte
        header('Location: ../Vues/etat.php'); 
    }
        
}
    
?>
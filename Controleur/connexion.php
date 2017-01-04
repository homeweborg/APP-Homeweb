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
    //et on redirige vers la page d'accueil
    header('Refresh:0 ; URL= ../accueil.php'); 
    //on le signale sur la page 
    echo "<script>window.alert('Identifiant incorrect')</script>" ;
    }

//si l'identifiant a été trouvé
else { 
    $reponse2 = $db -> query('SELECT mdp FROM utilisateurs WHERE id="'.$id.'"');
    $reponsemdp = $reponse2->fetch();
        
    //si le mdp ne correspond pas à l'id dans la BDD
    if ((md5($mdp)) != $reponsemdp[0]){ 
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../accueil.php'); 
        //on le signale sur la page
        echo "<script>window.alert('Mot de Passe incorrect')</script>" ;
    }
        
    //si le mdp correspond 
    else { 
        //on récupère le prénom et le nom de l'utilisateur
        $reponse3 = $db -> query('SELECT prenom FROM utilisateurs WHERE id="'.$id.'"');
        $prenom = $reponse3->fetch();
        $reponse4 = $db -> query('SELECT nom FROM utilisateurs WHERE id="'.$id.'"');
        $nom = $reponse4->fetch();
        
        // on sécurise l'identifiant    
        $username = htmlentities($_POST['username'], ENT_QUOTES, "ISO-8859-1"); 
        // on sécurise le mot de passe
        $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1"); 
        
        // on démarre la session
        session_start (); 
        
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../Vues/etat.php'); 
        //on le signale sur la page 
        echo "<script>window.alert('Vous êtes maintenant connecté "<strong>.$prenom[0].</strong>"  "<strong>.$nom[0].</strong>"')</script>" ; 
    }
        
}
    
?>
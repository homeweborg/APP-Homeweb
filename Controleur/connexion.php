<?php 
/* CONTROLEUR POUT GERER LE FORMULAIRE DE CONNEXION DES UTILISATEURS */

//Se connecte à la base de données
session_start ();
require("../Modele/connexionBDD.php"); 

//on assigne l'adresse mail entrée à la variable $mail et le mdp entré à la variable $mdp
$mail= $_POST['username'];
$pwd= $_POST['password'];

//on récupère les adresses mail des clients dans la base de données
$reponse = $db->query('SELECT mail FROM Utilisateurs WHERE mail="'.$mail.'"');
$reponsemail = $reponse->fetch();

//on récupère également les adresses mail des administrateurs dans la base de données
$reponse6 = $db->query('SELECT mail FROM administrateur WHERE mail="'.$mail.'"');
$reponsemailadmin = $reponse6->fetch();

//SI L'ADRESSE MAIL N'EST PAS TROUVEE DANS LA BDD
if ($reponse -> rowcount()==0 and $reponse6 -> rowcount()==0) { 
    //on redirige vers la page d'accueil
    header('Refresh:0 ; URL= ../Vues/login.php?erreur=Adresse mail incorrecte'); 
    }

//si l'adresse mail a été trouvée dans la BDD client
else if ($reponse -> rowcount()!=0){ 
    $reponse2 = $db -> query('SELECT mdp FROM utilisateurs WHERE mail="'.$mail.'"');
    $reponsepwd = $reponse2->fetch();
        
    //si le mdp ne correspond pas à l'adresse mail dans la BDD
    if ((md5($pwd)) != $reponsepwd[0]){ 
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../Vues/login.php?erreur=Mot de passe incorrect'); 
    }
        
    //si le mdp correspond 
    else { 
        
        //on recupere l'id de l'utilisateur pour sécuriser le site lorsqu'il est connecté
        $reponse5 = $db -> query('SELECT * FROM utilisateurs WHERE mail="'.$mail.'"');
        $reponseuser= $reponse5->fetch();
        
        //on assigne les variables de session
        $_SESSION['id'] = $reponseuser['id'];
        $_SESSION['nom'] = $reponseuser['nom'];
        $_SESSION['prenom'] = $reponseuser['prenom'];
        $_SESSION['adresse'] = $reponseuser['adresse'];
        $_SESSION['tel'] = $reponseuser['tel'];
        $_SESSION['mail'] = $reponsemail[0];
		$_SESSION['pwd'] = $reponsepwd[0];
        
        $reponse10 = $db -> query('SELECT numero_effecteur FROM eau WHERE id="'.$_SESSION['id'].'"');
        $reponse10->fetch();
        
        if($reponse10 -> rowcount()==0 ){
            //et on redirige vers la page d'accueil
            header('Refresh:0 ; URL= ../Vues/User/premiereco.php');
        }
        
        else{
            //et on redirige vers la page d'accueil
            header('Refresh:0 ; URL= ../Vues/User/etat.php'); 
        }
    }
        
}

//si l'adresse mail a été trouvée dans la BDD Administrateur
else if ($reponse6 -> rowcount()!=0){ 
    
    $reponse7 = $db -> query('SELECT mdp FROM administrateur WHERE mail="'.$mail.'"');
    $reponsepwdadmin = $reponse7->fetch();
        
    //si le mdp ne correspond pas à l'id dans la BDD
    if ((md5($pwd)) != $reponsepwdadmin[0]){ 
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../Vues/login.php?erreur=Mot de passe incorrect'); 
    }
        
    //si le mdp correspond 
    else { 
                
        //on recupere l'id de l'utilisateur pour sécuriser le site lorsqu'il est connecté
        $reponse8 = $db -> query('SELECT id FROM administrateur WHERE mail="'.$mail.'"');
        $reponseidadmin= $reponse8->fetch();
        
        //on assigne les variables de session
        $_SESSION['idadmin'] = $reponseidadmin[0];
        $_SESSION['mailadmin'] = $reponsemailadmin[0];
		$_SESSION['pwdadmin'] = $reponsepwdadmin[0];
        
        //et on redirige vers la page d'
        header('Refresh:0 ; URL= ../Vues/Admin/admin.php');
        
    }
        
}
    
?>
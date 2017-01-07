<?php 
/* CONTROLEUR POUT GERER LE FORMULAIRE DE CONNEXION DES UTILISATEURS */

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

//on assigne l'adresse mail entrée à la variable $mail et le mdp entré à la variable $mdp
$mail= $_POST['username'];
$pwd= $_POST['password'];

//on récupère les adresses mail des clients dans la base de données
$reponse = $db->query('SELECT mail FROM utilisateurs WHERE mail="'.$mail.'"');
$reponsemail = $reponse->fetch();

//on récupère également les adresses mail des administrateurs dans la base de données
$reponse6 = $db->query('SELECT mail FROM administrateur WHERE mail="'.$mail.'"');
$reponsemailadmin = $reponse6->fetch();

//SI L'ADRESSE MAIL N'EST PAS TROUVEE DANS LA BDD
if ($reponse -> rowcount()==0 or $reponse6 -> rowcount()==0) { 
    //on redirige vers la page d'accueil
    header('Refresh:0 ; URL= ../index.php'); 
    //on le signale sur la page 
    echo "<script>window.alert('Adresse mail incorrecte incorrect')</script>" ;
    }

//si l'adresse mail a été trouvée dans la BDD client
else if ($reponse -> rowcount()!=0){ 
    $reponse2 = $db -> query('SELECT mdp FROM utilisateurs WHERE mail="'.$mail.'"');
    $reponsepwd = $reponse2->fetch();
        
    //si le mdp ne correspond pas à l'adresse mail dans la BDD
    if ((md5($pwd)) != $reponsepwd[0]){ 
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../index.php'); 
        //on le signale sur la page
        echo "<script>window.alert('Mot de Passe incorrect')</script>" ;
    }
        
    //si le mdp correspond 
    else { 
                
        // on démarre la session
        session_start (); 
        
        //on recupere l'id de l'utilisateur pour sécuriser le site lorsqu'il est connecté
        $reponse5 = $db -> query('SELECT id FROM utilisateurs WHERE mail="'.$mail.'"');
        $reponseid= $reponse5->fetch();
        
        //on assigne les variables de session
        $_SESSION['id'] = $reponseid[0];
        $_SESSION['mail'] = $reponsepwd[0];
		$_SESSION['pwd'] = $reponsemdp[0];
        
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../Vues/etat.php');
        
        //on le signale sur la page 
        echo "<script>window.alert('Vous êtes maintenant connecté')</script>" ; 
    }
        
}

//si l'adresse mail a été trouvée dans la BDD Administrateur
else if ($reponse6 -> rowcount()!=0){ 
    
    //RAJOUTER LA CONDITION DE VERIFICATION DU NUMERO ADMINISTRATEUR RENSEIGNE LORS DE L'INSCRIPTION*s
    
    $reponse7 = $db -> query('SELECT mdp FROM administrateur WHERE mail="'.$mail.'"');
    $reponsepwdadmin = $reponse7->fetch();
        
    //si le mdp ne correspond pas à l'id dans la BDD
    if ((md5($pwd)) != $reponsepwdadmin[0]){ 
        //et on redirige vers la page d'accueil
        header('Refresh:0 ; URL= ../index.php'); 
        //on le signale sur la page
        echo "<script>window.alert('Mot de Passe incorrect')</script>" ;
    }
        
    //si le mdp correspond 
    else { 
                
        // on démarre la session
        session_start (); 
        
        //on recupere l'id de l'utilisateur pour sécuriser le site lorsqu'il est connecté
        $reponse8 = $db -> query('SELECT id FROM administrateur WHERE mail="'.$mail.'"');
        $reponseidadmin= $reponse8->fetch();
        
        //on assigne les variables de session
        $_SESSION['id'] = $reponseidadmin[0];
        $_SESSION['mail'] = $reponsemailadmin[0];
		$_SESSION['pwd'] = $reponsepwdadmin[0];
        
        //et on redirige vers la page d'
        header('Refresh:0 ; URL= ../Vues/admin.php');
        
        //on le signale sur la page 
        echo "<script>window.alert('Vous êtes maintenant connecté')</script>" ; 
    }
        
}
    
?>
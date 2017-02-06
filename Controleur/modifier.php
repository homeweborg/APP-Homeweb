<?php
/* CONTROLEUR POUT MODIFIER LES INFORMATIONS DES UTILISATEURS */

session_start();

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

$mail = $_SESSION['mail'];
$amdp = $_POST['amdp'];
$mdp = $_POST['mdp'];
$mdpc = $_POST['mdpc'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$tel = $_POST['tel'];

if (md5($amdp) == $_SESSION['pwd']){
    
    if ($mdp == $mdpc){ //ON VERIFIE QUE LE MDP ET SA CONFIRMATION SONT SEMBLABLES 
        
        if (isset($mdp)==0 or empty($mdp)){
                    
            $modif = $db -> prepare('UPDATE utilisateurs SET mail =:mail, nom = :nom, prenom = :prenom, adresse = :adresse, tel =:tel WHERE mail="'.$mail.'"');

            $modif->execute(array(
            'mail' => $mail,
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'tel' => $tel
            ));
        }
        
        else{

            $modif2 = $db -> prepare('UPDATE utilisateurs SET mdp = :mdp WHERE mail="'.$mail.'"');
            
            $modif2->execute(array(
            'mdp' => md5($mdp),
            ));
                    
            $modif3 = $db -> prepare('UPDATE utilisateurs SET mail =:mail, nom = :nom, prenom = :prenom, adresse = :adresse, tel =:tel WHERE mail="'.$mail.'"');

            $modif3->execute(array(
            'mail' => $mail,
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'tel' => $tel
            ));
                    
        }
   
        //on redirige vers le formulaire de connexion en se deconnectant
        header('Refresh:0 ; URL= logout.php');
    }

    else {
        
        //on revient vers la page de modification
        header('Refresh:0 ; URL= ../Vues/User/infos.php?erreur=Mots de passe non identiques');
    }
    
}
else {
    //on revient vers la page de modification
    header('Refresh:0 ; URL= ../Vues/User/infos.php?erreur=Mot de passe incorrect');
}
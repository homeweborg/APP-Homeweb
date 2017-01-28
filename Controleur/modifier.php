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

        $modif = $db -> prepare('UPDATE utilisateurs SET mdp = :mdp WHERE mail="'.$mail.'"');

        $modif->execute(array(
        'mdp' => md5($mdp)
        ));

        //on redirige vers le formulaire de connexion en se deconnectant
        header('Refresh:0 ; URL= logout.php');

         //on le signale sur la page 
        echo "<script>window.alert('Modification(s) réussie(s), veuillez vous reconnecter')</script>" ;
    }

    else {
        //on revient vers la page de modification
        header('Refresh:0 ; URL= ../Vues/User/infos.php');

         //on le signale sur la page 
         echo "<script>window.alert('Mots de passe non identiques')</script>" ;
    }
}
else {
    //on revient vers la page de modification
    header('Refresh:0 ; URL= ../Vues/User/infos.php');

    //on le signale sur la page 
    echo "<script>window.alert('Mot de passe incorrect')</script>" ;
}
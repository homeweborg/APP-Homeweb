<?php
    
    // CONTROLEUR POUR GERER LE FORMULAIRE D'INSCRIPTION
    
    /* Envoie les données du formulaire dans la base de données */
require("../Modele/connexionBDD.php");
    
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$mdpc = $_POST['mdpc'];
$numero = $_POST['numero_capteur'];


//ON RECUPERE LES NUMEROS DE TOUS LES CAPTEURS DANS LA BBD DES CAPTEURS
$reponse = $db->query('SELECT numero_capteur FROM capteur WHERE numero_capteur ="'.$capteur.'"');
$reponsecapteur = $reponse->fetch();

//ON RECUPERE LES NUMEROS DE TOUS LES ADMINISTRATEURS DANS LA BDD DES CAPTEURS
$reponse2 = $db->query('SELECT numero_admin FROM administrateur WHERE numero_admin ="'.$numero.'"');
$reponseadmin = $reponse->fetch();

if ($reponsecapteur[0]==$numero or $numero==$reponseadmin[0]){ //ON VERIFIE QUE LE NUMERO DU CAPTEUR EXISTE
    
    if ($mdp == $mdpc){ //ON VERIFIE QUE LE MDP ET SA CONFIRMATION SONT SEMBLABLES
        
        if ($numero==$reponsecapteur[0]){
            $req = $db -> prepare('INSERT INTO Utilisateurs(mail, mdp) VALUES (:mail,:mdp)');
    
            $req-> execute(array(
                'mail' => $mail,
                'mdp' => md5($mdp)));
        
            //on redirige vers le formulaire de connexion
            header('Refresh:0 ; URL= ../index.php');
    
            //on le signale sur la page 
            echo "<script>window.alert('Inscription réussie ')</script>" ;
        }
            
        else if ($numero==$reponseadmin[0])
            $req = $db -> prepare('UPDATE INTO administrateur(mail, mdp) VALUES (:mail,:mdp)');
    
            $req-> execute(array(
                'mail' => $mail,
                'mdp' => md5($mdp)));
        
            //on redirige vers le formulaire de connexion
            header('Refresh:0 ; URL= ../index.php');
    
            //on le signale sur la page  // AA VERIIIFIIIIIERRRR
            echo "<script>window.alert('Inscription réussie ')</script>" ;
    }

    else {
        
        //on redirige vers le formulaire d'inscription
        header('Refresh:0 ; URL= ../Vues/signup.php');
    
        //on le signale sur la page 
        echo "<script>window.alert('Mots de passe non identiques')</script>" ;
    }
}

else{
    
    //on redirige vers le formulaire d'inscription
    header('Refresh:0 ; URL= ../Vues/signup.php');
    
    //on le signale sur la page  NAFFFICHHEEE PASSSS
    echo "<script>window.alert('Ce numéro de capteur n'existe pas')</script>" ;
    die();
}


?>
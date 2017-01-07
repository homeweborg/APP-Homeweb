<?php
    
    // CONTROLEUR POUR GERER LE FORMULAIRE D'INSCRIPTION
    
    /* Envoie les données du formulaire dans la base de données */
require("../Modele/connexionBDD.php");
    
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$mdpc = $_POST['mdpc'];
$capteur = $_POST['Numero_Capteur'];


//ON RECUPERE LES NUMEROS DE TOUS LES CAPTEURS DANS LA BBD DES CAPTEURS
$reponse = $db->query('SELECT numero_capteur FROM capteur WHERE numero_capteur ="'.$capteur.'"');
$reponsecapteur = $reponse->fetch();

echo "$capteur";
//echo "$reponsecapteur";

if ($reponsecapteur[0]==$capteur or $capteur=='3CAE05A622'){ //ON VERIFIE QUE LE NUMERO DU CAPTEUR EXISTE
    
    if ($mdp == $mdpc){ //ON VERIFIE QUE LE MDP ET SA CONFIRMATION SONT SEMBLABLES
        
        if ($capteur==$reponsecapteur[0]){
            $req = $db -> prepare('INSERT INTO Utilisateurs(mail, mdp) VALUES (:mail,:mdp)');
    
            $req-> execute(array(
                'mail' => $mail,
                'mdp' => md5($mdp)));
        
            //on redirige vers le formulaire de connexion
            header('Refresh:0 ; URL= ../index.php');
    
            //on le signale sur la page  // AA VERIIIFIIIIIERRRR
            echo "<script>window.alert('Inscription réussie ')</script>" ;
        }
            
        else if ($capteur=='3CAE05A622')
            $req = $db -> prepare('INSERT INTO administrateur(mail, mdp) VALUES (:mail,:mdp)');
    
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
    
        //on le signale sur la page  // AA VERIIIFIIIIIERRRR
        echo "<script>window.alert('Mots de passe non identiques')</script>" ;
    }
}

else{
    
    //on redirige vers le formulaire d'inscription
    //header('Refresh:0 ; URL= ../Vues/signup.php');
    
    //on le signale sur la page  // AA VERIIIFIIIIIERRRR
    echo "<script>window.alert('Ce numéro de capteur n'existe pas')</script>" ;
    
}


?>
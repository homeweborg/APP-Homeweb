<?php
    
    // CONTROLEUR POUR GERER LE FORMULAIRE D'INSCRIPTION
    
    /* Envoie les données du formulaire dans la base de données */


require("../Modele/connexionBDD.php");
    
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$mdpc = $_POST['mdpc'];
$numero = $_POST['numero_capteur'];


//ON RECUPERE LES NUMEROS DE TOUS LES CAPTEURS DANS LA BBD DES CAPTEURS
$reponse = $db->query('SELECT * FROM capteur WHERE numero_capteur ="'.$numero.'"');
$reponsecapteur = $reponse->fetch();

//ON RECUPERE LES NUMEROS DE TOUS LES ADMINISTRATEURS DANS LA BDD DES CAPTEURS
$reponse2 = $db->query('SELECT * FROM administrateur WHERE numero_admin ="'.$numero.'"');
$reponseadmin = $reponse2->fetch();

//on va chercher tous les mails clients et admin dans la bdd
$reponse4 = $db->query('SELECT mail FROM utilisateurs WHERE mail="'.$mail.'"');
    
//on va chercher tous les mails clients et admin dans la bdd
$reponse5 = $db->query('SELECT mail FROM administrateur WHERE mail="'.$mail.'"');

    //SI LE MAIL N'EXISTE PAS ENCORE DANS LA BDD
    if($reponse4->rowcount()==0 and $reponse5->rowcount()==0){
        
        //ON VERIFIE QUE LE MDP ET SA CONFIRMATION SONT SEMBLABLES
        if ($mdp == $mdpc){ 

            //SI LE MAIL N'EXISTE PAS ENCORE DANS LA BDD
            if($reponse4->rowcount()==0 and $reponse5->rowcount()==0){
            
                //ON VERIFIE QUE LE NUMERO EXISTE
                if ($reponsecapteur['numero_capteur']==$numero or $numero==$reponseadmin['numero_admin'])
                { 
                    
                    //SI LE NUMERO EST UN NUMERO DE CAPTEUR ET QU'IL N'EST ASSOCIE A AUCUN CLIENT
                    if ($numero==$reponsecapteur['numero_capteur'] and $reponsecapteur['id_client']==0 ){

                        $ajout = $db->exec('INSERT INTO Utilisateurs(mail,mdp,etat_general) VALUES ("'.$mail.'","'.md5($mdp).'",0)');

                        $reponse3 = $db->query('SELECT id FROM Utilisateurs WHERE mail="'.$mail.'"');
                        $reponseid = $reponse3->fetch();

                        $ajout2 = $db -> exec('INSERT INTO capteur.id_client VALUES "'.$reponseid[0].'" WHERE numero_capteur="'.$numero.'"');

                        //on redirige vers le formulaire de connexion
                        header('Refresh:0 ; URL= ../index.php');

                        //on le signale sur la page 
                        echo "<script>window.alert('Inscription réussie ')</script>" ;
                    }

                    //SI LE NUMERO EST UN NUMERO D'ADMIN ET QU'IL N'EST ASSOCIE A AUCUN ADMIN
                    else if ($numero==$reponseadmin['numero_admin'] and isset($reponseadmin['mail'])==False){

                        $req = $db -> prepare('UPDATE administrateur SET mail = :mail , mdp = :mdp WHERE numero_admin="'.$numero.'"');

                        $req->execute(array(
                        'mail' => $mail,
                        'mdp' => md5($mdp)
                        ));

                        //on redirige vers le formulaire de connexion
                        header('Refresh:0 ; URL= ../index.php');

                        //on le signale sur la page  // AA VERIIIFIIIIIERRRR
                        echo "<script>window.alert('Inscription réussie ')</script>" ;
                    }

                    //SI LE NUMERO EST DEJA UTILISE
                    else {

                    //on redirige vers le formulaire d'inscription
                    header('Refresh:0 ; URL= ../Vues/signup.php'); //NE MARCHE PAS

                    //on le signale sur la page 
                    echo "<script>window.alert('Ce numéro de capteur est déjà utilisé)</script>" ;
                    }
                
                }
                
                //SI LE NUMERO DE CAPTEUR N'EXISTE PAS
                else{

                    //on redirige vers le formulaire d'inscription
                    header('Refresh:0 ; URL= ../Vues/signup.php');

                    //on le signale sur la page  NAFFFICHHEEE PASSSS
                    echo "<script>window.alert('Ce numéro de capteur n'existe pas')</script>" ;
                    die();
                } 
                
            }
            
            //SI LE MAIL EXISTE DEJA
            else {

            //on redirige vers le formulaire d'inscription
            header('Refresh:0 ; URL= ../Vues/signup.php');

            //on le signale sur la page 
            echo "<script>window.alert('Adresse mail déjà utilisée')</script>" ;
        } 

        }
        
        //SI LE MDP ET LA CONFIRMATION MDP NE SONT PAS PAREIL
        else {

            //on redirige vers le formulaire d'inscription
            header('Refresh:0 ; URL= ../Vues/signup.php');

            //on le signale sur la page 
            echo "<script>window.alert('Mots de passe non identiques')</script>" ;
        } 
        
    
    }

?>
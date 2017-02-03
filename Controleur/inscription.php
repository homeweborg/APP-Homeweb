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

//on va chercher dans la bdd client un mail répondant à celui rentré
$reponse4 = $db->query('SELECT mail FROM utilisateurs WHERE mail="'.$mail.'"');
    
//on va chercher dans la bdd admin un mail répondant à celui rentré
$reponse5 = $db->query('SELECT mail FROM administrateur WHERE mail="'.$mail.'"');
        
//ON VERIFIE QUE LE MDP ET SA CONFIRMATION SONT SEMBLABLES
if ($mdp == $mdpc){ 
    
    //SI LE MAIL N'EXISTE PAS ENCORE DANS LA BDD
    if($reponse4->rowcount()==0 and $reponse5->rowcount()==0){        
        
        //ON VERIFIE QUE LE NUMERO EXISTE                                                                                        
        if ($numero==$reponsecapteur['numero_capteur'] or $numero==$reponseadmin['numero_admin'])
        { 
                        
            //SI LE NUMERO EST UN NUMERO DE CAPTEUR                               
            if ($numero==$reponsecapteur['numero_capteur']){
                
                //ON VERIFIE SI LE NUMERO EST ASSOCIE A UN CLIENT
                if ($reponsecapteur['id_client']==NULL){  
                    
                    $ajout = $db->exec('INSERT INTO Utilisateurs(mail,mdp,etat_general) VALUES ("'.$mail.'","'.md5($mdp).'",0)');
                    
                    $reponse3 = $db->query('SELECT id FROM Utilisateurs WHERE mail="'.$mail.'"');
                    $reponseid = $reponse3->fetch();
                    
                    $modif = $db -> prepare('UPDATE capteur SET id_client=:id WHERE numero_capteur="'.$numero.'"');
                    $modif->execute(array(
                    'id' => $reponseid[0]
                    ));
                    
                    //ON CRÉER LES DONNÉES NÉCESSAIRE AU CLIENT
                    $ajout_eau = $db->exec('INSERT INTO eau(id,etat,consomation) VALUES ("'.$reponseid[0].'",0,0)');
                    $ajout_gaz = $db->exec('INSERT INTO gaz(id,etat,consomation) VALUES ("'.$reponseid[0].'",0,0)');
                    $ajout_elec = $db->exec('INSERT INTO elec(id,etat,consomation) VALUES ("'.$reponseid[0].'",0,0)');
                    $porte = $db->exec('INSERT INTO porte(id,etat) VALUES ("'.$reponseid[0].'",0)');
    
                    //on redirige vers le formulaire de connexion
                    header('Refresh:0 ; URL= ../Vues/login.php?erreur="Inscription r%C3%A9ussie');

                    //on le signale sur la page 
                    echo "<script>window.alert('Inscription réussie ')</script>" ;
                }
                    
                //SI LE NUMERO EST DEJA UTILISE
                else {

                //on redirige vers le formulaire d'inscription
                header('Refresh:0 ; URL= ../Vues/signup.php?erreur=Ce numéro de capteur est déjà utilis%C3%A9'); //NE MARCHE PAS
                }
                   
            }

            //SI LE NUMERO EST UN NUMERO D'ADMIN
            else {
                
                //ON VERIFIE SI LE NUMERO EST ASSOCIE A UN ADMIN
                if ($reponseadmin['mail']==NULL){ 

                    $req = $db -> prepare('UPDATE administrateur SET mail = :mail , mdp = :mdp WHERE numero_admin="'.$numero.'"');

                    $req->execute(array(
                    'mail' => $mail,
                    'mdp' => md5($mdp)
                    ));

                    //on redirige vers le formulaire de connexion
                    header('Refresh:0 ; URL= ../Vues/login.php?erreur=Inscription r%C3%A9ussie');
                    
                }
                    
                //SI LE NUMERO EST DEJA UTILISE
                else {

                //on redirige vers le formulaire d'inscription
                header('Refresh:0 ; URL= ../Vues/signup.php?erreur=Ce num%C3%A9ro est d%C3%A9j%C3%A0 utilis%C3%A9.');
                }
                  
            }

        }

        //SI LE NUMERO DE CAPTEUR N'EXISTE PAS
        else{

            //on redirige vers le formulaire d'inscription
            header("Refresh:0 ; URL= ../Vues/signup.php?erreur=Ce num%C3%A9ro de capteur n'existe pas");

            die();
} 

    }

    //SI LE MAIL EXISTE DEJA
    else {

    //on redirige vers le formulaire d'inscription
    header('Refresh:0 ; URL= ../Vues/signup.php?erreur=Cette adresse mail est d%C3%A9j%C3%A0 utilis%C3%A9e.');

} 

}

//SI LE MDP ET LA CONFIRMATION MDP NE SONT PAS PAREIL
else {

    //on redirige vers le formulaire d'inscription
    header('Refresh:0 ; URL= ../Vues/signup.php?erreur=Mots de passe non identiques.');
} 

?>
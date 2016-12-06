<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['identifiant']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");
            

            $reponse = mdp($db,$_POST['identifiant']);
            
            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vues/erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['mdp'])!=$ligne['mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vues/erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    include("Vues/etat.php");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include("Vues/erreur.php");
        }
    } else if(isset($_GET['cible']) && $_GET['cible']=="") { // L'utilisateur clique sur sign up pour se créer un compte
                include("Controleur/inscription.php"); // On utilise un controleur tertiaire pour l'inscription

    } else { // La page de connexion par défaut
        include("accueil.php");        
    }
    
?>
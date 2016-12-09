<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

        if(!empty($_POST['username']) && !empty($_POST['password'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");
            
            $reponse = mdp($db,$_POST['username']);
            
            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vues/erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['password'])!=$ligne['Mot de passe']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vues/erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["Identifiant"] = $ligne['username'];
                    include("Vues/etat.php");
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include("Vues/erreur.php");
        }

    } else if(isset($_GET['cible']) && $_GET['cible']=="Sign up") { // L'utilisateur clique sur sign up pour se créer un compte
                include("Controleur/inscription.php"); // On utilise un controleur tertiaire pour l'inscription

    } else { // La page de connexion par défaut
        include("accueil.php");        
    }
    
?>
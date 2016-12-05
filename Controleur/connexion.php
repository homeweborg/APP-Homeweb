<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
            include("Modele/utilisateurs.php");
            

            $reponse = mdp($db,$_POST['identifiant']);
            
            if($reponse->rowcount()==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include("Vues/erreur.php");
            } 
            else { // utilisateur trouvé dans la base de données
                $ligne = $reponse->fetch();
                if(md5($_POST['mdp'])!=$ligne['mdp']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include("Vues/erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    include("Vues/etat.php");
                }
            }
        }
    } else { // La page de connexion par défaut
        include("Vues/accueil.php");
    }
?>
<?php
    require("connexionBDD.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function pass($bdd,$username){
        $reponse = $bdd->query('SELECT * Mot de passe FROM client WHERE Identifiant="'.$username.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function user($bdd){
        $reponse = $bdd->query('SELECT * Identifiant FROM client');
        return $reponse;
    }

?>

<?php
    require("connexionBDD.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function pass($db,$username){
        $reponse = $db->query('SELECT , password FROM utilisateurs WHERE username="'.$username.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function user($db){
        $reponse = $db->query('SELECT identifiant FROM Utilisateurs');
        return $reponse;
    }

    
?>

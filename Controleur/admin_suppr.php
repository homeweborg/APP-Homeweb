<?php
/* CONTROLEUR POUT MODIFIER LES INFORMATIONS DES UTILISATEURS */

session_start();

//Se connecte à la base de données
require("../Modele/connexionBDD.php"); 

if (isset($_POST['box'])){

    $id = $_POST['box'];
    
    $suppr = $db -> prepare('DELETE FROM domisep_messagerie WHERE id=?');

    $suppr->execute(array($id));

    header('Refresh:0 ; URL= ../Vues/Admin/messagerie.php?message=Message(s) supprime(s)');
}

else {
    die();
}
    
?>
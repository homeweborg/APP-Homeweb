<?php
    
    /* Gère l'ajout de pièce */
session_start();
require("../Modele/connexionBDD.php");
    
$id_Utilisateur = $_SESSION['id'];

// ON VÉRIFIE QUELLE CHECKBOX A ÉTÉ COCHÉE

foreach($_POST['box'] as $valeur)
{

// On cherche le nom des pièces de l'utilisateur dans la bdd
    
$reponse = $db->prepare('SELECT Nom FROM pieces WHERE id_Utilisateur = ?');
    
$reponse->execute(array($id_Utilisateur));
    
while ($donnees = $reponse->fetch())
{
    if($donnees['Nom'] == $valeur)
    {
        $reponse2 = $db->prepare('DELETE FROM pieces WHERE Nom = ?');
        $reponse2->execute(array($valeur));
    }
}

}

header('Refresh:0 ; URL= ../Vues/User/etat.php?message=La pi%C3%A8ce a bien %C3%A9t%C3%A9 supprim%C3%A9e.');

?>
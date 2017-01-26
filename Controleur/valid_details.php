<?php

// Envoie les données changer dans la page détails pièce à la bbd

session_start();
require("../Modele/connexionBDD.php");

$id_Utilisateur = $_SESSION['id'];


// ON MET À JOUR LA PRÉSENCE DES CAPTEURS DE TEMPÉRATURES

if (isset($_POST['box_temp']))
{
    /* Lorsque la checkbox du capteur température est cochée, elle contient le nom de la pièce
    qu'elle concerne */
    
    /* On remet toutes les données à 0 pour les rebasculer ensuite*/
    $req = $db->prepare('UPDATE pieces SET presence_temp = :consigne WHERE id_Utilisateur = :id');
    $req->execute(array(
	'consigne' => 0,
	'id' => $id_Utilisateur
	));
    
    $nom_piece_tableau = $_POST['box_temp'];
    
    /* On parcours les noms des pièces cochées*/
    
    foreach($nom_piece_tableau as $nom_piece)
    {
        echo($nom_piece);
        /* On met à jour dans la bdd les pièces dont le capteur_t est coché */

        $req = $db->prepare('UPDATE pieces SET presence_temp = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
        $req->execute(array(
        'consigne' => 1,
        'id' => $id_Utilisateur,
        'Nom_piece' => $nom_piece
        ));
        
    }
    
}
else
{
    /* Si toutes les checkboxs sont décochées on fixe toutes les valeurs à 0 */
    
    $req = $db->prepare('UPDATE pieces SET presence_temp = :consigne WHERE id_Utilisateur = :id');
    $req->execute(array(
	'consigne' => 0,
	'id' => $id_Utilisateur
	));
}

// ON MET À JOUR LA PRÉSENCE DES CAPTEURS DE LUMIÈRES

if (isset($_POST['box_lum']))
{
    /* Lorsque la checkbox du capteur lumière est cochée, elle contient le nom de la pièce
    qu'elle concerne */
    
    /* On remet toutes les données à 0 pour les rebasculer ensuite*/
    $req = $db->prepare('UPDATE pieces SET presence_lum = :consigne WHERE id_Utilisateur = :id');
    $req->execute(array(
	'consigne' => 0,
	'id' => $id_Utilisateur
	));
    
    $nom_piece_tableau = $_POST['box_lum'];
    
    /* On parcours les noms des pièces cochées*/
    
    foreach($nom_piece_tableau as $nom_piece)
    {
        echo($nom_piece);
        /* On met à jour dans la bdd les pièces dont le capteur_t est coché */

        $req = $db->prepare('UPDATE pieces SET presence_lum = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
        $req->execute(array(
        'consigne' => 1,
        'id' => $id_Utilisateur,
        'Nom_piece' => $nom_piece
        ));
        
    }
    
}
else
{
    /* Si toutes les checkboxs sont décochées on fixe toutes les valeurs à 0 */
    
    $req = $db->prepare('UPDATE pieces SET presence_lum = :consigne WHERE id_Utilisateur = :id');
    $req->execute(array(
	'consigne' => 0,
	'id' => $id_Utilisateur
	));
}

header('Refresh:0 ; URL= ../Vues/User/etat.php');

?>
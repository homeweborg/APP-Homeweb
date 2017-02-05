<?php

// Envoie les données changer dans la page détails pièce à la bbd

session_start();
require("../Modele/connexionBDD.php");
// On charge toutes les fonctions nécessaires
require("../Modele/fonctions.php");

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
        /* On met à jour dans la bdd les pièces dont le capteur_l est coché */

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

//ON MET À JOUR LES NUMÉROS DES CAPTEURS DE LUMIÈRES

$tableau_numero_l = $_POST['numero_capteur_l'];

// On parcours les pièces pour changer un par un les numèros de capteurs

$reponse = $db->prepare('SELECT Nom FROM pieces WHERE id_Utilisateur = ?');
$reponse->execute(array($id_Utilisateur));
    
    // initialisation de la variable qui parcours le tableau

    $n =0;

    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        
        if ($tableau_numero_l[$n] != "" && verif_existance_capt($tableau_numero_l[$n],$id_Utilisateur,$db) == 1)
        {
        $req = $db->prepare('UPDATE pieces SET numero_capteur_l = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
        $req->execute(array(
        'consigne' => $tableau_numero_l[$n],
        'id' => $id_Utilisateur,
        'Nom_piece' => $nom_piece
        ));
        }
        
        $n =$n+1;
        
    }

//ON MET À JOUR LES NUMÉROS DES CAPTEURS DE TEMPÉRATURE
// ( MÊME MÉTHODE )

$tableau_numero_t = $_POST['numero_capteur_t'];

// On parcours les pièces pour changer un par un les numèros de capteurs

$reponse = $db->prepare('SELECT Nom FROM pieces WHERE id_Utilisateur = ?');
$reponse->execute(array($id_Utilisateur));
    
    // initialisation de la variable qui parcours le tableau

    $n =0;

    while ($donnees = $reponse->fetch())
    {
        $nom_piece = $donnees['Nom'];
        
        if ($tableau_numero_t[$n] != "" && verif_existance_capt($tableau_numero_t[$n],$id_Utilisateur,$db) == 1)
        {
        $req = $db->prepare('UPDATE pieces SET numero_capteur_t = :consigne WHERE id_Utilisateur = :id AND Nom=:Nom_piece');
        $req->execute(array(
        'consigne' => $tableau_numero_t[$n],
        'id' => $id_Utilisateur,
        'Nom_piece' => $nom_piece
        ));
        }
        
        $n =$n+1;
        
    }


header('Refresh:0 ; URL= ../Vues/User/detailpiece.php');

?>
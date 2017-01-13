<?php
    
    /* Gère l'ajout de pièce */
session_start();
require("../Modele/connexionBDD.php");
    
$nom_piece = $_POST['nom_piece'];
$ref_lum = $_POST['ref_lum'];
$ref_temp = $_POST['ref_temp'];
$id_Utilisateur = $_SESSION['id'];

/* On commence par ajouter le nom de la pièce rentrer par
l'utilisateur dans la bdd */

$req = $db->prepare('INSERT INTO pieces(Nom) VALUES(:Nom)');
$req->execute(array(
	'Nom' => $nom_piece
	));


// ON VÉRIFIE QUELLE CHECKBOX A ÉTÉ COCHÉE

foreach($_POST['box'] as $valeur)
{

/* On vérifie si l'utilisateur à annoncé un capteur de température
dans cette pièce */

    if ($valeur == "temp")
    {
    // Si c'est le cas on ajoute le capteur dans la pièce

    $req = $db->prepare('UPDATE pieces SET presence_temp = :presence_temp, id_Utilisateur = :id_Utilisateur WHERE Nom = :nom_piece');
    $req->execute(array(
        'presence_temp' => 1,
        'id_Utilisateur' => $id_Utilisateur,
        'nom_piece' => $nom_piece
        ));
    }

    /* On vérifie si l'utilisateur à annoncé un capteur de lumière
    dans cette pièce */

    if ($valeur == "lum")
    {
    // Si c'est le cas on ajoute le capteur dans la pièce

    $req = $db->prepare('UPDATE pieces SET presence_lum = :presence_lum, id_Utilisateur = :id_Utilisateur WHERE Nom = :nom_piece');
    $req->execute(array(
        'presence_lum' => 1,
        'id_Utilisateur' => $id_Utilisateur,
        'nom_piece' => $nom_piece
        ));
    }

}
header('Refresh:0 ; URL= ../Vues/etat.php');

?>
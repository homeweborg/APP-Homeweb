<?php
    
    /* Gère l'ajout de pièce */
session_start();
require("../Modele/connexionBDD.php");
    
$id_Utilisateur = $_SESSION['id'];

// ON VÉRIFIE QUELLE CHECKBOX A ÉTÉ COCHÉE

foreach($_POST['box'] as $valeur)
{
echo($valeur);
// On cherche le nom des pièces de l'utilisateur dans la bdd
    
$reponse = $db->query('SELECT Nom FROM pieces WHERE id_Utilisateur = :id_Utilisateur');
$reponse->execute(array(
        'id_Utilisateur' => $id_Utilisateur));

while ($donnees = $reponse->fetch())
{
	if($donnees['Nom'] == $valeur)
    {
        $reponse = $db->query('DELETE FROM pieces WHERE Nom=:Nom_piece_suppr');
        $reponse->execute(array(
        'Nom_piece_suppr' => $valeur));
    }
}

}

?>
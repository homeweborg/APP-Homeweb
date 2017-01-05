<?php
    
    // CONTROLEUR POUR GERER LE FORMULAIRE D'INSCRIPTION
    
    /* Envoie les données du formulaire dans la base de données */
require("../Modele/connexionBDD.php");
    
if (isset($_POST['bouton_submit']))
 {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $mail = $_POST['mail'];
    $anniversaire = $_POST['anniversaire'];
    $tel = $_POST['telephone'];
    $mdp = $_POST['mdp'];
    $mdpc = $_POST['mdpc'];
    $Numero_Homeweb = $_POST['Numero_Homeweb'];
     
if ($mdp == $mdpc)
{
    
$req = $db -> prepare('INSERT INTO Utilisateurs(nom, prenom, adresse, mail, anniversaire, tel, mdp, Numero_Homeweb) VALUES ( :nom, :prenom, :adresse, :mail, :anniversaire, :tel, :mdp, :Numero_Homeweb)');
    
$req-> execute(array(
    'nom' => $nom,
    'prenom' => $prenom,
    'adresse' => $adresse,
    'mail' => $mail,
    'anniversaire' => $anniversaire,
    'tel' => $tel,
    'mdp' => $mdp,
    'Numero_Homeweb' => $Numero_Homeweb));

    include('../Vues/etat.php');
}

}

?>
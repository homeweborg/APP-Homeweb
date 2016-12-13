<?php
      /* Envoie les données du formulaire dans la base de données */
require(Modele/connexionBDD.php)
    
$bdd->exec('INSERT INTO Utilisateurs(nom, prenom, adresse, mail, anniversaire, tel, mdp) VALUES($_POST['Nom'], $_POST['Prenom'], $_POST['Adresse'], $_POST['Mail'], $_POST['Anniversaire'], $_POST['Telephone'], $_POST['mdp'])');
        
?>
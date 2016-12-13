<?php
// pour se connecter au server de la base de données
$servername = "localhost";
$username = "username";
$password = "password";

// pour vérifier si on est connecté au serveur ou non
try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection réussie";
    }
catch(Exception $e) {
    die ("Erreur : " . $e->getMessage());
    }

// pour faire une requete SQL
$reponse = $bdd->query('REQUETE * FROM nom de la table')
//"SELECT" permet de lire les données, "UPDATE" de modifier une ligne, "INSERT" d'enregistrer des données dans une table, "DELETE" de supprimer une table, "CREATE TABLE" de fabriquer une table (avec la description de ses champs)

//pour afficher le résultat d'une requete    
$donnees = $reponse->fetch();

?>
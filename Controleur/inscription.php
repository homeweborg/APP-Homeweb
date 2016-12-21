<!DOCTYPE html>
<html>
<p>
   <?php
    echo 'TEST 1!';
    /* Envoie les données du formulaire dans la base de données */
require("../Modele/connexionBDD.php");
echo 'TEST 2!';
    
if (isset($_POST['bouton_conf']))
 {
     
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $mail = $_POST['mail'];
    $anniversaire = $_POST['anniversaire'];
    $tel = $_POST['telephone'];
    $mdp = $_POST['mdp'];
    
$insertmbr = $db -> prepare('INSERT INTO Utilisateurs(nom, prenom, adresse, mail, anniversaire, tel, mdp) VALUES ( ?, ?, ?, ?, ?, ?, ?)');
    
$insertmbr-> execute(array($nom, $prenom, $adresse, $mail, $anniversaire, $tel, $mdp));
     
 }
    
echo 'TEST 3!';
    
    ?>
</p>

    
</html>
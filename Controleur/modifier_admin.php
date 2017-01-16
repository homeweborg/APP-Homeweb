<?php 

/*CONTROLEUR POUR QUE LES ADMINISTRATEURS PUISSENT MODIFIER LES INFORMARTIONS DE DOMISEP*/

require("../Modele/connexionBDD.php");

$modif = $db -> prepare('UPDATE domisep SET contenu = :contenu3 WHERE nom="mentions"');

$modif->execute(array(
'contenu3' => $_POST['mentions']
));

$modif = $db -> prepare('UPDATE domisep SET contenu = :contenu2 WHERE nom="cgu"');

$modif->execute(array(
'contenu2' => $_POST['cgu']
));

//UPDATE LE MAIL
$modif = $db -> prepare('UPDATE domisep SET contenu = :contenu  WHERE nom="mail"');

$modif->execute(array(
'contenu' => $_POST['mail']
));

//on redirige vers le formulaire de connexion en se deconnectant
header('Refresh:0 ; URL= ../Vues/domisep.php');

//on le signale sur la page 
echo "<script>window.alert('Modification(s) réussie(s)')</script>" ;

?>
<?php 

/*CONTROLEUR POUR QUE LES ADMINISTRATEURS PUISSENT MODIFIER LES INFORMARTIONS DE DOMISEP*/

require("../Modele/connexionBDD.php");

$modif = $db -> prepare('UPDATE domisep_infos SET contenu = :contenu3 WHERE nom="mentions"');

$modif->execute(array(
'contenu3' => $_POST['mentions']
));

$modif = $db -> prepare('UPDATE domisep_infos SET contenu = :contenu2 WHERE nom="tel"');

$modif->execute(array(
'contenu2' => $_POST['tel']
));

//UPDATE LE MAIL
$modif = $db -> prepare('UPDATE domisep_infos SET contenu = :contenu  WHERE nom="mail"');

$modif->execute(array(
'contenu' => $_POST['mail']
));

//on redirige vers le formulaire de connexion en se deconnectant
header('Refresh:0 ; URL= ../Vues/Admin/infos_domisep.php?message=Modification(s) reussie(s)');

?>
<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
require("../../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexionadmin.php");
?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../../Styles/main.css" />
	</head>
	<body>
        <div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("entete_admin.php");
                ?>
            </header>
             <?php
            $reponse = $db->query('SELECT * FROM domisep_probleme'); //On récupère tous les problemes
            ?>
            <table>
                <tr>
                    <th>Mail Utilisateur</th>
                    <th>Problèmes signalés</th>
                    <th>Capteurs concernés</th>
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees = $reponse->fetch())
            {
            ?>
                <tr>
                    <td><?php echo $donnees['mail'];?></td>
                    <td><?php echo $donnees['capteur'];?></td>
                    <td><?php $reponse2 = $db->query('SELECT mail FROM utilisateurs WHERE id=="'.$donnees[id_user].'"'); 
                echo $donnees2['mail'];?></td>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            ?>
            </table>
        </div>
	</body>
</html>
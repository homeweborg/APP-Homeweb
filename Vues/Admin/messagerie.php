<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
require("../../Modele/connexionBDD.php");

//recupere les fonctions
require("../../Modele/fonctions.php");

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
            $reponse2 = $db->query('SELECT * FROM domisep_messagerie'); //On récupère tous les comptes utilisateurs
            ?>
            <div id=table_admin>
            <table>
                <tr>
                    <th>Qui?</th>
                    <th>Objet de la demande</th>
                    <th>Demande</th>
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees2 = $reponse2->fetch())
            {
            ?>
                <tr>
                    <td><?php echo $donnees2['mail'];?></td>
                    <td><?php echo $donnees2['objet'];?></td>
                    <td><?php $donnees2['demande'] ?></td>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            ?>
            </table>
            </div>
        </div>
	</body>
</html>

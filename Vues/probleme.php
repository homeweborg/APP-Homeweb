<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
require("../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
require("../Controleur/verifconnexion.php");
?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Styles/main.css" />
	</head>
	<body>
        <div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("../entete_admin.php");
                ?>
            </header>
             <?php
            $reponse = $db->query('SELECT * FROM problemes'); //On récupère tous les comptes utilisateurs
            ?>
            <table>
                <tr>
                    <th>Identifiant BDD</th>
                    <th>Problèmes signalés</th>
                    <th>Capteurs concernés</th>
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees = $reponse->fetch())
            {
            ?>
                <tr>
                    <td><?php echo $donnees['id'];?></td>
                    <td><?php echo $donnees['probleme'];?></td>
                    <td><?php echo $donnees['numero_capteur'];?></td>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            ?>
            </table>
            <?php include ("../footer.php");?> 
        </div>
	</body>
</html>
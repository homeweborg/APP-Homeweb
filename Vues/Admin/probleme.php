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
            <form name="admin" action="../../Controleur/admin_suppr2.php" method="post" accept-charset="utf-8">
            <div id=table_admin>
            <table>
                <tr>
                    <th>Id BDD</th>
                    <th>Mail Utilisateur</th>
                    <th>Capteurs concernés</th>
                    <th>Problèmes signalés</th>
                </tr>
            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
            while($donnees = $reponse->fetch())
            {
            ?>
                <tr>
                    <td><input type=radio name=box value=<?php echo $donnees['id'];?>><?php echo $donnees['id'];?></td>
                    <td><?php $reponse2 = $db->query('SELECT mail FROM utilisateurs WHERE id="'.$donnees['id_user'].'"'); $donnees2=$reponse2->fetch();echo $donnees2['mail'];?></td>
                    <td><?php echo $donnees['capteur'];?></td>
                    <td><?php echo $donnees['probleme'];?></td>
                </tr>
            <?php
            } //fin de la boucle, le tableau contient toute la BDD
            ?>
            </table>
            <div id=boutonacceder><input id="boutons_valider" type="submit" name="bouton_submit" value="Supprimer ce problème"/></div>
                </div>
            </form>
        </div>
	</body>
</html>
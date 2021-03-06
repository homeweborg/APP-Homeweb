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
            $reponse = $db->query('SELECT * FROM utilisateurs'); //On récupère tous les comptes utilisateurs
            ?>
            <form name="admin" action="../../Controleur/redirection.php" method="post" accept-charset="utf-8" target=_blank>
                <div id = table_admin>
                <table>
                    <tr>
                        <th>Identifiant BDD</th>
                        <th>Adresse mail du client</th>
                        <th>Etat général du système</th>
                    </tr>
                <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
                while($donnees = $reponse->fetch())
                {
                ?>
                    <tr>
                        <td><?php echo $donnees['id'];?></td>
                        <td><input type=radio name=box value=<?php echo $donnees['mail'];?>> <?php echo $donnees['mail'];?></td>
                        <td><?php etat_general_capteur($donnees['id'],$db) ?></td>
                    </tr>
                <?php
                } //fin de la boucle, le tableau contient toute la BDD
                ?>
                </table>
                    <div id=boutonacceder>
                        <?php if (isset($_GET["msg"])){$msg = $_GET["msg"];echo("<I class=\"msg\">$msg </I>");}?>
                        <?php if (isset($_GET["erreur"])){$erreur = $_GET["erreur"];echo("<I class=\"erreur\">$erreur </I>");}?>
                        <input id="boutons_valider" type="submit" name="bouton_submit" value="Visualiser ce compte"/>
                    </div>
                    
                </div>
            </form>
        </div>
	</body>
</html>

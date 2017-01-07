<!DOCTYPE HTML>
<?php
require("../Controleur/fonctions.php");
//Se connecte à la base de données
require("../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
//require("../Controleur/verifconnexion.php");
?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Styles/main.css" />
	</head>
	<body>
		<div id="page">
		<!-- Header -->
            <header>
                <?php 
                include ("../entete.php");
                ?>
            </header>
            <div id=capteurs>
                <ul>
                    <li><a href="#">Température</a>
                            <?php cascade_temp(1,$db) ?>
                        </li>
                    
                        <li><a href="#">Lumière</a>
                            <?php cascade_lum(1,$db) ?>
                        </li>
                    <li><a href="#">Consommation</a>
                        <ul>
                            <li><a href="eau.php">Eau</a></li>
                            <li><a href="gaz.php">Gaz</a></li>
                            <li><a href="elec.php">Electricité</a></li>
                        </ul>
                    </li>
                    <li>
                            <a class="bouton_type" href="ajout_piece.php">+  AJOUTER une pièce</a>
                            <a class="bouton_type" href="suppr.php">- SUPPRIMER une pièce</a>
                        </li>
                </ul>
	       	   </div>
        <!-- Body -->                
            <div id="boite">
                
                <p>
                    Votre Profil :
                    <br> 
                    <br> <b>Prénom :</b> <?php echo $_SESSION['mail'];?>
                    <br> <b>Adresse :</b> <?php echo $_SESSION['pwd'];?>
                    
                    <br><input class="boutons_modif" type="submit" value="Modifier" onClick="window.location.href='signup.php'">
                </p>
            </div>
        </div>
	</body>
</html>
<!DOCTYPE HTML>
<?php require("../../Modele/fonctions.php");
//Se connecte à la base de données
require("../../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexion.php");
?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../../Styles/main.css" />
        <script src="../../js/jquery-3.1.1.js"></script>
	</head>
	<body>
        <div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("entete_user.php");
                ?>
            </header>
            <div id=capteurs>
                <ul>
                    <li><a class="clickable" href="#">Température</a>
                        <?php cascade_temp($_SESSION['id'],$db) ?>
                    </li>
                    
                    <li><a class="clickable" href="#">Lumière</a>
                        <?php cascade_lum($_SESSION['id'],$db) ?>
                    </li>
                    
                    <li><a class="clickable" href="#">Consommation</a>
                        <ul>
                            <li><a href="eau.php">Eau</a> <span> <?php pastille_etat_eau($_SESSION['id'],$db) ?></span></li>
                            <li><a href="gaz.php">Gaz</a> <span> <?php pastille_etat_gaz($_SESSION['id'],$db) ?></span></li>
                            <li><a href="elec.php">Electricité</a> <span> <?php pastille_etat_elec($_SESSION['id'],$db) ?></span></li>
                        </ul>
                    </li>
                    
                        <li><a class="bouton_type" href="ajout_piece.php">+  AJOUTER une pièce</a></li>
                        <li><a class="bouton_type" href="suppr.php">- SUPPRIMER une pièce</a></li>
                        <li><a class="bouton_type" href="detailpiece.php">= DÉTAILS des pièces</a></li>
                </ul>
	       	</div>
            <div id=boite>
                <?php cascade_suppr($_SESSION['id'],$db) ?>
            </div>
            <?php include ("footer_user.php");?>
        </div>
        <script src="../../JS/myjs.js"></script>
	</body>
</html>

<!DOCTYPE HTML>
<?php require("../Controleur/fonctions.php");
//Se connecte à la base de données
//require("../Modele/connexionBDD.php");
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
            <div id=boite>
                <?php cascade_suppr(1,$db) ?>
                
                <a class="boutons_retour" href="etat.php" >Retour</a>
            </div>
        </div>
         <?php include ("../footer.php");?> 
	</body>
</html>

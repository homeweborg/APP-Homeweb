<!DOCTYPE HTML>
<?php require("../Controleur/fonctions.php");
//Se connecte à la base de données
require("../Modele/connexionBDD.php");
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
                    <ul>
                        
                        <img class ="image_temp" src="image/gaz.png"/>
                        
                        <li>Consommation depuis le début du mois :<span><?php echo (Conso_Gaz(1,$db)) ?> m3</span></li>
                        <li>Estimation du coût : <span><?php echo (Estim_Gaz(1,$db)) ?> €</span></li>
                        <li>État : <span>Marche</span></li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" <?php if (Etat_gaz(1,$db) == 1) { ?> checked <?php } ?>>
                                <div class="slider"></div>
                            </label>
                        
                        </li>
                        <li><I style="font-size : 14px;">L' estimation correspond à une moyenne des prix, renseignez-vous auprès de votre fournisseur pour plus de renseignements</I></li>
                    </ul>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="signaler.php">Signaler</a>
                    
                </div>
                
        </body>
</html>

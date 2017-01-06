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
                    <li>Température moyenne <span><?php echo temp_moyenne(1,$db) ?> °C</span></li>
                    <li>Etat général des capteurs <span>OK</span></li>                
                    <li>Eau 
                    
                    <label class="switch">
                        <input type="checkbox" <?php if (Etat_eau(1,$db) == 1) { ?> checked <?php } ?> >
                        <div class="slider"></div>
                    </label>
                    
                    </li>
                    <li>Electricité                   
                    <label class="switch">
                        <input type="checkbox" <?php if (Etat_elec(1,$db) == 1) { ?> checked <?php } ?>>
                        <div class="slider"></div>
                    </label>
                        
                    </li>
                    <li>Gaz 
                        
                    <label class="switch">
                        <input type="checkbox" <?php if (Etat_gaz(1,$db) == 1) { ?> checked <?php } ?>>
                        <div class="slider"></div>
                    </label>
                        
                    </li>
                    <li>Nombre de lumières allumée(s) <span><?php echo nombre_lum_on(1,$db) ?></span></li>
                    
                    <li>Porte
                        
                    <label class="switch">
                        <input type="checkbox" <?php if (Etat_porte(1,$db) == 1) { ?> checked <?php } ?>>
                        <div class="slider"></div>
                    </label>
                        
                        </li>
                </ul>
            </div>
        </div>
	</body>
</html>

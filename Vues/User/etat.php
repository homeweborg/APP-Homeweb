<!DOCTYPE HTML>

<?php
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexion.php");
// On charge toutes les fonctions nécessaires
require("../../Modele/fonctions.php");
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
                include ("entete_user.php");
                ?>
            </header>
            <div id=capteurs>
                <ul>
                    <li><a href="#">Température</a>
                        <?php cascade_temp($_SESSION['id'],$db) ?> 
                    </li>                 
                    <li><a href="#">Lumière</a>
                        <?php cascade_lum($_SESSION['id'],$db) ?>
                    </li>             
                    <li><a href="#">Consommation</a>
                        <ul>
                            <li><a href="eau.php">Eau</a> <span> <?php pastille_etat_eau($_SESSION['id'],$db) ?></span></li>
                            <li><a href="gaz.php">Gaz</a> <span> <?php pastille_etat_gaz($_SESSION['id'],$db) ?></span></li>
                            <li><a href="elec.php">Electricité</a> <span> <?php pastille_etat_elec($_SESSION['id'],$db) ?></span></li>
                        </ul>
                    </li>
                    <li>
                        <a class="bouton_type" href="ajout_piece.php">+  AJOUTER une pièce</a>
                        <a class="bouton_type" href="suppr.php">- SUPPRIMER une pièce</a>
                    </li>
                </ul>
	       	</div>
            <div id=boite>
                <form name="login" action="../Controleur/valid_etat.php?piece=<?php echo($_GET['piece']); ?>" method="post" accept-charset="utf-8">
                <ul>
                    <li>Température moyenne <span><?php echo temp_moyenne(1,$db) ?> °C</span></li>
                    <li>Etat général des capteurs <?php etat_general_capteur($_SESSION['id'],$db) ?></li>                
                    <li>Eau
                        <label class="switch">
                            <input type="checkbox" value=1 name="eau"<?php if (Etat_eau($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                            <div class="slider"></div>
                        </label>      
                    </li>
                    <li>Electricité               
                        <label class="switch">
                            <input type="checkbox" value=1 name="elec" <?php if (Etat_elec($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                            <div class="slider"></div>
                        </label>
                    </li>
                    <li>Gaz
                        <label class="switch">
                            <input type="checkbox" value=1 name="gaz"<?php if (Etat_gaz($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                            <div class="slider"></div>
                        </label>
                    </li>
                    <li>Nombre de lumières allumée(s) <span><?php echo nombre_lum_on(1,$db) ?></span></li>
                    <li>Porte
                        <label class="switch">
                            <input type="checkbox" value=1 name="porte" <?php if (Etat_porte($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                            <div class="slider"></div>
                        </label>                 
                    </li>
                </ul>
                    <input id="boutons_valider" type="submit" name="bouton_submit" value="Valider"/>
                </form>
            </div>
            <?php include ("../footer.php");?> 
        </div>
	</body>
</html>

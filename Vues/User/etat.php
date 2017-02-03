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
                    <li>
                        <a class="bouton_type" href="ajout_piece.php">+  AJOUTER une pièce</a>
                        <a class="bouton_type" href="suppr.php">- SUPPRIMER une pièce</a>
                        <a class="bouton_type" href="detailpiece.php">= DÉTAILS des pièces</a>
                    </li>
                </ul>
	       	</div>
            <div id=boite>
                <form name="login" action="../Controleur/valid_etat.php?piece=<?php echo($_GET['piece']); ?>" method="post" accept-charset="utf-8">
                <ul>
                    <li>Température moyenne <span><?php echo temp_moyenne($_SESSION['id'],$db) ?> °C</span></li>
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
                    <li>Nombre de lumières allumée(s) <span><?php echo nombre_lum_on($_SESSION['id'],$db) ?></span></li>
                    <li>Porte
                        <label class="switch">
                            <input type="checkbox" value=1 name="porte" <?php if (Etat_porte($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                            <div class="slider"></div>
                        </label>                 
                    </li>
                </ul>
                    <input id="boutons_valider" type="submit" name="bouton_submit" value="Valider"/>
                    <span class="bouton_rafraichir"><a class="texte" href="etat.php"><img class="image" src="../../Styles/image/refresh.png"> Rafraîchir</a></span>
                    <?php if (isset($_GET["message"])){$message = $_GET["message"];echo("<br/><br><I class=\"erreur\">$message</I>");}?>
                </form>
            </div>
            <?php include ("footer_user.php");?> 
        </div>
            <script src="../../JS/myjs.js"></script>
	</body>
</html>

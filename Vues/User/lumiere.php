<!DOCTYPE HTML>
<?php 
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexion.php");
require("../../Modele/fonctions.php");
//Se connecte à la base de données
require("../../Modele/connexionBDD.php");
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
                        <a class="bouton_type" href="detailpiece.php">= DÉTAILS des pièces</a>
                    </li>
            </ul>
	       	</div>
                <div id=boite>
                <form name="login" action="../Controleur/valid_lum.php?piece=<?php echo($_GET['piece']); ?>" method="post" accept-charset="utf-8">

                    <ul>
                        
                        <div id = image_etat><img class ="image_temp" src="image/light.png"/></div>
                        
                        <li>Capteur de luminosité N° <span><?php affiche_num_capt_lum($_SESSION['id'],$db) ?></span></li>
                        <li>Dernier contrôle technique : <span><?php affiche_contol_tech_lum($_SESSION['id'],$db) ?></span></li>
                        <li>État : <span><?php affiche_etat_capt_lum($_SESSION['id'],$db) ?></span></li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" name="box" value=1 <?php if (Etat_lum($_SESSION['id'],$db) == 1) { ?> checked <?php } ?>>
                                <div class="slider"></div>
                            </label>
                        
                        </li>
                    </ul>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="signaler.php">Signaler</a>
                    <input id="boutons_valider" type="submit" name="bouton_submit" value="Valider"/>
                    </form> 
              </div>
            <?php include ("../footer.php");?> 
        </div>
        </body>
</html>

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
                <li>
                        <a class="bouton_type" href="ajout_piece.php">+  AJOUTER une pièce</a>
                        <a class="bouton_type" href="suppr.php">- SUPPRIMER une pièce</a>
                        <a class="bouton_type" href="detailpiece.php">= DÉTAILS des pièces</a>
                    </li>
            </ul>
	       	</div>
                <div id=boite>
                    <form name="login" action="../../Controleur/valid_elec.php?piece=<?php echo($_GET['piece']); ?>" method="post" accept-charset="utf-8">
                    <ul>
                        
                        <div id = image_etat><img class ="image_temp" src="../../Styles/image/elec.png"/></div>
                        
                        <li>Consommation depuis le début du mois :<span><?php echo (Conso_Elec($_SESSION['id'],$db)) ?> kWh</span></li>
                        <li>Estimation du coût : <span><?php echo (Estim_Elec($_SESSION['id'],$db)) ?> €</span></li>
                        <li>État : <span><?php pastille_etat_elec($_SESSION['id'],$db) ?></span></li>
                        <li>Prix du kWh : <span><input type="text" class="Prix_entree" name="Prix_elec" value=<?php echo(affiche_prix_elec($_SESSION['id'],$db)) ?> placeholder="en €"></span></li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" value=1 name="box" <?php if (Etat_elec(1,$db) == 1) { ?> checked <?php } ?>>
                                <div class="slider"></div>
                            </label>
                        
                        </li>
                        <li><I style="font-size : 14px;">Par défaut le prix d'un kWh d'électricité est fixé à 0.6 € (Moyenne Française 2015)</I></li>
                    </ul>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="signaler.php">Se renseigner</a>
                    <input id="boutons_valider" type="submit" name="bouton_submit" value="Valider"/>
                    </form>
                </div>
            <?php include ("footer_user.php");?> 
        </div>
            <script src="../../js/myjs.js"></script>
        </body>
</html>

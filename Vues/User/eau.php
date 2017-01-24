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
	</head>
	<body>
		<div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <?php include ("entete_user.php");?>
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
                    <form name="login" action="../../Controleur/valid_eau.php?piece=<?php echo($_GET['piece']); ?>" method="post" accept-charset="utf-8">
                    <ul>
                        
                        <div id = image_etat><img class ="image_temp" src="../../Styles/image/eau.png"/></div>
                        
                        <li>Consommation depuis le début du mois :<span><?php echo (Conso_Eau($_SESSION['id'],$db)) ?> m3</span></li>
                        <li>Estimation du coût : <span><?php echo (Estim_Eau($_SESSION['id'],$db)) ?> €</span></li>
                        <li>État : <span>Marche</span></li>
                        <li>Prix du m3 : <span><input type="text" class="Prix_entree" name="Prix_eau" value=<?php echo(affiche_prix_eau($_SESSION['id'],$db)) ?> placeholder="en €"></span></li>
                        <li>
                            <label class="switch">
                                <input type="checkbox" name="box" value=1 <?php if (Etat_eau($_SESSION['id'],$db) == 1) { ?> checked <?php } ?> >
                                <div class="slider"></div>
                            </label>
                        
                        </li>
                        <li><I style="font-size : 14px;">Par défaut le prix d'un m3 d'eau est fixé à 3.1 € (Moyenne Française 2015)</I></li>
                    </ul>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="../contact.php">Se renseigner</a>
                    <input id="boutons_valider" type="submit" name="bouton_submit" value="Valider"/>
                    </form>
                </div>
                <?php include ("../footer.php");?>
            </div>
        </body>
</html>

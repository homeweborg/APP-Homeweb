<!DOCTYPE HTML>
<?php require("../Controleur/fonctions.php");
//Se connecte à la base de données
require("../Modele/connexionBDD.php");

//on vérifie si un utilisateur est connecté
require("../Controleur/verifconnexion.php");
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
                        <?php cascade_temp($_SESSION['id'],$db) ?>
                    </li>
                    
                    <li><a href="#">Lumière</a>
                        <?php cascade_lum($_SESSION['id'],$db) ?>
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
                        
                        <div id = image_etat><img class ="image_temp" src="image/temperature.png"/></div>
                        
                        <li>Capteur de température N° <span>12</span></li>
                        <li>Dernier contrôle technique : <span>02/01/2017</span></li>
                        <li>État : <span>Marche</span></li>
                        <li>Température ambiante : <span>20 °C</span></li>
                    </ul>
                    
                    <div>
                
                        <input class="barre_temp" type="range" id="mabarre" min="0" max="40" onchange="FunctionTemp(this.value);"/>
                        <p>Valeur demandée :  <span id="valeurTemp"></span> °C</p>
                        
                        <script>
function FunctionTemp() {
    var x = document.getElementById("mabarre").value;
    document.getElementById("valeurTemp").innerHTML = x;
}
                        </script>
                        
                    </div>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="signaler.php">Signaler</a>
                    
                </div>
                 <?php include ("../footer.php");?> 
        </body>
</html>

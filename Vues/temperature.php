<!DOCTYPE HTML>
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
                    <ul>
                        <li><a href="temperature.php">Salon</a></li>
                        <li><a href="temperature.php">Salle de bain</a></li>
                        <li><a href="temperature.php">Chambre parentale</a></li>
                        <li><a href="temperature.php">Chambre des enfants</a></li>       
                    </ul>
                </li>
                <li><a href="#">Lumière</a>
                    <ul>
                        <li><a href="lumiere.php">Salon</a></li>
                        <li><a href="lumiere.php">Salle de bain</a></li>
                        <li><a href="lumiere.php">Chambre parentale</a></li>
                        <li><a href="lumiere.php">Chambre des enfants</a></li>
                    </ul>
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
                        <a class="bouton_type" href="#">- SUPPRIMER une pièce</a>
                    </li>
            </ul>
	       	</div>
                <div id=boite>
                    <ul>
                        
                        <img class ="image_temp" src="image/temperature.png"/>
                        
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
                
        </body>
</html>

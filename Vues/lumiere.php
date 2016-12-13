<!DOCTYPE HTML>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles/main.css" />
	</head>
	<body>
		<div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <div id="logo">
                    <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" />   
                </div>            
                <nav>
                    <ul>
                        <li><a href="accueil.php">Accueil</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="moncompte.php">Mon compte</a></li>
                        <div id="actuel"><li><a href="etat.php">Etat</a></li></div>
                        <div id=logodeco><a href="accueil.php"><img src="image/onoff.png"></a></div>
                    </ul>
                </nav>
            </header>
            <div id=capteurs>
            <ul>
                <li><a href="temperature.php">Température</a>
                    <ul>
                        <li><a href="#">Salon</a></li>
                        <li><a href="#">Salle de bain</a></li>
                        <li><a href="#">Chambre parentale</a></li>
                        <li><a href="#">Chambre des enfants</a></li>       
                    </ul>
                </li>
                <li><a href="#">Lumière</a>
                    <ul>
                        <li><a href="#">Salon</a></li>
                        <li><a href="#">Salle de bain</a></li>
                        <li><a href="#">Chambre parentale</a></li>
                        <li><a href="#">Chambre des enfants</a></li>
                    </ul>
                </li>
                <li><a href="#">Consommation</a>
                    <ul>
                        <li><a href="#">Eau</a></li>
                        <li><a href="#">Gaz</a></li>
                        <li><a href="#">Electricité</a></li>
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
                        
                        <img class ="image_temp" src="image/light.png"/>
                        
                        <li>Capteur de luminosité N° </li>
                        <li>Dernier contrôle technique :</li>
                        <li>État : </li>
                        <li>
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider"></div>
                            </label>
                        
                        </li>
                    </ul>
                    
                    <a class="boutons_retour" href="etat.php" >Retour</a>
                    
                    <a class="boutons_retour" href="signaler.php">Signaler</a>
                    
                </div>
                
        </body>
</html>
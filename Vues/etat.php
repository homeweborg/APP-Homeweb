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
                        <li><a href="Vues/accueil.php">Accueil</a></li>
                        <li><a href="Vues/contact.php">Contact</a></li>
                        <li><a href="Vues/moncompte.php">Mon compte</a></li>
                        <div id="actuel"><li><a href="Vues/etat.php">Etat</a></li></div>
                    </ul>
                </nav>
            </header>
            <div id=capteurs>
                <ul>
                    <li><a href="#">Température</a>
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
                </ul>
	       	</div>
            <div id=boite>
                <ul>
                    <li>Température moyenne</li>
                    <li>Etat général des capteurs</li>                
                    <li>Eau 
                    
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider"></div>
                    </label>
                    
                    </li>
                    <li>Electricité                   
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider"></div>
                    </label>
                        
                    </li>
                    <li>Gaz 
                        
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider"></div>
                    </label>
                        
                    </li>
                    <li>Nombre de lumières allumée(s)</li>
                    
                    <li>Porte
                        
                    <label class="switch">
                        <input type="checkbox">
                        <div class="slider"></div>
                    </label>
                        
                        </li>
                </ul>
            </div>
        </div>
	</body>
</html>

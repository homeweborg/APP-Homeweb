<!DOCTYPE HTML>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Styles/main.css" />
	</head>
	<body>
		<div id="page">
		<!-- Header -->
            <header> <!-- En tete -->
                <div id="logo">
                    <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" />
                </div>
                <nav>
                    <ul>
                        <div><li><a href="../accueil.php">Accueil</a></li></div>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="moncompte.php">Mon compte</a></li>
                        <li><a href="etat.php">Etat</a></li>
                        <div id=logodeco><a href="accueil.php"><img src="image/onoff.png"></a></div>
                    </ul>
                </nav>
            </header>
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formsignup>
                    <form name="login" action="etat.php" method="get" accept-charset="utf-8">
					   <h1> Ajouter une pièce </h1>
                        <div id="signupinput">
                            <p> <b>Nom de la pièce à ajouter</b></p>
                            
                            <input type="text" name="nom_piece" required placeholder="Ex : Salle à manger">
                            
                            <p><br><b>Capteur(s) présent(s) dans la pièce</b></p>
                            <ul>
                                <li>Température  
                            <input type="checkbox"><br>
                                Reférence du capteur <span class="champoblig">* </span><input type="text" placeholder="Ex : 123456789"> 
                                </li> 
                                <br><li>Lumière
                            <input type="checkbox"><br>Reférence du capteur <span class="champoblig">* </span><input type="text" placeholder="Ex : 123456789"></li>
                                
                            </ul>
                            
                            <input class="boutons_piece" type="submit" value="Ajouter une pièce" onClick="window.location.href='signup.html'">
                            
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</body>
</html>
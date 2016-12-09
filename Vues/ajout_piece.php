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
                        <div id="actuel"><li><a href="Vues/accueil.php">Accueil</a></li></div>
                        <li><a href="Vues/contact.php">Contact</a></li>
                        <li><a href="Vues/moncompte.php">Mon compte</a></li>
                        <li><a href="Vues/etat.php">Etat</a></li>
                    </ul>
                </nav>
            </header>
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formsignup>
                    <form name="login" action="Vues/etat.php" method="get" accept-charset="utf-8">
					   <h1> Ajouter une pièce </h1>
                        <div id="signupinput">
                            <p> <b>Nom de la pièce à ajouter</b></p>
                            
                            <input type="text" name="nom_piece" required>
                            
                            <p><br><b>Capteur(s) présent(s) dans la pièce</b></p>
                            <ul>
                                <li>Température  
                            <input type="checkbox"><br>
                                Ref : <input type="text"> 
                                </li> 
                                <br><li>Lumière
                            <input type="checkbox"><br>Ref : <input type="text"></li>
                                
                            </ul>
                            
                            <input class="boutons_piece" type="submit" value="Ajouter une pièce" onClick="window.location.href='signup.html'">
                            
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</body>
</html>
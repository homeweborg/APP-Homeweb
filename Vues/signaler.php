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
					   <h1> Signaler un problème </h1>
                        <div id="signupinput">
                            <p> <b>Référence du capteur défaillant </b><I style="font-size : 12px">(Si le problème concerne un capteur)</I></p>
                            
                            <input type="text" name="capteurD" required placeholder="Ex : 123456789">
                            
                            <p><br><b>Décrivez la nature du problème</b><span class="champoblig"> * </span>
                            </p>
                            
                            <textarea type="text" class="description" name="descriptioncapteurD"></textarea>
                            
                            <input class="boutons_piece" type="submit" value="Signaler le capteur" onClick="window.location.href='#'">
                            
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</body>
</html>
<!DOCTYPE HTML>

<html>
    
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="Vues/Styles/main.css" />
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
                        <div id="actuel"><li><a href="accueil.php">Accueil</a></li></div>
                        <li><a href="Vues/contact.php">Contact</a></li>
                        <li><a href="Vues/moncompte.php">Mon compte</a></li>
                        <li><a href="Vues/etat.php">Etat</a></li>
                        <div id=logodeco><a href="accueil.php"><img src="Vues/image/onoff.png"></a></div>
                    </ul>
                </nav>
            </header>
                
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formlogin>
                    <form name="login" method="post" action="connexion2.php" accept-charset="utf-8">
					   <h1> IDENTIFICATION </h1>
                        <div id="idinput">
                            <p> Nom d'utilisateur</p>
                            <input type="username" name="username" required>
                            <p> Mot de passe</p>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <input class="boutons_id" type="submit" value="login">
                            <input class="boutons_id" type="submit" value="signup" onClick="window.location.href='Vues/signup.php'">
                        </div>                             
                    </form>
                </div>
			</section>
                
		</div>
	</body>
        
</html>
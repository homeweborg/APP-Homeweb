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
            <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" title="Logo HomeWeb"/>
        </div>
        <nav>
            <ul>
                <li><a href="Vues/etat.php">Etat de la maison</a></li>
                <li><a href="Vues/infos.php">Mes informations</a></li>
                <li><a href="Vues/contact.php">Contact</a></li>
                <div id=logodeco><a href="Controleur/logout.php"><img src="Vues/image/onoff.png"></a></div>
            </ul>
        </nav>
            </header>       
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formlogin>
                    <form name="login" method="post" action="Controleur/connexion.php" accept-charset="utf-8">
					   <h1> IDENTIFICATION </h1>
                        <div id="idinput">
                            <p>Adresse mail</p>
                            <input type="username" name="username" required>
                            <p>Mot de passe</p>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <input class="boutons_id" type="submit" value="Login">
                            <input class="boutons_id" type="submit" value="Signup" onClick="window.location.href='Vues/signup.php'">
                        </div>                             
                    </form>
                </div>
			</section>
        <?php include ("footer.php");?>    
		</div>
	</body>
        
</html>
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
            <header>
                <div id="logo">
                    <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" />
                </div>
                <nav>
                    <ul>
                        <li><a href="../accueil.php">Accueil</a></li>
                        <div id="actuel"><li><a href="contact.php">Contact</a></li></div>
                        <li><a href="moncompte.php">Mon compte</a></li>
                        <li><a href="etat.php">Etat</a></li>
                        <div id=logodeco><a href="../accueil.php"><img src="image/onoff.png"></a></div>
                    </ul>
                </nav>
            </header>
            <div id=confirmationform>
                <p>
                    Nom : <?php echo $_POST['nom'];?>
                    <br> Prénom : <?php echo $_POST['prenom'];?>
                    <br> Adresse : <?php echo $_POST['adresse'];?>
                    <br> Mail : <?php echo $_POST['mail'];?>
                    <br> Anniversaire : <?php echo $_POST['anniversaire'];?>
                    <br> Téléphone : <?php echo $_POST['telephone'];?>
                    <br> Confirmez-vous ces données ?
                    <form name='conflogin' action='../Controleur/inscription.php' method="post" accept-charset="utf-8">
                        <input id="boutons_signup" type="submit" value="Oui"/></form>
                </p>
            </div>
		</div>
	</body>
</html>
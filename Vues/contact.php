<!DOCTYPE HTML>

<html>
	<head>
		<title>HomeWeb</title>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Styles/main.css" />
	</head>
	<body>
		<div id="page">
        <!-- Header -->
            <header>
                <?php include ("entete.php");?>
            </header>
            <div id=formcontact>
                    <form name="login" action="../Controleur/contact.php" method="post" accept-charset="utf-8">
					   <h1> Nous contacter </h1>
                        <div id="signupinput">
                            <p> <b>Votre adresse mail:</b><span class="champoblig"> * </span></p>
                            <input type="text" name="nom" required placeholder="Ex : noe.faure@isep.fr">
                            <p><br> <b>Objet de votre demande</b><span class="champoblig"> * </span></p>
                            
                            <input type="text" name="objet" required placeholder="Ex : Problème de connection">
                            
                            <p><br><b>Exprimez-vous</b><span class="champoblig"> * </span></p>
                            
                            <textarea type="text" class="description" name="demande"></textarea>
                            
                            <input class="boutons_contact_envoyer" type="submit" value="Envoyer" onClick="window.location.href='#'">
                            
                        </div>
                    </form>
                </div>
        <?php include ("footer.php");?>
		</div>
	</body>
</html>
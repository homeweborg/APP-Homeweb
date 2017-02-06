<!DOCTYPE HTML>

<?php //Se connecte à la base de données
require("../Modele/connexionBDD.php");
?>

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
                            <p><b>Objet de votre demande</b><span class="champoblig"> * </span></p>
                            
                            <select type="text" name="objet" required>
                                <option>Mot de passe oublié
                                <option>Mon adresse mail n'est pas reconnue
                                    <option>Où puis-je trouver mon numéro de capteur
                                        <option>Mon numéro de capteur n'existe pas
                                            <option>Autres (précisez dans votre demande)
                            </select>
                            <p><b>Exprimez-vous</b><span class="champoblig"> * </span></p>
                            
                            <textarea type="text" class="description" name="demande"></textarea>
                                    <?php if (isset($_GET["msg"])){$msg = $_GET["msg"];echo("<br/><br><I class=\"msg\">$msg </I>");}?>
                                    <?php if (isset($_GET["erreur"])){$erreur = $_GET["erreur"];echo("<br/><br><I class=\"erreur\">$erreur </I>");}?>
                            <input class="boutons_contact_envoyer" type="submit" value="Envoyer">
                            
                        </div>
                    </form>
                </div>
        <?php include ("footer.php");?>
		</div>
	</body>
</html>
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
		<!-- Body -->
			<section class="loginform cf">
                <div id= formsignup>
				    <form name="login" action="../Controleur/inscription.php" method="post" accept-charset="utf-8">
                        <h1> Bienvenue sur HomeWeb </h1>
                        <div id="signupinput">
                            <p>Adresse mail :</p>
                            <input type="mail" name="mail" required placeholder="Ex : domisep@isep.fr" autocomplete="off">
                            <p>Choisissez un mot de passe :</p>
                            <input type="password" name="mdp" required placeholder="Ex : Motdepasse123" autocomplete="off">
                            <p>Confirmer votre mot de passe :</p>
                            <input type="password" name="mdpc" required placeholder="Ex : Motdepasse123" autocomplete="off">
                            <p>Numéro du capteur acheté :</p>
                            <input type="string" name="numero_capteur" required placeholder="Ex : A7TB0Y6TE86F" autocomplete="off">
                        </div>
                            </br><input type="checkbox" name="cgu" required><a href="mentionlegal.php" target=_blank>Je confirme avoir lu les mentions légales</a>
                    </br>
                        <?php if (isset($_GET["erreur"])){$erreur = $_GET["erreur"];echo("<I class=\"erreur\">$erreur</I>");}?>
                        <?php if (isset($_GET["msg"])){$msg = $_GET["msg"];echo("<I class=\"msg\">$msg </I>");}?>
                    

                        <input id="boutons_signup" type="submit" name="bouton_submit" value="SIGN UP"/>
				    </form>
                <h2 class="infos_confidentialite">Tous les champs sont obligatoires. <br><br>Le Numéro du capteur Domisep acheté peut être trouvé sur le capteur.<br><br>Suite à votre inscription, vos numéros d'effecteurs primaires vont vous être demandés, veuillez préparer ces numéros.</h2>
                </div>
			</section>
           
		</div>
	</body>
             <?php include ("footer.php");?>

</html>
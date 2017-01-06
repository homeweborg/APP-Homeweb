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
                <?php 
                include ("../entete.php");
                ?>
            </header>
		<!-- Body -->
			<section class="loginform cf">
                <div id= formsignup>
				    <form name="login" action="../Controleur/inscription.php" method="post" accept-charset="utf-8">
                        <h1> Bienvenue sur HomeWeb </h1>
                        <div id="signupinput">
                            <p>Adresse mail :</p>
                            <input type="mail" name="mail" required placeholder="Ex : domisep@isep.fr">
                            <p>Choisissez un mot de passe :</p>
                            <input type="password" name="mdp" required placeholder="Ex : Motdepasse123">
                            <p>Confirmer votre mot de passe :</p>
                            <input type="password" name="mdpc" required placeholder="Ex : Motdepasse123">
                            <p>Numéro de série d'un capteur :</p>
                            <input type="string" name="Numero_Homeweb" required placeholder="Ex : A7TB0Y6TE86F">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="SIGN UP"/>
				    </form>
                <h2 class="infos_confidentialite">Tous les champs sont obligatoires.</h2>
                </div>
			</section>
		</div>
		<!-- Footer -->
			<footer>
			</footer>
	</body>
</html>
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
                        <div id="actuel"><li><a href="../accueil.php">Accueil</a></li></div>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="moncompte.php">Mon compte</a></li>
                        <li><a href="etat.php">Etat</a></li>
                        <div id=logodeco><a href="accueil.php"><img src="image/onoff.png"></a></div>
                    </ul>
                </nav>
            </header>
		<!-- Body -->
			<section class="loginform cf">
                <div id= formsignup>
				    <form name="login" action="../Vues/confirmation.php" method="post" accept-charset="utf-8">
                        <h1> Bienvenue sur HomeWeb </h1>
                        <div id="signupinput">
                            <p>Nom de famille <span class="champoblig">*</span></p>
                            <input type="text" name="nom" required placeholder="Ex : Rimbaud">
                            <p>Prénom <span class="champoblig">*</span></p>
                            <input type="text" name="prenom" required placeholder="Ex : Arthur">
                            <p>Adresse Postale <span class="champoblig">*</span></p>
                            <input type="text" name="adresse" required placeholder="Ex : 12 rue Napoléon, 08105, Charleville">
                            <p>Adresse mail <span class="champoblig">*</span></p>
                            <input type="email" name="mail" required placeholder="Ex : arthur.rimbaud@exemple.fr">
                            <p>Votre Anniversaire <span class="champoblig">*</span></p>
                            <input type="date" name="anniversaire" required placeholder="10/11/1891">
                            <p>Numéro de téléphone <span class="champoblig">*</span></p>
                            <input type="tel" name="telephone" required placeholder="Ex : 0612345678">
                            <p>Choisissez un mot de passe <span class="champoblig">*</span> </p>
                            <input type="password" name="mdp" required placeholder="Ex : Motdepasse123">
                            <p>Confirmer votre mot de passe <span class="champoblig">*</span></p>
                            <input type="password" name="mdpc" required placeholder="Ex : Motdepasse123">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="SIGN UP"/>
				    </form>
                </div>
                <h2 class="infos_confidentialite">Les champs marqués d'une étoile <span class="champoblig">*</span>orange sont obligatoires, ces informations sont indispenssables au bon fonctionnement de la plateforme HomeWeb.<br><br>Ces informations sont personnelles, elles ne seront en aucun cas divulgées publiquement. Merci de votre confiance.</h2>
			</section>
		</div>
		<!-- Footer -->
			<footer>
			</footer>
	</body>
</html>
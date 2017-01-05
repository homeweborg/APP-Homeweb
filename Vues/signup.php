<!DOCTYPE HTML>
<?php
//on vérifie si un utilisateur est connecté
require("../Controleur/verifconnexion.php");
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
                            <p>Numéro d'identification Homeweb <span class="champoblig">*</span></p>
                            <input type="tel" name="Numero_Homeweb" required placeholder="Ex : 123456789">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="SIGN UP"/>
				    </form>
                </div>
                <h2 class="infos_confidentialite">Les champs marqués d'une étoile <span class="champoblig">*</span>orange sont obligatoires, ces informations sont indispenssables au bon fonctionnement de la plateforme HomeWeb.<br><br>Ces informations sont personnelles, elles ne seront en aucun cas divulgées publiquement. Merci de votre confiance.<br><br>Les comptes Homeweb sont uniquement réservés au clients de notre plateforme. Le numéro d'identification vous a été fournie par Homeweb et permet d'attester que vous êtes vraiment client.</h2>
			</section>
		</div>
		<!-- Footer -->
			<footer>
			</footer>
	</body>
</html>
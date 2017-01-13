<!DOCTYPE HTML>
<?php
require("../Controleur/fonctions.php");
//Se connecte à la base de données
require("../Modele/connexionBDD.php");
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
				    <form name="login" action="../Controleur/modifier.php" method="post" accept-charset="utf-8">
                        <h1> Votre Profil </h1>
                        <div id="signupinput">
                            <p>Modifier son adresse mail :</p>
                            <input type="mail" name="mail" required placeholder="Ex : domisep@isep.fr">
                            <p>Choisissez un nouveau mot de passe :</p>
                            <input type="password" name="mdp" required placeholder="Ex : Motdepasse123">
                            <p>Confirmer votre nouveau mot de passe :</p>
                            <input type="password" name="mdpc" required placeholder="Ex : Motdepasse123">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="Modifier"/>
				    </form>
                </div>
			</section>
                <p> 
                    <br> <b>Adresse mail</b> <?php echo $_SESSION['mail'];?>
                    <br> <b>Mot de passe</b> ******
                    
                    <br><input class="boutons_modif" type="submit" value="Modifier" onClick="window.location.href='signup.php'">
                </p>
            <?php include ("../footer.php");?> 
        </div>
	</body>
</html>
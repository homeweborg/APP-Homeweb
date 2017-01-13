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
                            <p>Votre adresse mail :
                            <?php echo $_SESSION['mail'];?></p>
                            <p>Renseignez votre mot de passe actuel :</p>
                            <input type="password" name="amdp" required placeholder="*******">
                            <p>Choisissez un nouveau mot de passe :</p>
                            <input type="password" name="mdp" required placeholder="Ex : Motdepasse123">
                            <p>Confirmer votre nouveau mot de passe :</p>
                            <input type="password" name="mdpc" required placeholder="Ex : Motdepasse123">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="Modifier"/>
				    </form>
                </div>
			</section>
            <?php include ("../footer.php");?> 
        
        </div>
	</body>
</html>
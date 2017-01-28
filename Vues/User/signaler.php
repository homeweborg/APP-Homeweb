<!DOCTYPE HTML>
<?php
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexion.php");

//Se connecte à la base de données
require("../../Modele/connexionBDD.php");

?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../../Styles/main.css" />
	</head>
	<body>
		<div id="page">
		<!-- Header -->
            <header> <!-- En tete -->
                <?php 
                include ("entete_user.php");
                ?>
            </header>
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formpb>
                    <form name="login" action="../../Controleur/probleme.php" method="post" accept-charset="utf-8">
					   <h1> Signaler un problème </h1>
                        <div id="signupinput">
                            <p> <b>Votre adresse mail </b><I style="font-size : 12px"></I></p>
                            
                            <input type="text" name="nom" value=<?php echo($_SESSION['mail']); ?> >
                            
                            <p> <b>Référence du capteur défaillant </b><I style="font-size : 12px">(Si le problème concerne un capteur)</I></p>
                            
                            <input type="text" name="capteurD" required value="<?php if(isset($_GET['num_capteur'])){ echo($_GET['num_capteur']); } ?>">
                            <p> <b>Objet de votre demande</b><span class="champoblig"> * </span></p>
                            
                            <select type="text" name="objet" required>
                                <option>Un problème inexistant est signalé
                                <option>Les infos reçues sont fausses
                                <option>Je n'arrive pas à envoyer d'ordre
                                <option>Autres (précisez votre problème ci-dessous)
                            </select>
                            
                            <p><b>Décrivez la nature du problème</b><span class="champoblig"> * </span>
                            </p>
                            
                            <textarea type="text" class="description" name="probleme"></textarea>
                            
                            <input class="boutons_piece" type="submit" value="Signaler" onClick="window.location.href='#'">
                            
                        </div>
                    </form>
                </div>
			</section>
            <?php include ("footer_user.php");?> 
		</div>
	</body>
</html>
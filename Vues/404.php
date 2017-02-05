<!DOCTYPE HTML>

<?php
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
            <header> <!-- En tete -->
                <?php include ("entete.php");?>
            </header>       
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formmention>
                    <h1 class="erreur_404">Erreur 404</h1>
                    <h2>La page que vous avez demandé est introuvable.</h2>
                    <p>La page n'existe pas ou peut être plus.<br>
                    Merci de vérifier que vous avez bien saisi une adresse valide.<br>
                    Retour à la d'accueil : <a href="User/etat.php">en cliquant ici</a></p>
                    
                </div>
			</section>
                <?php include ("footer.php");?>   
		</div>
	</body>
        
</html>
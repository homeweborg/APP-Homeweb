<!DOCTYPE HTML>
<?php require("../Controleur/fonctions.php");
//Se connecte à la base de données
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
                <div id="logo">
            <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" title="Logo HomeWeb"/>
        </div>
        <nav>
            <ul>
                <li><a href="Vues/etat.php">Etat de la maison</a></li>
                <li><a href="Vues/infos.php">Mes informations</a></li>
                <li><a href="Vues/contact.php">Contact</a></li>
                <div id=logodeco><a href="Controleur/logout.php"><img src="image/onoff.png"></a></div>
            </ul>
        </nav>
            </header>       
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formmention>
                    <?php
                    
                    $mention ="";

                    $reponse = $db->prepare('SELECT contenu FROM domisep WHERE nom= ?');
                    $reponse->execute(array("mentions"));

                        while ($donnees = $reponse->fetch())
                        {
                           $mention = $donnees['contenu'];
                        }

                        echo($mention);
                    
                    ?>
                </div>
			</section>
        <footer>
                <nav>
                    <ul>
                        <li><a href="#">Conditions</a></li>
                        <li>|</li>
                        <li><a href="#">Mentions légales</a></li>
                        <li>|</li>
                        <li><a href="#">Confidentialité</a></li>                        
                    <div id=social>
                        <ul>
                        <li><a href="image/facebook.png"><img src="image/facebook.png" alt="Facebook" title="Facebook"/></li>
                        <li><a href="image/twitter.png"><img src="image/twitter.png" alt="Twitter" title="Twitter"/></li>
                        <li><a href="image/linkedin.png"><img src="image/linkedin.png" alt="Linkedin" title="Linkedin"/></li>
                        </ul>
                    </div>
                    </ul>
                </nav>
            </footer>  
		</div>
	</body>
        
</html>
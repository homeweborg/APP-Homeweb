<!DOCTYPE HTML>
<?php require("../Modele/fonctions.php");
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
                <?php include ("footer.php");?>   
		</div>
	</body>
        
</html>
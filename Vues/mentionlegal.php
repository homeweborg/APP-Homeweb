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
                <?php include ("entete.php");?>
            </header>       
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formmention>
                    <?php
                    
                    $mention ="";

                    $reponse = $db->prepare('SELECT contenu FROM domisep_infos WHERE nom= ?');
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
<!DOCTYPE HTML>
<?php
//on vérifie si un utilisateur est connecté
//require("../Controleur/verifconnexion.php");
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
                <?php include ("../entete.php"); ?>
            </header>
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formsignup>
                    <form name="login" action="../Controleur/ajout.php" method="post" accept-charset="utf-8">
					   <h1> Ajouter une pièce </h1>
                        <div id="signupinput">
                            <p> <b>Nom de la pièce à ajouter</b></p>
                            
                            <input type="text" name="nom_piece" required placeholder="Ex : Salle à manger">
                            
                            <p><br><b>Capteur(s) présent(s) dans la pièce</b></p>
                            <ul>
                                <li>Température  
                            <input type="checkbox" name="box[]" value="temp"><br>
                                Reférence du capteur <span class="champoblig">* </span><input type="text" name="ref_temp" placeholder="Ex : 123456789" > 
                                </li> 
                                <br><li>Lumière
                            <input type="checkbox" name="box[]" value="lum"><br>Reférence du capteur <span class="champoblig">* </span><input type="text" placeholder="Ex : 123456789" name="ref_lum"></li>
                                
                            </ul>
                            
                            <input class="boutons_piece" type="submit" value="Ajouter une pièce">
                            
                        </div>
                    </form>
                </div>
			</section>
        <?php include ("../footer.php");?> 
		</div>
	</body>
</html>
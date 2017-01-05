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
            <header> <!-- En tete -->
                <?php 
                include ("../entete.php");
                ?>
            </header>
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formsignup>
                    <form name="login" action="etat.php" method="get" accept-charset="utf-8">
					   <h1> Ajouter une pièce </h1>
                        <div id="signupinput">
                            <p> <b>Nom de la pièce à ajouter</b></p>
                            
                            <input type="text" name="nom_piece" required placeholder="Ex : Salle à manger">
                            
                            <p><br><b>Capteur(s) présent(s) dans la pièce</b></p>
                            <ul>
                                <li>Température  
                            <input type="checkbox"><br>
                                Reférence du capteur <span class="champoblig">* </span><input type="text" placeholder="Ex : 123456789"> 
                                </li> 
                                <br><li>Lumière
                            <input type="checkbox"><br>Reférence du capteur <span class="champoblig">* </span><input type="text" placeholder="Ex : 123456789"></li>
                                
                            </ul>
                            
                            <input class="boutons_piece" type="submit" value="Ajouter une pièce" onClick="window.location.href='signup.html'">
                            
                        </div>
                    </form>
                </div>
			</section>
		</div>
	</body>
</html>
<!DOCTYPE HTML>
<?php
require("../../Modele/fonctions.php");
//Se connecte à la base de données
require("../../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexion.php");

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
            <header>
                <?php 
                include ("entete_user.php");
                ?>
            </header>
            
        <!-- Body -->                
                <section class="loginform cf">
                <div id= forminfos>
				    <form name="login" action="../../Controleur/premiereco.php" method="post" accept-charset="utf-8">
                        
                        
                        <h1>Vos actionneurs</h1>
                        
                        <table class="mes_infos">
                            
                        <tr><b><p>
                            
                            <td>Numéro de votre effecteur d'eau :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="eau" required></td>
                            
                        </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Numéro de votre effecteur d'électricité :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="elec" required></td>
                            
                        </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Numéro de votre effecteur de gaz :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="gaz" required></td>
                            
                        </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Numéro de votre effecteur de porte :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="porte" required></td>
                            
                        </p></b></tr>
                            
                        </table>
                        <?php if (isset($_GET["msg"])){$msg = $_GET["msg"];echo("<I class=\"msg\">$msg</I>");}?><?php if (isset($_GET["erreur"])){$erreur = $_GET["erreur"];echo("<I class=\"erreur\">$erreur</I>");}?>
                        <input id="boutons_modifier" type="submit" name="bouton_modifier" value="Enregistrer"/>
				    </form>
                </div>
			</section>
            <?php include ("footer_user.php");?> 
        
        </div>
	</body>
</html>
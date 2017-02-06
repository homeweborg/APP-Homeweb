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
				    <form name="login" action="../../Controleur/modifier.php" method="post" accept-charset="utf-8">
                        
                        
                        <h1>Votre Profil</h1>
                        <img class="image_profile" src="../../Styles/image/profile-user.png">
                        
                        <table class="mes_infos">
                            
                        <tr><b><p>
                            
                            <td>Votre adresse mail :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="mail" name="mail" required value="<?php echo $_SESSION['mail'];?>"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Votre nom :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="nom" required value="<?php echo $_SESSION['nom'];?>"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Votre prénom :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="prenom" required value="<?php echo $_SESSION['prenom'];?>"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Votre adresse postale :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="text" name="adresse" required value="<?php echo $_SESSION['adresse'];?>"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Votre téléphone :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="tel" name="tel" required value="<?php echo $_SESSION['tel'];?>"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Renseignez votre mot de passe actuel :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info" type="password" name="amdp" required placeholder="*******"></td>
                            
                            </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Choisissez un nouveau mot de passe :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info"type="password" name="mdp"  placeholder="Ex : Motdepasse123"></td>
                        
                        </p></b></tr>
                            
                        <tr><b><p>
                            
                            <td>Confirmer votre nouveau mot de passe :  </td>
                            <td><input class="info_champs" id=forminfos_input class="info"type="password" name="mdpc" <?php if (isset($_POST['mdp'])){echo("required");} ?> placeholder="Ex : Motdepasse123"></td>
                            
                            </p></b></tr>
                            
                <?php if (isset($_GET["msg"])){$msg = $_GET["msg"];echo("<I class=\"mdg\">$msg </I>");}?>
                <?php if (isset($_GET["erreur"])){$erreur = $_GET["erreur"];echo("<I class=\"erreur\">$erreur </I>");}?>
                            
                        </table>
                        <input id="boutons_modifier" type="submit" name="bouton_modifier" value="Modifier"/>
				    </form>
                </div>
			</section>
            <?php include ("footer_user.php");?> 
        
        </div>
	</body>
</html>
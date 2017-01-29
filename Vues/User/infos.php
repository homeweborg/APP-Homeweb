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
                        <b><p>Votre adresse mail :  <input id=forminfos_input class="info" type="mail" name="mail" required value="<?php echo $_SESSION['mail'];?>"></p></b>
                            <b><p>Votre nom :  <input id=forminfos_input class="info" type="text" name="nom" required value="<?php echo $_SESSION['nom'];?>"></p></b>
                            <b><p>Votre prénom :  <input id=forminfos_input class="info" type="text" name="prenom" required value="<?php echo $_SESSION['prenom'];?>"></p></b>
                            <b><p>Votre adresse postale :  <input id=forminfos_input class="info" type="text" name="adresse" required value="<?php echo $_SESSION['adresse'];?>"></p></b>
                            <b><p>Votre téléphone :  <input id=forminfos_input class="info" type="tel" name="tel" required value="<?php echo $_SESSION['tel'];?>"></p></b>
                            <b><p>Renseignez votre mot de passe actuel :  <input id=forminfos_input class="info" type="password" name="amdp" required placeholder="*******"></p></b>
                            <b><p>Choisissez un nouveau mot de passe :  <input id=forminfos_input class="info"type="password" name="mdp"  placeholder="Ex : Motdepasse123"></p></b>
                            
                            <b><p>Confirmer votre nouveau mot de passe :  <input id=forminfos_input class="info"type="password" name="mdpc" <?php if (isset($_POST['mdp'])){echo("required");} ?> placeholder="Ex : Motdepasse123"></p></b>
                        <input id="boutons_modifier" type="submit" name="bouton_modifier" value="Modifier"/>
				    </form>
                </div>
			</section>
            <?php include ("footer_user.php");?> 
        
        </div>
	</body>
</html>
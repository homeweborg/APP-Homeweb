<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
require("../../Modele/connexionBDD.php");
//on vérifie si un utilisateur est connecté
require("../../Controleur/verifconnexionadmin.php");
?>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../../Styles/main.css" />
	</head>
	<body>
        <div id="page">
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("entete_admin.php");
                ?>
            </header>
             <section class="loginform cf">
                <div id= forminfosdomisep>
                    <?php
            $reponse = $db->query('SELECT * FROM domisep_infos'); //On récupère toutes les infos
            ?>
				    <form name="login" action="../../Controleur/modifier_admin.php" method="post" accept-charset="utf-8">
                        <h1> Informations Domisep </h1>
                        <div id="signupinput">
                            <p>Adresse mail de contact :</p>
                            <input type="mail" name="mail" value="<?php $reponse2 = $db -> query('SELECT contenu FROM domisep_infos WHERE nom="mail"');$mail=$reponse2->fetch();echo "$mail[0]"; ?>">
                            <p>Téléphone de contact :</p>
                            <input type="tel" name="tel" value="<?php $reponse3 = $db -> query('SELECT contenu FROM domisep_infos WHERE nom="tel"');$mentions=$reponse3->fetch();echo "$mentions[0]"; ?>">
                            <p>Mentions légales :</p>
                            <textarea name="mentions" rows="5" cols="78"><?php $reponse4 = $db -> query('SELECT contenu FROM domisep_infos WHERE nom="mentions"');$cgu=$reponse4->fetch();echo "$cgu[0]"; ?></textarea>
                        </div>
                        <?php if (isset($_GET["message"])){$message = $_GET["message"];echo("<I class=\"erreur\">$message </I>");}?>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="Modifier"/>
				    </form>
                </div>
        </div>
	</body>
</html>
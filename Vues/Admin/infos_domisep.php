<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
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
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("entete_admin.php");
                ?>
            </header>
             <section class="loginform cf">
                <div id= formsignup>
                    <?php
            $reponse = $db->query('SELECT * FROM domisep'); //On récupère toutes les infos
            ?>
				    <form name="login" action="../../Controleur/modifier_admin.php" method="post" accept-charset="utf-8">
                        <h1> Informations Domisep </h1>
                        <div id="signupinput">
                            <p>Adresse mail de contact :</p>
                            <input type="mail" name="mail" value="<?php $reponse2 = $db -> query('SELECT contenu FROM domisep WHERE nom="mail"');
                            $mail=$reponse2->fetch();
                            echo "$mail[0]"; ?>">
                            <p>Conditions générales d'utilisation :</p>
                            <textarea name="cgu" rows="5" cols="78">
                            <?php $reponse3 = $db -> query('SELECT contenu FROM domisep WHERE nom="cgu"');
                            $mentions=$reponse3->fetch();
                            echo "$mentions[0]"; ?>
                            </textarea>
                            <p>Mentions légales :</p>
                            <textarea name="mentions" rows="5" cols="78">
                            <?php $reponse4 = $db -> query('SELECT contenu FROM domisep WHERE nom="mentions"');
                            $cgu=$reponse4->fetch();
                            echo "$cgu[0]"; ?>
                            </textarea>
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="Modifier"/>
				    </form>
                </div>
        </div>
	</body>
</html>
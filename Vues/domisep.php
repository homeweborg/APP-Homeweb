<!DOCTYPE HTML>

<?php 
/*Se connecte à la base de données*/
require("../Modele/connexionBDD.php");
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
        <!-- Header (commentaire test) -->
            <header>
                <?php 
                include ("../entete2.php");
                ?>
            </header>
             <section class="loginform cf">
                <div id= formsignup>
                    <?php
            $reponse = $db->query('SELECT * FROM domisep'); //On récupère toutes les infos
            ?>
				    <form name="login" action=# method="post" accept-charset="utf-8">
                        <h1> Informations Domisep </h1>
                        <div id="signupinput">
                            <p>Adresse mail de contact :</p>
                            <input type="mail" name="mail" placeholder="<?php ;?>">
                            <p>Conditions générales d'utilisation :</p>
                            <input type="text" name="cgu" >
                            <p>Mentions légales :</p>
                            <input type="text" name="mentions">
                        </div>
                        <input id="boutons_signup" type="submit" name="bouton_submit" value="Modifier"/>
				    </form>
                </div>
            <?php include ("../footer.php");?> 
        </div>
	</body>
</html>
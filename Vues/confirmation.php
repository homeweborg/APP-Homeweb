<!DOCTYPE HTML>
<html>
	<head>
		<title>HomeWeb</title>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../Styles/main.css" />
	</head>
	<body>
		<div id="page">
        <!-- Header -->
            <header>
                <?php 
                include ("../entete.php");
                ?>
            </header>
            <div id=confirmationform>
                <p>
                    Confirmez-vous ces données ?
                    <br> 
                    <br> <b>Nom :</b> <?php echo $_POST['nom'];?>
                    <br> <b>Prénom :</b> <?php echo $_POST['prenom'];?>
                    <br> <b>Adresse :</b> <?php echo $_POST['adresse'];?>
                    <br> <b>Mail :</b> <?php echo $_POST['mail'];?>
                    <br> <b>Anniversaire :</b> <?php echo $_POST['anniversaire'];?>
                    <br> <b>Téléphone :</b> <?php echo $_POST['telephone'];?>
                    <form name='conflogin' action='../Controleur/inscription.php' method="post" accept-charset="utf-8">
                        <input class="boutons_id" name="bouton_conf" action="../Controleur/inscription.php" type="submit" value="Oui"/>
                        <input class="boutons_id" onClick="../Vues/signup.php" type="submit" value="Non">
                </form>
                </p>
            </div>
		</div>
	</body>
</html>
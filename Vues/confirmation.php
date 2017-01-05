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
                    <?php
                        session_start();
                        $_SESSION['nom'] = $_POST['nom'];
                        $_SESSION['prenom'] = $_POST['prenom'];
                        $_SESSION['adresse'] = $_POST['adresse'];
                        $_SESSION['mail'] = $_POST['mail'];
                        $_SESSION['anniversaire'] = $_POST['anniversaire'];
                        $_SESSION['telephone'] = $_POST['telephone'];
                    ?>
                    Confirmez-vous ces données ?
                    <br> 
                    <br> <b>Nom :</b> <?php echo $_SESSION['nom'];?>
                    <br> <b>Prénom :</b> <?php echo $_SESSION['prenom'];?>
                    <br> <b>Adresse :</b> <?php echo $_SESSION['adresse'];?>
                    <br> <b>Mail :</b> <?php echo $_SESSION['mail'];?>
                    <br> <b>Anniversaire :</b> <?php echo $_SESSION['anniversaire'];?>
                    <br> <b>Téléphone :</b> <?php echo $_SESSION['telephone'];?>
                    <form name='conflogin' action='../Controleur/inscription.php' method="post" accept-charset="utf-8">
                        <input class="boutons_id" name="bouton_conf" action="../Controleur/inscription.php" type="submit" value="Oui"/>
                        <input class="boutons_id" onClick="../Vues/signup.php" type="submit" value="Non">
                </form>
                </p>
            </div>
		</div>
	</body>
</html>
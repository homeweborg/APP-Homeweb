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
            <div id=formsignup>
                    <form name="login" action="etat.php" method="get" accept-charset="utf-8">
					   <h1> Nous contacter </h1>
                        <div id="signupinput">
                            <p> <b>Objet de votre demande</b><span class="champoblig"> * </span></p>
                            
                            <input type="text" name="capteurD" required placeholder="Ex : 123456789">
                            
                            <p><br><b>Exprimez-vous</b><span class="champoblig"> * </span></p>
                            
                            <textarea type="text" class="description" name="descriptioncapteurD"></textarea>
                            
                            <input class="boutons_piece" type="submit" value="Envoyer" onClick="window.location.href='#'">
                            
                        </div>
                    </form>
                </div>
		</div>
	</body>
</html>
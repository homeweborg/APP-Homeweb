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
            <header> <!-- En tete -->
                <?php include ("entete.php");?>
            </header>       
		<!-- Body -->
			<section class="loginform cf"> <!--formulaire d'identification-->
                <div id=formlogin>
                    <form name="login" method="post" action="../Controleur/connexion.php" accept-charset="utf-8">
					   <h1> IDENTIFICATION </h1>
                        <div id="idinput">
                            <p>Adresse mail</p>
                            <input type="username" name="username" required>
                            <p>Mot de passe</p>
                            <input type="password" name="password" required>
                            <?php if (isset($_GET["erreur"])){
                                        $erreur = $_GET["erreur"];
                                        echo("<br/><br><I class=\"erreur\">$erreur</I>");}?>
                        </div>
                        <div>
                            <input class="boutons_id" type="submit" value="Login">
                            <input class="boutons_id" type="submit" value="Signup" onClick="window.location.href='signup.php'">
                        </div>                             
                    </form>
                </div>
			</section>
       <?php include ("footer.php");?>  
		</div>
	</body>
        
</html>
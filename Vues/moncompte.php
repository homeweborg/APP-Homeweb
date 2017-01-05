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
        <!-- Body -->
            <div>
                <ul id=objects>
                    <li><a href="#">Gérer ses informations</a>
                        <ul>
                            <li><a href="#">Modifier ses informations personnelles</a></li>
       					    <li><a href="#">Gérer les utilisateur de la maison</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Visualiser l'état de son domicile</a>
                        <ul>
                            <li><a href="#">Visualiser pièce par pièce</a></li>
        				    <li><a href="#">Visualiser capteur par capteur</a></li>
        				    <li><a href="#">Visualiser l'état général</a></li>
                            <li><a href="#">Visualier la consommation energétique</a></li>
        				    <li><a href="#">Recevoir une notification en cas de panne</a></li>
       					    <li><a href="#">Identifier le capteur ou l'actionneur en panne</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Piloter son domicile</a>
       	                <ul>
       					    <li><a href="#">Modifier une consigne au niveau de la maison</a></li>
       					    <li><a href="#">Modifier une consigne au niveau d'une pièce</a></li>
       					    <li><a href="#">Gerer les objets connectés</a></li>
       					    <li><a href="#">Commander un nouvel objet connecté</a></li>
       					    <li><a href="#">Programmer des consignes</a></li>
                        </ul>
                    </li>
       	        </ul>
            </div>
                
            <div id="boite">
                
                <p><?php session_start();?>
                    Votre Profil :
                    <br> 
                    <br> <b>Nom :</b> <?php echo $_SESSION['nom'];?>
                    <br> <b>Prénom :</b> <?php echo $_SESSION['prenom'];?>
                    <br> <b>Adresse :</b> <?php echo $_SESSION['adresse'];?>
                    <br> <b>Mail :</b> <?php echo $_SESSION['mail'];?>
                    <br> <b>Anniversaire :</b> <?php echo $_SESSION['anniversaire'];?>
                    <br> <b>Téléphone :</b> <?php echo $_SESSION['telephone'];?>
                    
                    <br><input class="boutons_modif" type="submit" value="Modifier" onClick="window.location.href='signup.php'">
                </p>
            </div>
        </div>
	</body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
		<title>HomeWeb</title>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
	</head>
	<body>
		<div id="page">
		<!-- Header -->
            <header>
                <div id="logo">
                    <a href="image/logo.png"><img src="image/logomini.png" alt="Logo HomeWeb" />  
                </div>            
                <nav>
                    <ul>
                        <div id="actuel"><li><a href="Vues/accueil.php">Accueil</a></li></div>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="moncompte.php">Mon compte</a></li>
                        <li><a href="etat.php">Etat</a></li>
                    </ul>
                </nav>
            </header>
		<!-- Body -->
			<section class="loginform cf">
                <div id=formlogin>
				<form name="login" action="index_submit" method="get" accept-charset="utf-8">
					<h1> IDENTIFICATION </h1>
                    
                    <div id="idinput">
					<p> Nom d'utilisateur</p>
					<input type="username" name="username" required>
					<p> Mot de passe</p>
					<input type="password" name="password" required>
                    </div>
                    
					<div>
						<input class="boutons_id" type="submit" value="Login">
                        
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "maBase";

	//cree une connection avec la base:
	$conn = mysqli_connect($servername, $username,$dbname)

	//verifie la connection avec la base:
	if (!conn) {
		die("Erreur de connection :" . mysqli_connect_error());
	}
	echo "Connection réussie";

	echo "Hello World!";
	//output text
	$name='Francis';
	$age='21';
	echo $age;
	//output '21'
	echo "<strong>Texte en gras.</strong>";
	//output un texte en gras
?>
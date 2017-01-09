<?php
    
    /* Gère l'ajout de pièce */

require("../Modele/connexionBDD.php");
    
$nom_piece = $_POST['nom_piece'];
$presence_lum = $_POST['presence_lum'];
$presence_temp = $_POST['presence_temp'];
$ref_lum = $_POST['ref_lum'];
$ref_temp = $_POST['ref_temp'];


?>
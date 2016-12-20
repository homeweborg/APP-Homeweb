
<?php
    $dbname = "homeweb";
    $host='localhost';
    $user='root';
    $pass='root';

try {

    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}  
?>
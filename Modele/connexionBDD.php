<?php
    $dbname = "homeweb";
    $host='localhost';
    $user='root';
    $pass='root';

try {
    $db = new tryPDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$user", "$pass");
    }
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}  
?>
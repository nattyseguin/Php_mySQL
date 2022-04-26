<?php

$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    //DELETE FROM `city` WHERE `city`.`ID` = 4084"

    $sql = "DELETE FROM city WHERE ID=4089";
   
    $num = $conn->exec($sql);

    echo "<br>Number of deleted records: " .$num;    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
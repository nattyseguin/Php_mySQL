<?php
$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    $sql= $conn->prepare("INSERT INTO city (Name,CountryCode,Population) VALUES (:n, :cc, :p)");
    $sql->bindParam(":n", $name);
    $sql->bindParam(":cc", $countrycode);
    $sql->bindParam(":p", $popu);

    $name= "Vigo";
    $countrycode = "ESP";
    $popu = 300000;
    $sql->execute();

    $name= "Zamoro";
    $countrycode = "ESP";
    $popu = 80000;
    $sql->execute();

    echo "<br>Records inserted";    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
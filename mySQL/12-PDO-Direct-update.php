<?php
$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    //UPDATE `city` SET `Population` = '17001' WHERE `city`.`ID` = 4088; asi seria el formato para actualizar
    //$sql ="UPDATE city SET Population =17012 WHERE ID=4088";
    $num = $conn->exec($sql);
    echo $sql . "<br>"; //to debug
    
    //change the Amsterdam name city
      $sql ="UPDATE city SET Name='Ourense' WHERE ID=5";
      $num = $conn->exec($sql);
      echo $sql . "<br>"; //to debug

      //añadir que kabul pertenece a españa
      $sql = "UPDATE city SET CountryCode = 'ESP' WHERE Name = 'Kabul' AND CountryCode = 'AFG'";


      //añadir todas las ciudades de italia a españa

    
    echo "<br>Number of modified records: " .$num;    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<?php
$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    //process
    $conn->beginTransaction();
        $sql = "INSERT INTO city (Name, CountryCode, Population) VALUES ('Celanova', 'ESP', 8000)";
        $conn->exec($sql);

        $sql = "INSERT INTO city (Name, CountryCode, Population) VALUES ('Seixalvo', 'ESP', 500)";
        $conn->exec($sql);
        $conn->rollBack();
    //$conn->commit();

    
    echo "<br>Records inserted";    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
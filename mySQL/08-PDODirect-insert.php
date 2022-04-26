<?php

$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB = "world";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    //important to get the charset of data
    $conn->exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión OK<br>";

    //process
    //copy the template sentence form phpmyadmin
    //$sql = "INSERT INTO `city` (`ID`, `Name`, `CountryCode`, `District`, `Population`) VALUES (NULL, \'Xinzo\', \'ESP\', \'\', \'10000\');";
    //$sql = "INSERT INTO city (name , CountryCode , Population) VALUES ('Verin','ESP',14000)";


    //2. set a sentence with previous variables
    // $nameCity="Tui";
    // $pupu="17000";
    // $codeCountry="ESP";


    // $sql = "INSERT INTO city (name , CountryCode , Population) VALUES ('$nameCity','$codeCountry','$pupu')";

    /*$sql = "INSERT INTO city (Name, CountryCode, Population) 
    VALUES ('" . $nameCity . "','" . $codeCountry. "'," . $pupu . ")";*///otra forma de hacerlo(asi lo hizo el teacher)

    //3.insert in the city table with data coming fronm the form


   $codeCountry="ESP";
      
     if (isset ($_GET['vill']) and isset($_GET['popu']) ){
        $sql = "INSERT INTO city (Name, CountryCode, Population) 
            VALUES ('" . $_GET['vill'] . "','$codeCountry'," .$_GET['popu']. ")";

            
        }

    $conn->exec($sql);

    if(isset($_GET['idioma'])){
        $sql="INSERT INTO countrylanguage (CountryCode,Language,IsOfficial,Percentaje) 
        VALUES ('$codeCountry','" .$_GET['idioma'] ."','T','5.3')";
    }

    $conn->exec($sql);
    
  echo "Record inserted";
}

catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

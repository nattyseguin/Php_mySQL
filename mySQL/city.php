<!--cities with more than a million population where English is officially spoken and they are outside of America-->
<?php
//cities with more than a million population where English is officially spoken and they are outside of America
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

    $sql = "SELECT country.Name as pais, city.Name as ciudad FROM 
    ((countrylanguage join country ON countrylanguage.CountryCode=country.Code) 
    JOIN city on city.CountryCode=country.code) WHERE countrylanguage.Language = 'English' 
    and city.Population > 1000000 and countrylanguage.IsOfficial = True and country.Continent 
    not in ('North America', 'South America')";
    
    $result = $conn->query($sql);

    foreach ($result as $tupla){
        echo "<b>" . $tupla["ciudad"] . "</b>" ." " . $tupla["pais"] . "<br>";
    }
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>



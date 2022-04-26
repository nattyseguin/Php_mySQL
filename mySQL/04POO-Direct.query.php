<?php
$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB="world";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully<br>";

  //process

  //$sql = "SELECT Name FROM city";
  //$sql = "SELECT Name, Population FROM city WHERE CountryCode ='ESP'";
  //$sql = "SELECT * FROM city where CountryCode=(SELECT Code FROM country where Name='Spain')";
  //$sql = "SELECT city.Name, city.Population FROM city, country WHERE city.CountryCode=country.Code AND country.Name='Spain'";
  $sql = "SELECT city.Name, city.Population FROM city INNER JOIN country ON city.CountryCode=country.Code WHERE country.Name='Spain'";
  $result = $conn->query($sql);

  foreach ($result as $row){
      echo $row["Name"] . " " . $row["Population"] .  "<br>";
  }

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
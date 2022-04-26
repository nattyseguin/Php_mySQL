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

  $sql="SELECT * FROM city";
  $result = $conn->query($sql);

  while ($tuple = $result->fetch(PDO::FETCH_NUM)){
      echo $tuple[0]. " <<>> " . $tuple[1] . "<br>";
  }
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>
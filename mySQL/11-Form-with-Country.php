<!DOCTYPE html>
<html>
<body>

<?php

$servername = "localhost";
$username = "world-user";
$password = "abc123.";
$myDB="world";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    $conn->exec("set names utf8");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Connection successfully<br>";

    $sql = "SELECT name, code from country";
    $result = $conn->query($sql);
?>

<form action="11-Form-with-Country.php" method="get">
Country: <select name="countryCode">
<?php
    foreach ($result as $row){
        echo '<option  value="' . $row["code"] .'">'.  $row["name"]  . '</option>';
    }
?>
</select>
<input type="submit">
</form>
<?php
}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
</body>
</html>
  
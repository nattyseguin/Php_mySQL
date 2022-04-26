
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webDictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  $cad = fgets($myfile);
  echo $cad . "<br>";

}
fclose($myfile);
?>

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webDictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  $cad = fgets($myfile);
  echo '"' . $cad. '" ==> ' . strlen($cad) . " ==>". str_word_count($cad, 0) . " <br>";
}
fclose($myfile);
?>

</body>
</html>
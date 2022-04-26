<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("names.txt", "a") or die("Unable to open file!");
$txt = "jesus\n";
fwrite($myfile, $txt);
$txt = "maria\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "OK";
?>

</body>
</html>
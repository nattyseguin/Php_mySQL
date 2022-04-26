<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("names.txt", "w") or die("Unable to open file!");
$txt = "Diego\n";
fwrite($myfile, $txt);
$txt = "Manuel\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "OK";
?>

</body>
</html>
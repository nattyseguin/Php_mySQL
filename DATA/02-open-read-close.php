<html>
    <body>
<?php
//$myfile = fopen("WebDictionary.txt", "r") or die("Unable to open file!");
//$myfile = fopen("http://www.example.com/", "r") or die ("Unable to opem file!");
$myfile = fopen("http://www.scrapmaker.com/data/wordlists/dictionaries/dictionary.txt", "r") or die ("Unable to opem file!");
//echo "The file size is: " . filesize("WebDictionary.txt") . "<br>";
//echo fread($myfile,filesize("WebDictionary.txt")) "<br>";
//echo fread($myfile,20);
echo fread($myfile,1024);
fclose($myfile);
?>
    </body>
</html>
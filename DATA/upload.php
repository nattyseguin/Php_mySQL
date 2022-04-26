https://eduxunta.webex.com/meet/luis


<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo "name: ". $_FILES["fileToUpload"]["name"]. "<br>";
echo "type: ".$_FILES["fileToUpload"]["type"]. "<br>";
echo "size: ".$_FILES["fileToUpload"]["size"]. "<br>";
echo "tmp_name: ".$_FILES["fileToUpload"]["tmp_name"]. "<br>";
echo "error: ".$_FILES["fileToUpload"]["error"]. "<br>";

// Check if file already exists
if (file_exists($target_file)) {
    echo "Lo siento, el fichero ya existe";
    $uploadOk = 0;
}
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk != 0) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "El fichero ". basename( $_FILES["fileToUpload"]["name"]). " ha sido subido";
    } else {
        echo "Error no considerado";
    }
}
?>
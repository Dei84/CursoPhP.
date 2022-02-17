<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Llamamos a 3ª_clase.php con include. </br>";
echo "Primero con un error en la url del archivo. </br>";
include ("3º_clase.php");
echo "Luego lo llamamos con el nombre bien puesto";
include ("3ª_clase.php");
damedatos();

?>



</body>
</html>
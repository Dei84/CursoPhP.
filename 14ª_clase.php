<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
//#22-23-24-25
include "14ªclase_bis.php";

$mazda = new Coche();
$pegaso = new Camion();
echo "El Mazda tiene $mazda->ruedas ruedas.<br>";
echo "El Pegaso tiene $pegaso->ruedas ruedas. <br>";
$mazda->arrancar();
$mazda->girar();
$mazda->establece_color("rojo","Mazda");
?>

</body>
</html>
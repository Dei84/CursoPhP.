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
//#22-23-24-25 git commit -m "Encapsulación, Modificadores de acceso y funciones Get&Set"
include "14ªclase_bis.php";

$mazda = new Coche();
$mazda->arrancar();
$mazda->girar();
$mazda->set_color("rojo","Mazda");
echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";
echo "El Mazda tiene un motor de " . $mazda->get_motor() . "<br>";

$pegaso = new Camion();
$pegaso->frenar();
$pegaso->set_color("negro", "Pegaso");
$pegaso->arrancar();
echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas.<br>";
echo "El Pegaso tiene " . $pegaso->get_ruedas() . " ruedas.<br>";


?>

</body>
</html>
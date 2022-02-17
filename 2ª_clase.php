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

/*print "Bienvenidos al curso PhP. </br>"; //Esto es un comentario.
print "Hola alumnos. </br>"; //Imprime y hace un salto de linea </br>
print "Hasta el próximo video.";

/* Esto es un comentario 
de varias lineas.
hasta el símbolo de cierre será un comentario. */

$año_nacimiento = 1984;
$nombre = "David";
$apellido1 = "Rodríguez";
$apellido2 = "Terrón";
$edad = date('Y') - $año_nacimiento;
$telefono = 633145712;
$persona = true;

print "El nombre del usuario es $nombre" . "<br/>";
echo $nombre . " " . $apellido1 . " " . $apellido2 . "</br>";
echo "El usuario tiene $edad años </br>";
print $persona . "</br>";
print '$persona';


?>
</body>
</html>
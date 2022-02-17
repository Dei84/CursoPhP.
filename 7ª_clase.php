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

// Una constante es un espacio en la memoria del ordenador donde se almacenará un valor que no podrá cambiar durante la ejecución del programa
/* El nombre de las constantes ha de ir en mayúsculas (convenio)
    El nombre de las constantes no deben llevar el simbolo $
    Es obligatorio el uso de la funcion define() para definir constantes
    El ámbito de la constante es global por defecto
    Las constantes no se pueden definir
    Las constantes solo pueden almacenar valores escalares*/

define("DATEOFBIRTH", 1984, true);
//define("DATEOFBIRTH", "María");

echo DATEOFBIRTH;
echo "El autor de este código nació en: " . DATEOFBIRTH;
echo DATEOFBIRTH;

?>
</body>
</html>
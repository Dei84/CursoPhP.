<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .resaltar{
            color: #F00;
            font-weight: bold;
        }
</style>

<body>
    <h2>Tratamiento strings:</h2>
    <?php 
    $nombre = "David";
    echo "hola $nombre";
    echo "<p class='resaltar'>Esto es un ejemplo de párrafo</p>";
    echo "<p class=\"resaltar\">Esto es un ejemplo de párrafo</p>";

    $variable1 = "Casa";
    $variable2 = "CASA";
    $resultado = strcmp($variable1, $variable2); // devuelve boolean true(1) si no son iguales y false(0) si no lo son.
    $resultado2= strcasecmp($variable1, $variable2);
        echo "Comparamos $variable1 con $variable2 </br>";
       echo "<h3>comparamos con strcmp().</h3>";
    if($resultado){
        echo "Si no tenemos en cuenta las mayúsculas las strings, no coinciden. boolean= $resultado. </br>";
    }else echo "Si tenemos en cuenta las mayúsculas, las strings coinciden. boolean= $resultado2. </br>";
        echo "<h3>comparamos con strcasecmp().</h3>";
    if ($resultado2) {
        echo " Si no tenemos en cuenta las mayúsculas, las strings no coinciden. boolean = $resultado. </br>";
    }else echo " Si tenemos en cuenta las mayúsculas, las strings coinciden. boolean = $resultado2. </br>";
    ?>
</body>
</html>
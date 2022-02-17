<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color:darkcyan">
    
    <div style="margin: 10%; font-size: 20px; color:brown; background-color:cornflowerblue">
    <h2 style="color:darkblue">Flujo de ejecución:</h2>
    <?php

echo "Este es el primer mensaje. </br>";
function dameDatos(){ // una función interrumpe el flujo de ejecución.
    echo "Este es el mensaje del interior de la función. </br>";
}

echo "Este es el segundo mensaje. </br>";
echo "</br>";

dameDatos(); // Cuando llamamos a la función, traemos el código entre {llaves} y se ejecuta tantas veces como la llamemos.
echo "</br>";

$num = 6;
$while = "Este es el bucle while.";
$condicional = "Este es el mensaje del condicional";

if ($num <= 6) {
    echo $condicional . "</br>";
}else echo "No ha entrado en el condicional";
    echo "Ha terminado el condicional. </br>";
    echo "</br>";
    
while ($num <= 10) {
    echo $while . "</br>"; 
    echo "Iteración = $num </br>" ;
    $num++;
}
    echo "Ha terminado el bucle while";

?>

    </div>
</body>
</html>
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

//##19
$a = 0;
for ($i=10; $i >= 0; $i--) { 
    $a++;
    echo "Esto es un bucle for en su iteración nº $a</br>";
    echo "Como la variable i ($i) es mayor o igual que la condición (>=0) realiza una iteración del bucle completa.</br>";

        if ($i == 0) {
            echo "He entrado en el condicional para no multiplicar por cero.<br>";
            echo "como la división por cero no es posible, se vuelve imperativo un condicional para solucionar problemas y que continue la ejecución sin errores.<br>"; 
            echo "9 partido $i = La división por cero no es posible." . "<br>";
            echo "<br>";
            continue;
        }
        echo "90 partido $i = " . 90/$i . "</br>";
    echo "<br>";
}
echo "He salido del bucle for.";

?>

</body>
</html>
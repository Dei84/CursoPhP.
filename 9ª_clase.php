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

    $input1 = 2;
    $input2 = 4;
    $random1 = 10;
    $random2 = 50;
    $round1 = 3.1416;

    $num1 = rand();
    echo "El numero aleatorio es: $num1";
    echo "</br>";

    $num2 = rand($random1, $random2);
    echo "el numero random entre $random1 y $random2 es $num2";
    echo "</br>";


    $num3 = pow($input1,$input2);
    echo "El valor del exponente con base $input1 y exponente $input2 es: $num3";
    echo "</br>";

    $num4 = round($round1, 2);
    echo "El valor de pi ($round1) redondeado a dos decimales es: $num4";

    $casting_exp = "5";
    $resultado = (int)$casting_exp;
    echo "Hemos cambiado el valor de un string a un entero: " . $resultado;

    ?>
</body>
</html>
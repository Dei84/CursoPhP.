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

//#20
echo "<h1>Funciones</h1>";
$string = "HOLA MUNDO";
echo "la función strtolower convierte la cadena de texto de la variable string: $string a minúscula.<br>";
echo strtolower($string) . "<br>";
$string2 = "Segundo hola mundo";
echo "<br>";
echo "La función strtoupper convierte la cadena de texto de la variable string: $string2 a mayúsculas.<br>";
echo strtoupper($string2) . "<br>";
echo "<br>";
echo "En la función suma (creada por nosotros) ejecutamos un código que se reiterará tantas veces como la llamemos con los argumentos que nosotros precisemos.<br>";
echo "Establecemos dos variables como parámetros para nuestra función suma.<br>";
echo "Cuando llamamos a la función suma introducimos dos números como parámetros que rellenan las variables establecidas en la función.<br>";

function suma($num1, $num2){
    $resultado = $num1+$num2;
    return $resultado;
}
echo "Llamamos a nuestra función suma y establecemos como parámetros los números 2 y 4<br>";

echo "El resultado de la ejecución de nuestro codigo es: " . (suma(2,4)) . "<br>";
echo "<br>";

function frase_mayus($frase,$conversion=true){

    $frase = strtolower($frase);
    echo "Cuando llamamos a la función convierte todo a minúsculas:<br> $frase<br>";
    if ($conversion==true) {
        echo "Como nuestro segundo parámetro se establece por defecto en true, convierte la primera letra de la frase en mayúscula.<br>";
        $resultado = ucfirst($frase);
    }else{
        echo "Como nuestro segundo parámetro modifica el booleano definido a false, entra en el else y convierte toda la frase a mayúsculas.<br>";
        $resultado = strtoupper($frase);
        
    }
    return $resultado;

}
$string = "Esto Es Una Prueba.<br>";
echo "Establecemos una nueva función que modificará los valores de un string dado.<br>";
echo "Recibirá y almacenará dicho string y lo pasará todo a minúsculas.<br>";
echo "Establecerá un condicional para dicho string que dependiendo de nuestro segundo parámetro hará la primera mayúsculas o todo entero.<br>";
echo "nuestro estring será $string<br>";
echo (frase_mayus($string)) . "<br>";
echo (frase_mayus($string, false)) . "<br>";

?>



</body>
</html>
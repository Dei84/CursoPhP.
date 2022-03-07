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
    //##php18.
        $var1 = 1;
        // El ciclo while accede al código del interior del bucle solo si la condición se cumple.
        while ($var1 <= 6) {
            echo "Estamos ejecutando el bucle en su iteración nº $var1.</br>";
            $var1++;
        }
        echo "Hemos salido del ciclo while.";
        //El ciclo do-While ejecuta el codigo del interior al menos una vez, ya que el flujo de ejecución permite ejecutar el código antes de la comprobación de la condición.
        do {
            echo "Estamos ejecutando un bucle do-while en su iteración nº $var1.</br>";
            $var1++;
        } while ($var1 <= 6);
        echo "Ha terminado el ciclo do-while.";
    ?>

</body>
</html>
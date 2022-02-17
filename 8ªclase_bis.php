<style>

.resultado{
    color:#F00;
    font-weight: 32px;
}

</style>



<?php 
    if (isset($_POST["button"])) {
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];


        switch ($operacion) {
            case 'Suma':
                echo "<p class='resultado'>El resultado de esta suma es: " . ($numero1+$numero2) . "</p>";
                break;

            case 'Resta':
                echo "<p class='resultado'>El resultado de esta resta es: " . ($numero1 - $numero2) . "</p>";
                break;

            case 'Multiplicación':
                echo "<p class='resultado'>El resultado de esta multiplicación es: " . ($numero1 * $numero2) . "</p>";
                break;

            case 'División':
                echo "<p class='resultado'>El resultado de esta división es: " . ($numero1 / $numero2) . "</p>";
                break;
                
            case 'Módulo':
                echo "<p class='resultado'>El resto de esta división es: " . ($numero1 % $numero2) . "</p>";
                break;
            case 'Incremento':
                $numero1++;
                $resultado = $numero1;
                echo "<p class='resltado'>El incremento de esta operación es: " . ($resultado) . "</p>";
                break;

            case 'Decremento':
                $numero1--;
                $resultado = $numero1;
                echo "<p class='resultado'>El decremento de esta operación es: " . ($resultado) . "</p>";
                break;
            default:
                //code...
                break;
        }
    }else {
        echo "Aun no hay operaciones realizadas";
    }
// este es el video 13
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="8ª_clase.html">-> Volver <-</a>
</body>
</html>

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
        include "10ªclase_tris.php";
    ?>
    <h1>Usando condicionales:</h1>
    <form action="10ªclase_tris.php" method="POST" name="datos_usuario" id="datos_usuario">
        <table width="15%" align="center">
            <tr>
                <td>Nombre:</td>
                <td><label for="usuario"></label>
                <input type="text" name="usuario" id="usuario"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><label for="edad_usuario"></label>
                <input type="text" name="contra" id="contra"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" align="center" ><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
            </tr>
        </table>
    </form>
    <h1>Operadores lógicos y su prioridad en PhP:</h1>
    <?php

    echo "ejemplo: 2+3x6=20</br>";
    echo "ejemplo: (2+3)x6=30</br>";
    echo "para mas info acuda a: <a href='php.net/manual/language.operators.precedence.php'>enlace</a></br>";

    $var1 = true;
    $var2 = false;
    $resultado = $var1 && $var2; // Almacena en resultado False (porque $var2 es false).
    if ($resultado == true) {
        echo "correcto";

    }else {
        echo "Incorrecto";
    }


    ?>

</body>
</html>
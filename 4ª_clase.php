<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Declaramos en la funcion la variable como global para poder editar el contenido.</p>
    <div>
    <?php 

        $nombre = "David </br>";
        function dameNombre(){
            $nombre = "María";
            echo $nombre . "</br>";
        }

    ?>
   
    </div>
    <div>
    <?php
        function dameNombre_bis(){
            global $nombre;
            echo $nombre = "El usuario es $nombre";
        }

    dameNombre();
    echo $nombre;
    dameNombre_bis();


    ?>

    </div>

</body>
</html>
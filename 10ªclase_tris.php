<style>
    h1{
        text-align: center;
    }
    
    table{
        background-color: #FFC;
        padding:5px;
        border: #666 5px solid;
    }

    .no_validado{
        font-size: 10px;
        color: #f00;
        font-weight: bold;
    }

    .validado{
        font-size: 10px;
        color: #0c3;
        font-weight: bold;
    }
</style>

<?php 

    if (isset($_POST['enviando'])) {
        $contra = $_POST['contra'];
        $nombre = $_POST['usuario'];

        /*if ($edad <= 18) {
            echo "Eres menor de edad: No tienes acceso";
        }else {
            "Eres mayor de edad: Acceso concedido.";
        }*/
        $resultado = $nombre=="David" && $contra == 1234 ? "Usuario y contraseña correctos: Puedes acceder" : "No puedes acceder.";
        echo $resultado;
    }

?>
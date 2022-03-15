<?php 
//#22-23-24-25
class Camion extends Coche{
  
    function __construct()
    {
        $this->ruedas=8;
        $this->motor="2600cc.";
        $this->color="";
    }
    function establece_color($color_camion, $nombre_camion){
        $this->color=$color_camion;
        echo "El color del $nombre_camion es: $this->color <br>";
    }

    function arrancar()
    {
        parent::arrancar();
        echo "Camión arrancado.";
    }
}

$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();

$renault->establece_color("rojo", "renault");
$seat->establece_color("Azul", "Seat");
$mazda->girar();




//#22
class Coche{
    var $ruedas;
    var $color;
    var $motor;
    function __construct()
    {
        $this->ruedas=4;
        $this->motor="1600cc.";
        $this->color="";
    }
    function arrancar(){
        echo "Estoy arrancando<br>";
    }
    function girar(){
        echo "Estoy girando<br>";
    }
    function frenar(){
        echo "Estoy frenando<br>";
    }
    function establece_color($color_coche, $nombre_coche){
        $this->color=$color_coche;
        echo "El color del $nombre_coche es: $this->color <br>";
    }
}





?>

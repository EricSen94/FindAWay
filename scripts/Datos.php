<?php
require 'scripts/conexion.php';
    
class Datos{
    private $conexion;
    private $nomRuta;
    private $descRuta;
    private $infoRuta;
    
    function __construct(){
        $this->conexion = new conectarDB();
    }
    public function llenarTabla($lugar){
        $consulta="SELECT rutas.nombre, rutas.descripcion, calificaciones.cant_estrellas FROM rutas LEFT JOIN calificaciones ON rutas.id_ruta=calificaciones.id_ruta WHERE rutas.nombre_destino = '".$lugar."' ORDER BY calificaciones.cant_estrellas DESC";
        
        $lRutas = $this->conexion->consultar($consulta);
        //Ciclo para imprimir n rutas acomodadas por mayor calificacion
        $n=0;
        while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
            $ref='<a href="#" onclick="loadMap()">';
            $numRutas= $lRutas->num_rows;
            $nomRuta = $arrayRutas['nombre'];
            $descRuta = $arrayRutas['descripcion'];
            $cantEstrellas = $arrayRutas['cant_estrellas'];
            $infoRuta[$n] ='<section class="ruta"><section class="infoC"><img src="img/camiones/'.$nomRuta.'.jpg" class="imgCamion"><span class="nombreRuta"><br>'.$nomRuta.'</span></section><section class="descripcionC"><p>'.$descRuta.'</p></section></section>';

            if($cantEstrellas == 0){
                echo "<ul class='fil-content'><li>".$ref.$nomRuta.'<img src="img/estrellas/0.png" class="imgE"></a></li></ul>';
                //Econtrar la forma de que no se llene todo 
                echo "<script> document.getElementById('ruta').insertAdjacentHTML('beforebegin', '".$infoRuta[$n]."');</script>";
            }
            else{
                echo "<ul class='fil-content'><li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a></li></ul>';
                //Econtrar la forma de que no se llene todo 
                echo "<script> document.getElementById('ruta').insertAdjacentHTML('beforebegin', '".$infoRuta[$n]."');</script>";
            }
            $n+=1;
        }
        $lRutas->free();
    }
    public function llenarInfo(){
        echo "<script> document.getElementById('ruta').insertAdjacentHTML('beforebegin', '".$infoRuta."');</script>";
    }
}
?>

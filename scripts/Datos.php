<?php
require 'scripts/conexion.php';
    
class Datos{
    private $conexion;
    
    function __construct(){
        $this->conexion = new conectarDB();
    }
    public function llenarTabla($lugar){
        $consulta="SELECT rutas.nombre, rutas.descripcion, rutas.mapa, calificaciones.cant_estrellas FROM rutas LEFT JOIN calificaciones ON rutas.id_ruta=calificaciones.id_ruta WHERE rutas.nombre_destino = '".$lugar."' ORDER BY calificaciones.cant_estrellas DESC";
        
        $lRutas = $this->conexion->consultar($consulta);
        //Ciclo para imprimir n rutas acomodadas por mayor calificacion
        $n=0;
        while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
            $nomRuta = utf8_encode($arrayRutas['nombre']);
            $descRuta = utf8_encode($arrayRutas['descripcion']);
            $mapRuta = utf8_encode($arrayRutas['mapa']);
            $cantEstrellas = floatval($arrayRutas['cant_estrellas']);
            $ref='<a class="nombreRuta fil-content" href="#Iruta" onclick="llenarInfo(\''.$nomRuta.'\',\''.$descRuta.'\',\''.$mapRuta.'\', loadMap)">';
            
            echo $ref."<div class='fil-col'><span>".$nomRuta."</span></div><div class='fil-col'><img src='img/estrellas/".$cantEstrellas.".png' class='imgE'></div></a>";
        }
        $lRutas->free();
    }
}
?>

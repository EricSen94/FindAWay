<!DOCTYPE html>
<?php
    $conexionAddress="localhost";
    $conexionUser="root";
    $conexionPass="";
    $conexionDB="findaway";
    $link = new mysqli($conexionAddress,$conexionUser,$conexionPass,$conexionDB);
    if($link->connect_error){
			    echo "Falló la conexión ".$link->connect_error."<br/>";
			} else echo "alert('Mala conexion a base de datos')";
?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta name="viewport" http-equiv="Content-Type" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Find A Way</title>
  </head>
  <!-- -------------------------------------------------------------------------------------------------------------------------- -->
  <!-- -------------------------------------------BODY -->
  <body class="body" id="body">
  <div class="wrapper">
  <!-- -------------------------------------------------------------------------------------------------------------------------- -->
  <!-- -------------------------------------------HEADER -->
  <header class="header">
      <section class="header-col">
          <a href="index.php" ><img src="img/palomaB.png" class="imgP" style="margin-right:10vw"></a>
      </section>
      <section class="header-col">
          <!--<h1 id="TituloPag">Find a Way</h1>-->
          <img src="img/logo.png" class="logo">
      </section>
      <section class="header-col">
      </section>
  </header>
    
    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <!---------------------------------------------Seccion IZQUIERDA-->
    <section id="sIzq" class="position-fixed izq">
        <h1 hidden >SECTION IZQ</h1>
<!---------------------------------------------Buscar --
        <button type="button" class="boton bordes btn btn-outline-info" ddata-placement="left" title="Búsqueda" onclick="funcionParaSolicitarBusqueda">
            <img class="imgBtn" src="img/busquedaB.png">
        </button>
-->
        <!---------------------------------------------Limpiar -->
        <button type="button" onclick="clearMap()" class="boton bordes btn btn-outline-info" data-toggle="tooltip collapse" data-placement="left"  data-target=".multi-collapse" aria-expanded="false" title="Limpiar búsqueda" aria-controls="buscar infoRuta" >
            <img class="imgBtn" src="img/nuevaB.png" >
        </button>
        <!---------------------------------------------Calificar -->
        <button type="button" data-toggle="tooltip" data-placement="left" title="Calificar Ruta" class="boton bordes btn btn-outline-info" onclick="calificar()">
            <img src="img/estrellaB.png" class="imgBtn">
        </button>
        <section class="redes bordes">
            <h5>REDES</h5>
            <a><img src="img/insta.png" class="redes-logo"></a><br>
            <a><img src="img/face.png" class="redes-logo"></a><br>
            <a><img src="img/twitter.png" class="redes-logo"></a><br>
        </section>
    </section>
    
    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <!---------------------------------------------Seccion CENTRO-->
    <section id="sCen" class="cen">
        <h1 hidden>SECTION CEN</h1>
<!--        <div id="buscar">
            <form>
                <input class="search bordes2" type="search" placeholder="Búsqueda">
            </form>
        </div>
-->
        <br>
        <section class="mapa bordes2" style="height:35vw;">
            <!-- Cambiar por el mapa de google -->
            <!-- Agregar algo para hacer el data-toogle="collapse" con data-target="#infoRuta" y asi desplegar el menu de informacion ruta
                 y hacer un href="#flagNameRuta" para hacer que la pagina haga scroll down y el usuario se de cuenta-->
            <a href="#flagNameRuta"type="button" class="btn btn-link" data-toggle="collapse" data-target="#infoRuta" aria-expanded="false" aria-controls="infoRuta" onclick="mostrarInfo()">
                <iframe id="main-map" src="https://www.google.com/maps/d/embed?mid=1sAdyj55AKuJ4RV2gjA0Q4rBM8q-VsDi5" frameborder="0" height="100%" width="100%" allowfullscreen></iframe>
            </a>
        </section>
            <div class="infoRuta bordes2 collapse" id="infoRuta">
                <h1 id="flagNameRuta">Información Rutas</h1>
                <!-- importante -->
                <!-- Crear una funcion que vaya agregando N sections dependiendo de las rutas que pasan por el lugar buscado. en cada section poner cada una de las rutas -->
                <section class="ruta">
                    <section class="infoC">
                        <img src="img/camiones/camion.jpg" class="imgCamion">
                        <span class="NombreRuta">Boulevard CU</span>
                    </section>
                    <section class="descripcionC">
                        <span>Las calles que serán parte del nuevo derrotero de las rutas que no desaparecen son la avenida 14 Sur, Bulevar 18 Sur, San Claudio, Circuito Juan Pablo II, 31 Oriente-Poniente, 15 Norte-Sur, 4 Poniente, avenida Reforma, Teziutlán sur, laterales del Periférico y Bulevar Municipio Libre.
                        </span>
                    </section>
                </section>
                <section class="ruta">
                    <section class="infoC">
                        <img src="img/camiones/camion.jpg" class="imgCamion">
                        <span class="NombreRuta">Boulevard CU</span>
                    </section>
                    <section class="descripcionC">
                        <p>Las calles que serán parte del nuevo derrotero de las rutas que no desaparecen son la avenida 14 Sur, Bulevar 18 Sur, San Claudio, Circuito Juan Pablo II, 31 Oriente-Poniente, 15 Norte-Sur, 4 Poniente, avenida Reforma, Teziutlán sur, laterales del Periférico y Bulevar Municipio Libre.
                        </p>
                    </section>
                </section>
            </div>
    </section>
    
    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <!---------------------------------------------Seccion DERECHA-->
    <section id="sDer" class="position-fixed der bordes">
        <h1 hidden>SECTION DER</h1>
            <h3><img class="imgBu" src="img/busquedaB.png"> Zonas</h3>
                <div class="fil-header">
                    <a id="CU-h" type="botton" class="btn btn-link" data-toggle="collapse" data-target="#CU-c" aria-controls="CU-c">
                    Ciudad Universitaria (CU)
                    </a>
                </div>
                        <div id="CU-c" class="fil-content collapse" aria-labelledby="CU-h" data-parent="#sDer">
                            <ul>
                            <li>
                                <?php
                                    $lRutas = $link-query("SELECT rutas.nombre,calificaciones.cant_estrellas FROM rutas INNER JOIN calificaciones ON rutas.id_ruta=calificaciones.id_calificacion WHERE nombre_destino = 'CU' ORDER BY calificaciones.cant_estrellas DESC");
                                    $ref='<a href="#" onclick="loadMap()">';
                                    //Ciclo para imprimir n rutas acomodadas por mayor calificacion
                                    while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
                                        $nomRuta = $arrayRutas['rutas.nombre'];
                                        $cantEstrellas = $arrayRutas['calificaciones.cant_estrellas'];
                                        echo "<li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a>'."</li";
                                    }
				                    $lRutas->free();
                                ?>
                            </ul>
                        </div>
                <div class="fil-header">
                    <a id="CAPU-h" type="botton" class="btn btn-link" data-toggle="collapse" data-target="#CAPU-c" aria-controls="CAPU-c">
                    Central de Autobuses de Puebla (CAPU)
                    </a>
                </div>
                        <div id="CAPU-c" class="fil-content collapse" aria-labelledby="CAPU-h" data-parent="#sDer">
                            <ul>
                            <li><a href="#" onclick="loadMap()">
                                <?php
                                    $lRutas = $link-query("SELECT rutas.nombre,calificaciones.cant_estrellas FROM rutas INNER JOIN calificaciones ON rutas.id_ruta=calificaciones.id_calificacion WHERE nombre_destino = 'CAPU' ORDER BY calificaciones.cant_estrellas DESC");
                                    $ref='<a href="#" onclick="loadMap()">';
                                    //Ciclo para imprimir n rutas acomodadas por mayor calificacion
                                    while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
                                        $nomRuta = $arrayRutas['rutas.nombre'];
                                        $cantEstrellas = $arrayRutas['calificaciones.cant_estrellas'];
                                        echo "<li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a>'."</li";
                                    }
				                    $lRutas->free();
                                ?>
                                <img src="img/5estrellas.png" class="imgE"></a></li>
                            </ul>
                        </div>
                <div class="fil-header">
                   <a id="Loreto-h" type="botton" class="btn btn-link" data-toggle="collapse" data-target="#Loreto-c" aria-controls="Loreto-c">
                    Los fuertes de Loreto
                    </a>
                </div>
                        <div id="Loreto-c" class="fil-content collapse" aria-labelledby="Loreto-h" data-parent="#sDer">
                            <ul>
                            <li><a href="#" onclick="loadMap()">
                                <?php
                                    $lRutas = $link-query("SELECT rutas.nombre,calificaciones.cant_estrellas FROM rutas INNER JOIN calificaciones ON rutas.id_ruta=calificaciones.id_calificacion WHERE nombre_destino = 'Fuertes' ORDER BY calificaciones.cant_estrellas DESC");
                                    $ref='<a href="#" onclick="loadMap()">';
                                    //Ciclo para imprimir n rutas acomodadas por mayor calificacion
                                    while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
                                        $nomRuta = $arrayRutas['rutas.nombre'];
                                        $cantEstrellas = $arrayRutas['calificaciones.cant_estrellas'];
                                        echo "<li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a>'."</li";
                                    }
				                    $lRutas->free();
                                ?>
                                <img src="img/5estrellas.png" class="imgE"></a></li>
                            </ul>
                        </div>
                <div class="fil-header">
                    <a id="Ange-h" type="botton" class="btn btn-link" data-toggle="collapse" data-target="#Ange-c" aria-controls="Ange-c">
                    Angelópolis centro comercial
                    </a>
                </div>
                        <div id="Ange-c" class="fil-content collapse" aria-labelledby="Ange-h" data-parent="#sDer">
                            <ul>
                            <li><a href="#" onclick="loadMap()">
                                <?php
                                    $lRutas = $link-query("SELECT rutas.nombre,calificaciones.cant_estrellas FROM rutas INNER JOIN calificaciones ON rutas.id_ruta=calificaciones.id_calificacion WHERE nombre_destino = 'Angelópolis' ORDER BY calificaciones.cant_estrellas DESC");
                                    $ref='<a href="#" onclick="loadMap()">';
                                    //Ciclo para imprimir n rutas acomodadas por mayor calificacion
                                    while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
                                        $nomRuta = $arrayRutas['rutas.nombre'];
                                        $cantEstrellas = $arrayRutas['calificaciones.cant_estrellas'];
                                        echo "<li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a>'."</li";
                                    }
				                    $lRutas->free();
                                ?>
                                <img src="img/5estrellas.png" class="imgE"></a></li>
                            </ul>
                        </div>
                <div class="fil-header">
                    <a id="CCU-h" type="botton" class="btn btn-link" data-toggle="collapse" data-target="#CCU-c" aria-controls="CCU-c">
                    Complejo Cultural Universitario (CCU)
                    </a>
                </div>
                        <div id="CCU-c" class="fil-content collapse" aria-labelledby="CCU-h" data-parent="#sDer">
                            <ul>
                            <li><a href="#" onclick="loadMap()">
                                <?php
                                    $lRutas = $link-query("SELECT rutas.nombre,calificaciones.cant_estrellas FROM rutas INNER JOIN calificaciones ON rutas.id_ruta=calificaciones.id_calificacion WHERE nombre_destino = 'CCU' ORDER BY calificaciones.cant_estrellas DESC");
                                    $ref='<a href="#" onclick="loadMap()">';
                                    //Ciclo para imprimir n rutas acomodadas por mayor calificacion
                                    while($arrayRutas = $lRutas->fetch_array(MYSQLI_ASSOC)){
                                        $nomRuta = $arrayRutas['rutas.nombre'];
                                        $cantEstrellas = $arrayRutas['calificaciones.cant_estrellas'];
                                        echo "<li>".$ref.$nomRuta.'<img src="img/estrellas/'.$cantEstrellas.'png" class="imgE"></a>'."</li";
                                    }
				                    $lRutas->free();
                                ?>
                                <img src="img/5estrellas.png" class="imgE"></a></li>
                            </ul>
                        </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <!---------------------------------------------Seccion FOOTER-->
    <footer class="footer">
        <section class="footer-col">
            <span>¡Cuentanos tu experiencia!</span>
        </section>
        <section class="footer-col">
            <span>Copyrights &copy; 2019 Find A Way</span>
        </section>
        <section class="footer-col">
            <span>¿Tienes dudas? | </span>
            <a type="buttom" id="qYa" onclick="loadDoc(1)">Preguntas Frecuetes</a>
        </section>
    </footer>
    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Personal JS -->
    <script src="scripts/vistaContenido.js" type="text/javascript"></script>
    <script src="scripts/vinculacion.js" type="text/javascript"></script>
  </body>
</html>

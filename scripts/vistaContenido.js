function mostrarInfo(){
    var ob = document.getElementById("infoRuta");
    ob.style.display="block";
    document.getElementById("flagNameRuta").scrollIntoView(false);
}
//Funcion para cargar cada mapa
//en loadmap("nombreRuta")
function loadMap()
{
    //hacer un link para cada ruta
    var ruta10="https://www.google.com/maps/d/embed?mid=1_hCLxFvRH0-V_tvteuGLWY9xNlk&hl=es-419";
    //hacer un case con las diferentes nombres de las rutas
    //switch (nombreRuta)
    //case "ruta10"
    //document.getElementById('main-map').src = ruta10;
    //break;
    document.getElementById('main-map').src = ruta10;
    mostrarInfo()
}
//Funcion para limpiar el mapa
function clearMap()
{
    document.getElementById('main-map').src = "https://www.google.com/maps/d/embed?mid=1sAdyj55AKuJ4RV2gjA0Q4rBM8q-VsDi5";
    quitarInfo();
}

function quitarInfo(){
    var ob = document.getElementById("infoRuta");
    ob.style.display="none";
}
//Funcion para agregar la página de preguntas y respuestas
function loadDoc(opc){
         var xhttp = getObjXMLHttpRequest();
         xhttp.open('GET','q&a.php',true);
         xhttp.onreadystatechange = function(){
         if (this.readyState == 4 && this.status == 200){
             switch(opc){
                //Case de la página q&a
                 case 1: document.getElementById("body").innerHTML = xhttp.responseText;
                break;
             }
         }
         };
         xhttp.send();
     }
//Funcion para detectar navegadores del innerHTML
function getObjXMLHttpRequest(){
    var http;
    if(window.ActiveXObject){
        http= new ActiveXObject("Msxml2.XMLHttp");
     return http;         
    }
    else{
        http = new XMLHttpRequest();
        return http;
    }
};

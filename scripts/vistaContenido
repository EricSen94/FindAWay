function mostrarInfo(){
    var ob = document.getElementById("infoRuta");
    ob.style.display="block";
    document.getElementById("flagNameRuta").scrollIntoView(false);
}
function quitarInfo(){
    var ob = document.getElementById("infoRuta");
    ob.style.display="none";
}
//INNERHTML Y AJAX
function loadDoc(opc){
         var xhttp = getObjXMLHttpRequest();
         xhttp.open('GET','q&a.php',true);
         xhttp.onreadystatechange = function(){
         if (this.readyState == 4 && this.status == 200){
             switch(opc){
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


function enviar(){
    let nombre = document.getElementById("nombre").value;
    let contenidoHTML = "<h1>Hola," + nombre + "</h1>";
    contenidoHTML = contenidoHTML + "<button onclick='volver();'>volver</button>" 
    document.getElementById("divVacio").innerHTML = contenidoHTML; 
    document.getElementById("formulario").style.display = "none"; 
    document.getElementById("divVacio").style.display = "block";
}
    function volver(){
    document.getElementById("formulario").style.display="block";
    document.getElementById("divVacio").style.display = "none";
    }
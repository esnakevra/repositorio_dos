// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosEmpleado(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  nom=document.nuevo_empleado.nombre.value;
  ape=document.nuevo_empleado.apellido.value;
  web=document.nuevo_empleado.web.value;
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("nombre="+nom+"&apellido="+ape+"&web="+web)
}
 
//función para limpiar los campos
function LimpiarCampos(){
  document.nuevo_empleado.nombre.value="";
  document.nuevo_empleado.apellido.value="";
  document.nuevo_empleado.web.value="";
  document.nuevo_empleado.nombre.focus();
}
function eliminarDato(idempleado){
  //donde se mostrará el resultado de la eliminacion
  divResultado = document.getElementById('resultado');
  
  //usaremos un cuadro de confirmacion  
 var eliminar = confirm("De verdad desea eliminar este dato?")
  if ( eliminar ) {
$(document).ready(function(){
  //alert("hola");
           setTimeout(function(){ $(".mensajes").fadeOut(500).fadeIn(900).fadeOut(700).fadeIn(500).fadeOut(300);}, 1000);  
        });
    //instanciamos el objetoAjax
    ajax=objetoAjax();

    //uso del medotod GET
    //indicamos el archivo que realizará el proceso de eliminación
    //junto con un valor que representa el id del empleado
    ajax.open("GET", "eliminacion.php?idempleado="+idempleado);

    ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
         
        //mostrar resultados en esta capa
        divResultado.innerHTML = ajax.responseText
      }
    }
    //como hacemos uso del metodo GET
    //colocamos null
//esto es un comentario

    ajax.send(null)
  }
}
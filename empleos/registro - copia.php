<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "empleadosdos"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $nom=$_POST['nombre'];
  $ape=$_POST['apellido'];
  $web=$_POST['web'];
 
//registra los datos del empleados
  $sql="INSERT INTO empleados (nombre, apellido, web) VALUES ('$nom', '$ape', '$web')";
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>
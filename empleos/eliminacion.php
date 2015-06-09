
<?php

//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "empleadosdos"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $idemp=$_GET['idempleado'];
 //$nom=$_GET['nombre'];
// $idemp=$_GET['nombre'];




//variable GET
  
//elimina el registro de la tabla empleados
$sql="DELETE FROM empleados WHERE  idempleado=$idemp";


mysql_query($sql,$con) or die('Error. '.mysql_error());

include('consulta.php');

?>
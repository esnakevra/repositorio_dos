<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "empleadosdos"; 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 
//consulta todos los empleados
$sql=mysql_query("SELECT * FROM empleados",$con);
?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Ide</td>
    <td>Nombre</td>
		<td>Apellido</td>
		<td>Web</td>
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
    echo "<td><a style=\"text-decoration:underline;cursor:pointer;\" onclick=\"eliminarDato('".$row['idempleado']."')\">".$row['idempleado']."</a></td>";
      echo "<td>".$row['nombre']."</td>";
  	echo "<td>".$row['apellido']."</td>";
  	echo "<td>".$row['web']."</td>";
  	echo "</tr>";
  }
?>
</table>
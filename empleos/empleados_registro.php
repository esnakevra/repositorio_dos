<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Registro de empleados</title>

  <style type="text/css">

.info, .exito, .alerta, .error {
    font-family:Arial, Helvetica, sans-serif; 
    font-size:13px;
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 50px;
    background-repeat: no-repeat;
    background-position: 10px center;
    position:relative;
}
.info {
    color: #00529B;
    background-color: #BDE5F8;
    background-image: url('info.png');
}
.exito {
    color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('exito.png');
}
.alerta {
    color: #9F6000;
    background-color: #FEEFB3;
    background-image: url('alerta.png');
}

</style>
<script type="text/javascript" src="jquery-1.2.6.js"></script>
    <script type="text/javascript">
      


function mostrar()
{
$(document).ready(function(){
  //alert("hola");
           setTimeout(function(){ $(".mensajes").fadeOut(200).fadeIn(800).fadeOut(500).fadeIn(500).fadeOut(300);}, 1000);  
        });
}

</script>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>

  </head>
  <body>
		<form name="nuevo_empleado" action="" onsubmit="enviarDatosEmpleado(); return false">
			<h2>Nuevo empleado</h2>
				<table>
                <tr>
                	<td>Nombres</td><td><label><input name="nombre" type="text" required /></label></td>
               	</tr>
                <tr>
					<td>Apellido</td><td><label><input type="text" name="apellido" required /></label></td>
				</tr>
                <tr>
                    <td>Web</td><td><label><input name="web" type="text"  required /></label></td>
				</tr>
                <tr>
                   	<td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Grabar" /></label></td>
                   
                 
                </tr>
                </table>
		</form>
    <div  id='oculto' class="exito mensajes" style='display:none;' >Mensaje de éxito de la operación realizada</div>
 
		<div id="resultado"><?php include('consulta.php');?></div>
 
    </body>
</html>
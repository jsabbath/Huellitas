<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>Documento sin título</title>
<script type="text/javascript" charset="utf-8" src="banner_edgePreload.js"></script>
    <style>
        .edgeLoad-EDGE-1509208 { visibility:hidden; }
    .bienvenido p strong {
	font-size: 24px;
}
    .bienvenido h1 {
	font-size: 36px;
}
    .bienvenido p {
	font-size: 18px;
}
    .footer {
	font-weight: bold;
}
    .footer {
	font-size: 24px;
	color: #FFF;
}
    </style>
</head>

<body>
<table width="994" height="1191" border="0" align="center">
  <tr>
    <td height="149" colspan="2" bgcolor="#95BE0E"><table width="98%" border="0">
        <tr>
          <td width="333"><img src="images/logotipo.png" width="333" height="122"></td>
		    <td width="638"><a href="index.html"><img src="images/cerrar-sesion.png" width="80" height="80" align="right"></a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="296" height="271" bgcolor="#95BE0E"> <p></p></td>
    <td width="688" height="271" bgcolor="#95BE0E"><div id="Stage2" class="EDGE-1509208"></div></td>
  </tr>
  <tr>
    <td height="42" colspan="2"><table width="588" border="0" align="right">
      <tr>
        <td width="184"><a href="modificar_productos.php"><img src="imagenes/modificar_productos.png" width="180" height="40" align="absmiddle"></a></td>
        <td width="184"><a href="reporte.php"><img src="imagenes/reporte.png" width="177" height="37" align="absmiddle"></a></td>
        <td width="184"><a href="usuarios.php"><img src="imagenes/btn_usuario.gif" width="177" height="37" align="absmiddle"></a></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="691" align="center"><h1>

        <table width="276" height="689" border="0">
          <tr>
            <td width="270" height="238"><p>CUIDADO DE  TU MASCOTA:</p>
              <p><a href="http://www.gorinkai.com/webppa/alimcuid.htm" target="nueva"><img src="imagenes_veterinaria/cudado_del_perro.jpg" alt="PERRO" width="272" height="145" align="absmiddle"></p></td>
          </tr>
          <tr>
            <td height="147"><p><a href="http://www.royalcanin.com.mx/el-gatito-y-el-gato/el-gato/viviendo-con-su-gato/cuidados-y-tratamientos" target="nueva"><img src="imagenes_veterinaria/cuidado_del_gato.jpg" alt="GATO" width="272" height="145" align="absmiddle"></p></td>
          </tr>
          <tr>
            <td height="145"><p><a href="http://animales.uncomo.com/articulo/como-cuidar-un-conejo-domestico-7287.html" target="nueva"><img src="imagenes_veterinaria/conejo.jpg" alt="CONEJO" width="272" height="145" align="absmiddle"></p></td>
          </tr>
          <tr>
            <td height="147"><p><a href="http://animales.uncomo.com/articulo/como-cuidar-un-perico-18437.html"><img src="imagenes_veterinaria/PERICO_PAREJA.JPG" alt="PERICOS" width="275" height="145" align="absmiddle"></p></td>
          </tr>
        </table>
    </h1></td>
    <td align="center" valign="top"><div class="bienvenido"><h1>&nbsp; </h1>
      <h1>VETERINARIA "HUELLITAS" </h1>
      <div id="contenido_bd">
              
      <?php
	require("conexion.php");
	
	$query= "SELECT id, nombre, dni, correo from usuarios";
	$resultado = $mysqli->query($query);
	$con = new DB;
	$usuarios = $con->conectar();
	$strConsulta = "SELECT id, nombre, dni, correo from usuarios";
	$usuarios = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($usuarios);
	  ?>
	  
	  <table border="1" width="80%">
	  	<thead>
	  		<tr>
	  			<td>N</td>
	  			<td>Nombre</td>
	  			<td>DNI</td>
	  			<td>Correo</td>
	  			<td></td>
	  		</tr>
	  		<tbody>
	  			<?php 
	  			for ($i=0; $i<$numfilas; $i++){
	  				$fila = mysql_fetch_array($usuarios);
					$numlista = $i + 1;?>
	  				<tr>
	  					<td><?php echo $numlista;?></td>
						<td><?php echo $fila['nombre'];?></td>
        				<td><?php echo $fila['dni'];?></td>
        				<td><?php echo $fila['correo'];?></td>
						<td><a href="reporte_historial.php?id=<?php echo $fila['id'];?>">Ver</a></td>
						<td><a href="modificar.php?id=<?php echo $fila['id'];?>">Modificar</a></td>
						<td><a href="eliminar.php?id=<?php echo $fila['id'];?>">Eliminar</a></td>
					</tr>
				
	  			<?php }?>
	  		</tbody>
	  	</thead>
		</table>	
      </div>
         </div>
        <p><img src="imagenes_veterinaria/contactenos.jpg" width="369" height="137" alt="contactenos"></p>
        <p>&nbsp;</p>
  </tr>
  <tr>
    <td height="21" colspan="2" bgcolor="#228F22"><footer><p align="center">&nbsp;</p>
      <p align="center" class="footer">Copyright &copy; Todos los Derechos Reservados</p>
      <p align="center">&nbsp;</p>
    </footer></td>
  </tr>
</table>
</body>
</html>
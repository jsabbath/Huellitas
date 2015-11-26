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
    <td height="149" colspan="2" bgcolor="#95BE0E"><table width="987%" border="0">
        <tr>
          <td width="333"><img src="images/logotipo.png" width="333" height="122"></td>
          <td width="638">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="296" height="271" bgcolor="#95BE0E"><p>&nbsp;</p>
      <p>&nbsp;</p>
       <p><a href="./manuel/principal.php" target="nueva"><img src="carrito.png" width="200" height="200"></p>
    <td width="688" height="271" bgcolor="#95BE0E"><div id="Stage2" class="EDGE-1509208"></div></td>
  </tr>
  <tr>
    <td height="42" colspan="2"><table width="588" border="0" align="right">
      <tr>
      
        <td width="139" height="41"><a href="index.html"><img src="imagenes/btn_inicio.png" width="139" height="37" align="absmiddle"></a></td>
        <td width="252"><a href="quienes_somos.html"><img src="imagenes/btn_quienes.png" width="252" height="37" align="absmiddle"></a></td>
        <td width="184"><a href="contacto.php"><img src="imagenes/btn_contactenos.png" width="177" height="37" align="absmiddle"></a></td>
       
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
        <div id="contenido_bd2">
          <div id="cont_contacto">
            <div>¡Visítanos en Avenida Luis Flores #483 o escríbenos, recuerda completar todos los campos, te esperamos!
            </div>
          </div>
        </div>
        <?php
if (!isset($_POST['email'])) {
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <table>
      <tr>
      <td>Nombre: </td>
      <td><input name="nombre" type="text"></td>
      </tr>  
      <tr>
      <td>Teléfono:</td>
      <td><input name="telefono" type="text"></td>
	  </tr>
      <tr>
      <td>Email: </td>
      <td><input name="email" type="text"></td>
      </tr>
      <tr>
      <td>Mensaje:</td> 
      <td><textarea name="mensaje" rows="6" cols="50"></textarea></td>
      </tr>
      <tr>
      <td><input type="reset" value="Borrar" /></td>
      <td><input type="submit" value="Enviar" /></td>
      </tr>
    </table>
    </form>

<?php
}else{
  $mensaje="Mensaje del la pagina huellotas";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "gina33122@gmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
      </div>
         </div>
        <p><img src="imagenes_veterinaria/contactenos.jpg" width="369" height="137" alt="contactenos"></p>
        <p>&nbsp;</p>
    <p><span class="footer"><a href="registrese.php"><img src="imagenes_veterinaria/botón_regístrate-aquí-12.png" width="172" height="62" alt="registrate"></a> </span></p></td>
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


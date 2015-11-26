<?php
require_once 'conexion.php';
$nombre=$_REQUEST["nombre"];
$ruta=$_FILES["productos"];
$descripcion=['descripcion'];
$imagen=$_FILES['imagen'];
$precio=['precio'];
$destino="productos/".$ruta;
copy($ruta,$destino);
mysql_query("insert into productos (nombre, descripcion,imagen,precio) values('$nombre', '$descripcion', '$imagen', '$precio')");
header("Location: indexito.php");
?>

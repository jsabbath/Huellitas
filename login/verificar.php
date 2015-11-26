	<?php
session_start();
include "../conexion.php";
$re=mysql_query("select * from usuarios where usuario='".$_POST['usuario']."' AND 
 					password='".$_POST['password']."'")	or die(mysql_error());
	while ($f=mysql_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['Nombre']);
	}
	if(isset($arreglo)){
		$_SESSION['usuario']=$arreglo;
		header("Location: ./index.html");
	}else{
		header("Location: ./login.php?error=datos no validos");
	}
?>
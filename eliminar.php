<?php
    require('conexion.php');
	
	$id=$_GET['id'];
	$query="DELETE FROM usuarios WHERE id='$id'";
	$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title>Eliminar Usuario</title>
	</head>
	<body>
		<center>
			<?php
			if($resultado>0){
				?>
				<h1>Usuario Eliminado</h1>
				<?php }else{?>
					<h1>Error al eliminar el usuario</h1>
					<?php }?>
				<p></p>
				<a href="usuarios.php">Regresar</a>
		</center>
	</body>
</html>
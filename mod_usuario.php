<?php
    require ('conexion.php');
	$id=$_POST['id'];
	$nombre = $_POST['nombre'];
	$dni = $_POST['dni'];
	$direccion = $_POST['direccion'];
	$mascota = $_POST['mascota'];
	$edad = $_POST['edad'];
	$sexo = $_POST['radio1'];
	$color = $_POST['color'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$correo = $_POST['email'];
	
	$query="UPDATE usuarios SET nombre='$nombre', dni='$dni', direccion='$direccion', mascota='$mascota', edad='$edad', sexo='$sexo', color='$color', usuario='$usuario', password='$password', correo='$correo' WHERE id='$id'";
	$resultado=$mysqli->query($query);
	
?>


<html>
	<head>
		<title>Modificar Usuario</title>
	</head>
	<body>
		<center>
			<?php
			if($resultado>0){
				?>
				<h1>Usuario Modificado</h1>
				<?php }else{?>
				<h1>Error al modificar usuario</h1>
				<?php }?>
				<p></p>
				<a href="usuarios.php">Regresar</a>
		</center>
	</body>
</html>
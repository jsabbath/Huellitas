<?php
require ('conexion.php');
	$id=$_GET ['id'];
	$query="select nombre, dni, direccion, mascota, edad, sexo, color, usuario, password, correo from usuarios where id='$id'";
	$resultado=$mysqli->query($query);
	$row=$resultado->fetch_assoc();
?>


<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		<center><h1>Modificar Usuarios</h1></center>
				
				<form name="form1" method="post" action="mod_usuario.php">
          		
          		<table>
          		<tr>
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				</tr>
          		</table>
          		
          		<fieldset><legend>Datos del propietario:</legend>
          		<table bgcolor="#F1FFE8">
          		<tr>
          		<td>Nombre del Propietario:</td>
          		<td><input type="text" name="nombre" value="<?php echo $row['nombre'];?>"</td>
            	</tr>
            	<tr> 
            	<td>DNI</td>
          		<td><input type="text" name="dni" value="<?php echo $row['dni'];?>"</td>          		
          		</tr>
            	<tr>
            	<td>Dirección:</td>
          		<td><input type="text" name="direccion" value="<?php echo $row['direccion'];?>"</td>
          		</tr>
          		</table>
          		</fieldset>
          	
          		<fieldset><legend>Datos de la mascota:</legend>
          		<table bgcolor="#F1FFE8">
          		<tr>
          		<td>Nombre de la mascota: </td>
          		<td><input type="text" name="mascota" value="<?php echo $row['mascota'];?>"</td>
          		</tr>
          		<tr>
          		<td>Edad</td>
          		<td><input type="text" name="edad" value="<?php echo $row['edad'];?>"</td>
          		</tr>
            	<tr>
            	<td>Sexo:</td>
          		<td align="center"><input type="radio" name="radio1" value="<?php echo $row['sexo'];?>">Hembra
         		<input type="radio" name="radio1" value="<?php echo $row['sexo'];?>" >Macho</td>
        		</tr>
          		<tr>
          		<td> Color:</td>
          		<td><input type="text" name="color" value="<?php echo $row['color'];?>"</td>
          		</tr>
          		</table>
          		</fieldset>
          	
          		<fieldset><legend>Datos del Usuario</legend>
          		<table bgcolor="#F1FFE8">
          		<tr>
          		<td>Nombre de Usuario: </td>
          		<td><input type="text" name="usuario" value="<?php echo $row['usuario'];?>"</td>
          		</tr>
          		<tr>
          		<td>Contraseña: </td>
          		<td><input type="password" name="password" value="<?php echo $row['password'];?>"</td>
          		</tr>	
          		<tr>
          		<td>Correo:</td>
          		<td><input type="text" name="email" value="<?php echo $row['correo'];?>"</td>
          		</tr>
 				</table>
            	</fieldset>
          	
          	<table>
          	<tr>
          		<td colspan="2" align="center"><input type="submit" value="guardar" name="Guardar"></td>
          	</tr>
          	
          	</table>
          	
      </form>
				</body>
				</html>
					


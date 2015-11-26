<!DOCTYPE html>
<html>
	
	<head>
		<title>huellitas</title>
	</head>
	<body>
		
	<form action="" method="post">
    <label>
      Nombre:
      <input name="nombre" type="text" />
    </label>
    <label>
      Teléfono:
      <input name="telefono" type="text" />
    </label>
    <label>
      Email:
      <input name="email" type="text" />
    </label>
    <label>
      Mensaje:
      <textarea name="mensaje" rows="6" cols="50"></textarea>
    </label>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" />
  </form>
</body>
</html>
<?php
  $mail="gina33122@gmail.com";
  $nombre = $_POST["nombre"];
  $telefono = $_POST["telefono"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  $thank="gracias.html";
  $message = "
  nombre:".$nombre."
  telefono:".$telefono."
  email:".$email."
  mensaje:".$mensaje."";
  if (mail ($mail,"contactenos",$message)) Header ("location: $thank" );
  ?>
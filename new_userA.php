<html>

<head>
<title> Registro de Usuarios </title>
      
</head>
<body>

<form action = "2.php" method="POST">
<input type="text" size="50" name="nombre" required="" placeholder="Nombre" >
<input type="text" size="50" name="apellido" required="" placeholder="Apellido" >
<input type="text" size="50" name="cel" required="" placeholder="Telefono" >
<input type="email" size="50" name="correo" required="" placeholder="correo" >
<input type="text" size="50" name="username" required="" placeholder="Usuario" >

<input type="password" size="50" name="password" required="" placeholder="Contraseña" >

<input type="hidden" value = "1" name ="nivel">
<input type="hidden" value = "Administrador" name = "usuarioT">
<input type="submit" value = "Registrate">


</form>

   <a href="log.php" class="text-muted">¿Ya tienes cuenta? Ingresa</a>
       
        
</body></html>


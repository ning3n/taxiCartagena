<center>  <?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cel=$_POST['cel'];
$correo=$_POST['correo'];
$username=$_POST['username'];
$password=$_POST['password'];
$nivel=$_POST['nivel'];
$usuarioT=$_POST['usuarioT'];


?>

<?php
// Otro código de tu sistema aquí... 

include './conexion.php';
$conexion=$misn;
$DB=$misN;			
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("insert into user (nombre,apellido,cel,correo,usuario,pass,nivel,taxi_id) values ('$nombre','$apellido','$cel','$correo','$username','$password','$nivel','$usuarioT')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);


echo "<h2 class='top-1 p0'>El Archivo Fue Ingresado Con &Eacute;xito.</h2>";
echo "<meta http-equiv=Refresh content=3;url=login.php>";

?>


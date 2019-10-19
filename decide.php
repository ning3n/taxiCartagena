

 <?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$identificador1=1;
$identificador2=2;
$identificador3=3;




include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from user where usuario=$usuario and pass=$clave",$conexion) 
	or die ("<meta http-equiv=Refresh content=1;url=log.php>");
	while ($reg=mysql_fetch_array($consulta))
{
$id=$reg['id'];
$nombre=$reg['nombre'];
$apellido=$reg['apellido'];
$cel=$reg['cel'];
$correo=$reg['correo'];
$usuario=$reg['usuario'];
$pass=$reg['pass'];
$nivel=$reg['nivel'];
$taxi_id=$reg['taxi_id'];


}
	mysql_close($conexion);

/* quedaria fino un gif animado de un taxi*/
if ($nivel==$identificador1)
{
	 echo "<meta http-equiv=Refresh content=1;url=admin.php?id=<?php echo $id;?> >";
}

if ($nivel==$identificador2)
{
echo "<meta http-equiv=Refresh content=1;url=taxista.php?id=<?php echo $id;?> >";

}
if ($nivel==$identificador3)
{

echo "<meta http-equiv=Refresh content=1;url=user.php?id=<?php echo $id;?> >";

}



?>

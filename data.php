 <?php



$user_id=$_POST['user_id'];
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];
$monto=$_POST['monto'];
$user_taxi=$_POST['user_taxi'];





	include './conexion.php';
$conexion=$misn;
$DB=$misN;			
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("insert into data (user_id,desde,hasta,taxi,monto) values ('$user_id','$desde','$hasta','$user_taxi','$monto')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);


	include './conexion.php';
$conexion=$misn;
$DB=$misN;			
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("DELETE FROM ofer where user_taxi=$user_taxi",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);



	include './conexion.php';
$conexion=$misn;
$DB=$misN;			
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("DELETE FROM solicitud where user_id=$user_id",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);




?>
su taxi pasara en pocos momentos



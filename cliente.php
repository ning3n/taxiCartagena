 <?php



$id=$_POST['id'];
$desde=$_POST['desde'];
$hasta=$_POST['hasta'];



	include './conexion.php';
$conexion=$misn;
$DB=$misN;			
	
	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$registros=mysql_query("insert into solicitud (user_id,desde,hasta) values ('$id','$desde','$hasta')",$conexion) 
	or die ("Problemas al guardar.".mysql_error());
	mysql_close($conexion);



?>
solicitud enviada nuestros conductores le responderan en breves momentos

<meta http-equiv=Refresh content="1;url=cliente2.php?id=<?php echo $id;?>" > 


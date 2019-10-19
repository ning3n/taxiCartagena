 <?php



$b=$_GET['b'];
?>
solicitud enviada nuestros conductores le responderan en breves momentos

<meta http-equiv=Refresh content="1;url=cliente2.php?b=<?php echo $b;?>" > 

<table border=1>
<tr>
<td>Origen</td>
<td>Destino</td>
<td>Tarifa</td>
<td>Descripcion del Taxi</td>
<td>Opcion</td>
</tr>
<tr>

<?php
include './conexion.php';
$conexion=$misn;
$DB=$misN;

	mysql_select_db($DB,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta=mysql_query("select * from solicitud where user_id=$b ",$conexion) 
	or die ("Problemas al buscar.".mysql_error());
	if ($reg=mysql_fetch_array($consulta))
{
$desde=$reg['desde'];
$hasta=$reg['hasta'];
}
	
include './conexion.php';
$conexion2=$misn;
$DB2=$misN;

	mysql_select_db($DB2,$conexion) or die ("Problemas en la seleccion en la base de datos");
	$consulta2=mysql_query("select * from ofer where user_id=$b ",$conexion2) 
	or die ("Problemas al buscar.".mysql_error());
	while ($reg2=mysql_fetch_array($consulta2))
{
$monto=$reg2['monto'];
$user_taxi=$reg2['user_taxi'];
?>

<td><?php echo $desde;?></td>
<td><?php echo $hasta;?></td>
<td><?php echo $monto;?></td>
<td><?php echo $user_taxi;?></td>
<form action=data.php method=post><td>

<input type=hidden name=user_id value="<?php echo $b;?>" >
<input type=hidden name=desde value="<?php echo $desde;?>" >
<input type=hidden name=hasta value="<?php echo $hasta;?>" >
<input type=hidden name=monto value="<?php echo $monto;?>" >
<input type=hidden name=user_taxi value="<?php echo $user_taxi;?>" >

<input type=submit value="aceptar oferta">

</td></form> 
<?php
}
	

?>

</tr>
</table>



<br>
<a href=log.php>SALIR</a>

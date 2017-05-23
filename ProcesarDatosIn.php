<?php
$id_inmueble=$_POST['id'];
$Tipo=$_POST['tipo'];
$Direccion=$_POST['dire'];
$Dimension=$_POST['dime'];
$Costo=$_POST['cost'];


if(isset($_POST['id']) && !empty($_POST['id']) &&
   isset($_POST['tipo']) && !empty($_POST['tipo']) &&
   isset($_POST['dire']) && !empty($_POST['dire']) &&
   isset($_POST['dime']) && !empty($_POST['dime']) &&
   isset($_POST['cost']) && !empty($_POST['cost']) ){

	$EnlaceBD= mysql_connect("localhost","root","Admin123","avihome");

	mysql_query($EnlaceBD,"INSERT INTO inmueble VALUES '$id_inmueble','$Tipo','$Direccion','$Dimension','$Costo'");
	echo "datos enviados correctamente :)";

}
?>
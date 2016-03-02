<?php 
//$resultado = $_POST['valorCaja1'] . $_POST['valorCaja2']; 
//$resultado = $_POST['user'].$_POST['nombre'].$_POST['tipo'].$_POST['cantidad'];
//echo $resultado;
	$user = $_POST['user'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$cantidad = $_POST['cantidad'];	
	echo $user.' '.$nombre.' '.$tipo.' '.$cantidad;
?>
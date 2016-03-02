<?php
$articulo_id = $_POST['articulo_id'];
require("connect_db.php");
$sql = "DELETE FROM articulo WHERE articulo_id=$articulo_id";
if (!mysqli_query($link,$sql)){
			echo "Error Delete: ".mysqli_error($link);//$sql ";
} else {
		echo '<meta http-equiv="refresh" content="0; url=cartaPedido.php#abrirPedido" /> '; 
};
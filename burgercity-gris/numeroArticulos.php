<?php 
	require("connect_db.php");
	session_start();
	$user = $_SESSION['usuario'];
	//listamos los articulos de ese pedido
	$sql = "SELECT COUNT(*) AS num_articulos FROM articulo_pedido_activo WHERE user = '$user'";
	$result = mysqli_query($link,$sql);
	if (!$result){
	          echo "Error1";            
	      } else {
	         			$fila = mysqli_fetch_array($result);
            		if ($fila['num_articulos'] > 0) {			                      
                  echo $fila['num_articulos'];
                } else {
                	echo "0";
                }
	      };
 ?>
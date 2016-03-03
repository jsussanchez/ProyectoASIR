<?php 
	require("connect_db.php");
	session_start();
	$user = $_SESSION['usuario'];
	//listamos los articulos de ese pedido
	$sql = "SELECT articulo_id, nombre, tipo, cantidad, precio FROM articulo_pedido_activo WHERE user = '$user'";
	$result = mysqli_query($link,$sql);
	if (!$result){
	          echo "Error1";            
	      } else {
	            if (mysqli_num_rows($result) > 0) {                                        
	                while($fila = mysqli_fetch_assoc($result)) 
	                {
	                echo '<div class="caja3">'.$fila["tipo"].' </div><div class="caja3">'.$fila["nombre"].'</div><div class="caja3">'.$fila["cantidad"].' </div><div class="caja2">'.$fila["precio"].'€</div><div class="caja1"><a href="javascript:;" onclick="BorrarArticulo(\''.$fila["articulo_id"].'\' );return false;"><i class="fa fa-times" style="color: red"></i></a></div>';                                        
	                }
	            } else {
	              echo "NO HAY PRODUCTOS";
	            };
	};                   
echo '<div class="caja12 cajaPrecio">
                <div class="caja9 txtTotal">TOTAL:</div>
                <div class="caja2 precioTotal"> ';
		            $sql = "SELECT SUM(precio) AS precio_total FROM articulo_pedido_activo WHERE user = '$user'";
		            $result = mysqli_query($link,$sql);
		            if (!$result){
		                      echo "Error1";            
		                  } else {
		                  		$fila = mysqli_fetch_array($result);
		                  		if ($fila['precio_total'] > 0) {			                      
			                      echo $fila['precio_total']."€";
			                    } else {
			                    	echo "0 €";
			                    }
		                  };
echo '			</div>
				<div class="caja1"></div>
	</div>';
 ?>
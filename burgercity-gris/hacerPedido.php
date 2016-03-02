<?php  
	$user = $_POST['user'];
	$nombre = $_POST['nombre'];
	$tipo = $_POST['tipo'];
	$cantidad = $_POST['cantidad'];	
	//conectamos con la BBDD
	require("connect_db.php");
	//Comprobamos si existe algún pedido activo del usuario
	// - Buscamos id del cliente
	$sql= "SELECT cliente_id FROM cliente WHERE user = '$user'";
	$result = mysqli_query($link,$sql);
	if (!$result){
            echo "Error1";            
        } else {
        		$fila = mysqli_fetch_array($result);
        		$cliente_id = $fila['cliente_id'];            
        }
	// - Buscamos en tabla pedido si el cliente tiene activo
	$sql = "SELECT pedido_id FROM pedido WHERE cliente_id = '$cliente_id' AND status= 'activo'";
	$result = mysqli_query($link,$sql);
	if (!$result){
            echo "Error2";            
        } else {
        				if (mysqli_num_rows($result) > 0) {
		        				$fila = mysqli_fetch_array($result);
		        				$pedido_id = $fila['pedido_id'];
           			 } else {
           			 			//Si no tiene pedido activo, crear nuevo pedido al cliente actual
           			 			$sql = "INSERT INTO pedido (cliente_id, status) VALUES ( '$cliente_id', 'activo')";
           			 			if (!mysqli_query($link,$sql)){
           			 				echo "Error3 ";
           			 				};
           			 }
  };        
   //Creamos un articulo con el producto pedido
   //- Necesitamos el pedido_id activo
	$sql = "SELECT pedido_id FROM pedido WHERE cliente_id = '$cliente_id' AND status= 'activo'";
	$result = mysqli_query($link,$sql);
	if (!$result){
            echo "Error4";            
        } else {
        				if (mysqli_num_rows($result) > 0) {
        						$fila = mysqli_fetch_array($result);
        						$pedido_id = $fila['pedido_id'];
           			}
  };		 	
	//buscamos el producto_id y precio
	$sql = "SELECT producto_id, precio FROM producto WHERE nombre = '$nombre' AND tipo = '$tipo' ";
	$result = mysqli_query($link,$sql);
	if (!$result){
            echo "Error5";            
        } else {
        				if (mysqli_num_rows($result) > 0) {
           					 $row = mysqli_fetch_assoc($result);
           					 $producto_id = $row['producto_id'];
           					 $precio = $row['precio'];
           			}
  };
  //Si existe el producto en el pedido, actualizar cantidad+1
  $sql = "SELECT articulo_id FROM articulo WHERE pedido_id = $pedido_id AND producto_id = $producto_id";
  $result = mysqli_query($link,$sql);
  if (!$result){
            echo "Error6";            
        } else {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $articulo_id = $row['articulo_id'];
                    $sql = "UPDATE articulo SET cantidad = ($cantidad+1) WHERE articulo_id = $articulo_id";
                      if (!mysqli_query($link,$sql)){
                            echo "Error update ";
                      };
                }  
  };          
  //Si no, creamos un articulo en el pedido
	$arti_precio = $cantidad * $precio;	
	$sql = "INSERT INTO articulo (producto_id, pedido_id, cantidad, precio) VALUES ('$producto_id','$pedido_id','$cantidad','$arti_precio' )";
	if (!mysqli_query($link,$sql)){
				echo "Error7 ";
	};

?>
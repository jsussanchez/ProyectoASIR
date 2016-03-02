<?php
	require("connect_db.php");
    $sql = "SELECT nombre, tipo, cantidad, precio FROM articulo_pedido_activo WHERE user = 'jesus'";
    $result = mysqli_query($link,$sql);

    if (!$result){
              echo "Error1";            
          } else {
                if (mysqli_num_rows($result) > 0) {                    
                    while($fila = mysqli_fetch_assoc($result)) 
                    {                    
                    echo "<div class='caja12'>" . $fila['tipo']. " - " . $fila['nombre']. " - " . $fila['cantidad']. " - " . $fila['precio']."</div>";                                        
                    }
                } else {
                  echo "0 resultados";
                };
    };            
?>
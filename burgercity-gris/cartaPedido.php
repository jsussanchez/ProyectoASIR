<?php
require("connect_db.php");
session_start();
// funcioón para buscar los precios
function Fprecios($fnombre){
    global $link;
    $sql = "SELECT precio FROM producto WHERE nombre = '$fnombre'";
    $result = mysqli_query($link,$sql);
    if (!$result){
            $my_error = mysqli_error($result);
            echo "Ha habido un error: $my_error";
        } else {
            $fila = mysqli_fetch_array($result);
            echo "<span class='precio'>".$fila['precio']."€</span>";
    }
  };

if (isset($_SESSION['usuario']))
{  
    $user = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Burgercity - Carta Pedido</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>  
</head>
<body>
  <header id="navegador">
    <div class="contenedor">
        <div class="caja12 edificios">
          <img src="img/edificios_gris.png" alt="">          
          <a class="scroll" href="#abrirPedido"><img src="img/logotipo_burgercity_BK.png" alt="burgercity" class="logo"></a>
          <div class="caja3">
            <div class="caja10">
                <?php                   
                    echo 'Usuario :'.$_SESSION['usuario'].'';
                  ?>
              </div>
              <div class="caja2 logout">
                <a href="logout.php">
                  <i class="fa fa-sign-out"></i>
                </a>
              </div>
            </div>
      </div>
    </div>
  </header>
<!-- /Navegador -->

  <section id="carta" class="cartapedido">
    <div class="contenedor">   
      <div class="caja12 inicio"></div>
      <div class="caja12 texto">
        <h1 class="textcarta">PEDIDO ONLINE</h1>
        <span id="resultado"></span>        
      </div>
      <!-- HAMBURGUESA --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>
        <div class="caja2">        
          <div>
            <img src="img/hamburguesa.jpg">
          </div>
          <div>
            <h2>HAMBURGUESAS</h2>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>ESPECIAL 
          <?php
             Fprecios("especial");                  
          ?>
          </h3>          
          <div class="caja12 ingredientes">
            <ul>
              <li>doble hamburguesa</li>
              <li>huevo</li>
              <li>queso</li>
              <li>pepinillos</li>
              <li>tomate y lechuga</li>
            </ul>            
          </div>
          <div class="caja12 boton-anadir"><a href="#abrirPedido" onclick="Pedido('<?php echo $user ?>','especial','hamburguesas','1');"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>         
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>COMPLETA
          <?php
             Fprecios("completa");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>hamburguesa</li>              
              <li>queso</li>              
              <li>tomate y lechuga</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','completa','hamburguesas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SIMPLE
          <?php
             Fprecios("simple");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>hamburguesa</li>              
              <li>queso</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','simple','hamburguesas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>
      <!-- PIZZA --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>        
        <div class="caja2">
          <h3>TROPICAL
          <?php
             Fprecios("tropical");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>piña</li>
              <li>bacon</li>
              <li>queso</li>
              <li>tomate</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','tropical','pizzas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>ATÚN Y BACON
          <?php
             Fprecios("atun-bacon");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>atún</li>              
              <li>bacon</li>              
              <li>queso</li>
              <li>tomate</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','atun-bacon','pizzas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>JAMÓN
          <?php
             Fprecios("jamon");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>jamón</li>
              <li>queso</li>              
              <li>tomate</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','jamon','pizzas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">        
          <div>
            <img src="img/Pizza.jpg">
          </div>
          <div>
            <h2>PIZZAS</h2>
          </div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div> 
      <!-- ALITAS --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>
        <div class="caja2">        
          <div>
            <img src="img/alitas.jpg">
          </div>
          <div>
            <h2>ALITAS POLLO</h2>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>BARBACOA
          <?php
             Fprecios("barbacoa");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alitas de pollo</li>
              <li>salsa barbacoa</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','barbacoa','alitas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>BRAVAS
          <?php
             Fprecios("bravas");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alias de pollo</li>              
              <li>salsa brava</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','bravas','alitas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>TOMATE
          <?php
             Fprecios("tomate");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alitas de pollo</li>              
              <li>salsa tomate</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','tomate','alitas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>
      <!-- ENSALADAS --> 
            <div class="caja12 tipo">
        <div class="caja2"></div>        
        <div class="caja2">
          <h3>CESAR
          <?php
             Fprecios("cesar");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>pollo asado</li>
              <li>picatostes</li>
              <li>tomate cherry</li>
              <li>lechuga</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','cesar','ensaladas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>COMPLETA
          <?php
             Fprecios("completa");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>atún</li>              
              <li>maiz</li>
              <li>aceitunas</li>
              <li>huevo duro</li>              
              <li>tomate</li>
              <li>cebolla</li>
              <li>lechuga</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','completa','ensaladas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SIMPLE
          <?php
             Fprecios("simple");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>cebolla</li>
              <li>tomate</li>              
              <li>lechuga</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','simple','ensaladas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">        
          <div>
            <img src="img/ensalada.jpg">
          </div>
          <div>
            <h2>ENSALADAS</h2>
          </div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div> 
      <!-- PATATAS --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>
        <div class="caja2">        
          <div>
            <img src="img/patatas.jpg">
          </div>
          <div>
            <h2>PATATAS</h2>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>BRAVAS
          <?php
             Fprecios("bravas");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas grandes</li>
              <li>salsa brava</li>
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','bravas','patatas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>ALI-OLI
          <?php
             Fprecios("ali-oli");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas</li>              
              <li>salsa ali-oli</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','ali-oli','patatas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SENCILLAS
          <?php
             Fprecios("sencilla");                  
          ?>
          </h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas</li>              
              <li>salsa ketchup</li>              
            </ul>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>','sencilla','patatas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>
      <!-- BEBIDAS --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>        
        <div class="caja2">
          <h3>REFRESCOS</h3>
          <div class="caja12 ingredientes bebidas">
            <div class="caja6 Rnombre">
              <input type="radio" name="refresco" value="cola" id="refresco" checked/>
              <label for="cola">cola</label><br>
              <input type="radio" name="refresco" value="naranja" id="refresco"/>
              <label for="naranja">naranja</label><br>
              <input type="radio" name="refresco" value="sprite" id="refresco"/>
              <label for="sprite">sprite</label>
            </div>
            <div class="caja6 Rprecios">
              <ul style="list-style-type: none;">
                <li><?php Fprecios("cola"); ?></li>
                <li><?php Fprecios("naranja"); ?></li>
                <li><?php Fprecios("sprite"); ?></li>
              </ul>
            </div>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>',$('#refresco:checked').val(),'bebidas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>CERVEZAS</h3>
          <div class="caja12 ingredientes bebidas">
            <div class="caja6 Rnombre">
              <input type="radio" name="cerveza" value="estrella-galicia" id="cerveza" checked/>
              <label for="estrella-galicia">estrella galicia</label><br>
              <input type="radio" name="cerveza" value="mahon" id="cerveza"/>
              <label for="mahon">mahón</label><br>
              <input type="radio" name="cerveza" value="negra" id="cerveza"/>
              <label for="negra">negra</label>  
            </div>
            <div class="caja6 Rprecios">
              <ul style="list-style-type: none;">
                <li><?php Fprecios("estrella-galicia"); ?></li>
                <li><?php Fprecios("mahon"); ?></li>
                <li><?php Fprecios("negra"); ?></li>
              </ul>
            </div>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>',$('#cerveza:checked').val(),'bebidas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>AGUAS</h3>
          <div class="caja12 ingredientes bebidas"> 
            <div class="caja6 Rnombre">
              <input type="radio" name="agua" value="agua-pequena" id="agua" checked/>
              <label for="agua-pequena">pequeña</label><br>
              <input type="radio" name="agua" value="agua-mediana" id="agua"/>
              <label for="agua-mediana">mediana</label><br>
              <input type="radio" name="agua" value="agua-mediana-gas" id="agua"/>
              <label for="agua-mediana-gas">mediana/gas</label>
            </div>
            <div class="caja6 Rprecios">
              <ul style="list-style-type: none;">
                <li><?php Fprecios("agua-pequena"); ?></li>
                <li><?php Fprecios("agua-mediana"); ?></li>
                <li><?php Fprecios("agua-mediana-gas"); ?></li>
              </ul>
            </div>
          </div>
          <div class="caja12 boton-anadir"><a href="javascript:;" onclick="Pedido('<?php echo $user ?>',$('#agua:checked').val(),'bebidas','1');return false;"><i class="fa fa-plus"></i> AÑADIR</a></div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">        
          <div>
            <img src="img/bebidas.jpg">
          </div>
          <div>
            <h2>BEBIDAS</h2>
          </div>
        </div>
      </div>  
      

     
     
    </div><!-- menu-->
  </section> <!-- carta-->
<!-- / Carta -->

  <footer id="pie">
    <div class="contenedor">
      <div class="caja2">
        <div class="social">
          <i class="fa fa-facebook"></i>
        </div>
        <div class="social">  
          <i class="fa fa-twitter"></i>
        </div>
        <div class="social">  
          <i class="fa fa-google-plus"></i>
        </div> 
      </div>
      <div class="caja10">
        <ul class="nav">
          <li>BURGERCITY, S.L</li>
          <li>¿QUIENES SOMOS?</li>
          <li>CONDICIONES DE USO</li>
          <li>POLÍTICA DE COOKIES</li>
          <li>AVISO LEGAL</li>
          <li>PUBLICIDAD</li>
          <li>AYUDA</li>
        </ul> 
      </div> 
    </div> 
  </footer>
<!-- / pie --> 

<!-- Ventana Modal abrirPedido -->
    <div id="abrirPedido" class="pedido">
      <div class="contenedor">
          <div class="caja2"></div>
          <div class="caja8 divpedido">
            <a href="#cerrar" title="Cerrar" class="cerrar"><i class="fa fa-times"></i></a>
                 
            <div class="caja12">
              <h2>SU PEDIDO</h2>
            </div>
            <div class="caja12 titulos">
                <div class="caja3">TIPO</div>
                <div class="caja3">NOMBRE</div>
                <div class="caja3">CANTIDAD</div>
                <div class="caja2">PRECIO</div>
            </div>
            <div class="caja12 articulos">                                                
                    <?php 
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
                                      echo "0 resultados";
                                    };
                        };            

                    ?>
                </div>
                <div class="caja12 cajaPrecio">
                    <div class="caja9 txtTotal">TOTAL:</div>
                    <div class="caja2 precioTotal">
                        <?php
                            $sql = "SELECT SUM(precio) AS precio_total FROM articulo_pedido_activo WHERE user = '$user'";
                            $result = mysqli_query($link,$sql);
                            if (!$result){
                                      echo "Error1";            
                                  } else {
                                      $fila = mysqli_fetch_array($result);
                                      echo $fila['precio_total']."€";
                                  };
                        ?>
                    </div>
                    <div class="caja1"></div>
                </div>                     
                <div class="caja12">
                  <button type="submit"class="boton enviar" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">
                    <span class="boton-texto">PAGAR</span>
                    <span class="boton-icono"><i class="fa fa-arrow-right"></i></span>                  
                  </button>  
                </div>          
              
             </div> 
             
          </div>
          <div class="caja2"></div>
        </div>
    </div> 

</body>
</html>

<?php
}
else
{
  echo '<script>location.href = "index.php";</script>';
}
?>

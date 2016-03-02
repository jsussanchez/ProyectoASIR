<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Burgercity</title>
  <link rel="stylesheet" href="css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="js/scroll.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <header id="navegador">
    <div class="contenedor">
        <div class="caja12 edificios">
          <img src="img/edificios_gris.png" alt="">          
          <a class="scroll" href="#principal"><img src="img/logotipo_burgercity_BK.png" alt="burgercity" class="logo"></a>
          <?php
            if (isset($_SESSION['usuario']))
            {
          ?>             
              <div class="caja3">
                <div class="caja10">
                <?php
                  echo "Usuario :".$_SESSION['usuario'];
                ?>
                </div>
                <div class="caja2 logout">
                  <a href="logout.php"><i class="fa fa-sign-out"></i></a>
                </div>
              </div>
          <?php    
          } else {
          ?>
              <div class="enlaces-derecha index">
                    <span><a href="index.php#abrirLogin">ACCESO A TU CUENTA</a></span>
                    <span><i class="fa fa-circle"></i></span>                
                    <span><a href="registro_usuarios.php">REGISTRO USUARIOS</a></span>
              </div>
          <?php                 
          }
          ?>
         
          <div class="enlaces caja12">
            <span> <a class="scroll" href="#acarta">NUESTRA CARTA</a></span>
            <span> <a class="scroll" href="#apromo">PROMOCION</a> </span>
            <span> <a class="scroll" href="#amapa">MAPA</a> </span>
            <span> <a class="scroll" href="#acontacto">CONTACTO</a> </span>
          </div>
        </div>
    </div>
  </header>

  <section id="principal">
    <div class="contenedor">
        <div class="caja12 inicio"></div>
        <div class="caja12">
          <hr class="separadorblanco">
        </div>      
        <div class="caja12"></div>

        <div class="caja3">
          <div class="txtenvio">
            <h1>ENVIO GRATUITO A DOMICILIO</h1>
          </div>
          <div class="moto">
            <img src="img/moto_envio.png" alt="">
          </div>
        </div>
        <div class="caja6">
            <img src="img/local.png" alt="burgercity" class="local">
        </div>
        <div class="caja3 txthorario">
          <h1>ABIERTO TODOS <br>LOS DIAS <br>13:00H <br>A <br>24:00H</h1>
        </div>
          <div class="caja12 direccion">         
            <h2>AVENIDA DE LA MAHÍA, Nº 48,<br> BERTAMIRANS - AMES<br>TELF: 981 891 117</h2>
          </div>
          <div class="caja12" id="acarta"></div>

    </div>
    
  </section>
<!-- / Principal -->

  <section id="carta">
    <div class="contenedor">   
    
      <div class="caja12 texto">
        <h1 class="textcarta">NUESTRA CARTA</h1>
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
          <h3>ESPECIAL</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>doble hamburguesa</li>
              <li>huevo</li>
              <li>queso</li>
              <li>pepinillos</li>
              <li>tomate y lechuga</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>COMPLETA</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>hamburguesa</li>              
              <li>queso</li>              
              <li>tomate y lechuga</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SIMPLE</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>hamburguesa</li>              
              <li>queso</li>              
            </ul>
          </div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>
      <!-- PIZZA --> 
      <div class="caja12 tipo">
        <div class="caja2"></div>        
        <div class="caja2">
          <h3>TROPICAL</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>piña</li>
              <li>bacon</li>
              <li>queso</li>
              <li>tomate</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>ATÚN Y BACON</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>atún</li>              
              <li>bacon</li>              
              <li>queso</li>
              <li>tomate</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>JAMÓN</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>jamón</li>
              <li>queso</li>              
              <li>tomate</li>              
            </ul>
          </div>
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
          <h3>BARBACOA</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alitas de pollo</li>
              <li>salsa barbacoa</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>BRAVAS</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alias de pollo</li>              
              <li>salsa brava</li>              
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>TOMATE</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>alitas de pollo</li>              
              <li>salsa tomate</li>              
            </ul>
          </div>
        </div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>
      <!-- ENSALADAS --> 
            <div class="caja12 tipo">
        <div class="caja2"></div>        
        <div class="caja2">
          <h3>CESAR</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>pollo asado</li>
              <li>picatostes</li>
              <li>tomate cherry</li>
              <li>lechuga</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>COMPLETA</h3>
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
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SIMPLE</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>cebolla</li>
              <li>tomate</li>              
              <li>lechuga</li>              
            </ul>
          </div>
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
          <h3>BRAVAS</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas grandes</li>
              <li>salsa brava</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>ALI-OLI</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas</li>              
              <li>salsa ali-oli</li>              
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>SENCILLAS</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>patatas</li>              
              <li>salsa ketchup</li>              
            </ul>
          </div>
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
          <div class="caja12 ingredientes">
            <ul>
              <li>cola</li>
              <li>naranja</li>
              <li>sprite</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>CERVEZAS</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>estrella galicia</li>              
              <li>mahón</li>
              <li>negra</li>
            </ul>
          </div>
        </div>
        <div class="linea-vertical"></div>
        <div class="caja2">
          <h3>AGUAS</h3>
          <div class="caja12 ingredientes">
            <ul>
              <li>mediana</li>
              <li>pequeña</li>              
              <li>mediana/ con gas</li>              
            </ul>
          </div>
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
      
      <div class="caja12">
        <div class="caja4"></div>
        <div class="caja4">
        <?php
            if (isset($_SESSION['usuario']))
            {
              echo '<a class="boton" href="cartaPedido.php">';
            } else {
              echo '<a class="boton" href="#abrirLogin">';
            };
        ?>          
            <span class="boton-icono"><i class="fa fa-shopping-cart"></i></span>
            <span class="boton-texto">PEDIDO ON LINE</span>
          </a>    
        </div>
        <div class="caja4"></div>
      </div>
      <div class="caja12" style="height:20px"></div>
      <div class="caja12" id="apromo"></div>
    </div><!-- menu-->
  </section> <!-- carta-->
<!-- / Carta -->

  <section id="promo">
    <div class="contenedor" >     

        <div class="caja12">
          <hr class="separadorblanco">
        </div>   

      <div class="caja12 texto">
        <h1 class="textpromo">PROMOCIÓN</h1>
      </div>

      <div class="caja12 fotopromo">
            <dic class="caja3"></dic>
            <div class="caja6 foto">
                <img src="img/promocion.jpg" alt="" class="imgpromo">  
                <span class="estrella"><i class="fa fa-star fa-pulse"></i></span>
                <span class="precio">5€</span>
            </div>
            <div class="caja3"></div>
      </div>
      <div class="caja12 textfoto">
          <h3>Hamburguesa completa <i class="fa fa-plus"></i> patatas medianas <i class="fa fa-plus"></i> refresco pequeño</h3> 
      </div>

      <div class="caja12">
        <div class="caja4"></div>
        <div class="caja4" id="amapa">
        <?php
            if (isset($_SESSION['usuario']))
            {
              echo '<a class="boton" href="cartaPedido.php">';
            } else {
              echo '<a class="boton" href="#abrirLogin">';
            };
        ?>
            <span class="boton-icono"><i class="fa fa-shopping-cart"></i></span>
            <span class="boton-texto">PEDIDO ON LINE</span>
          </a>    
        </div>
        <div class="caja4"></div>
      </div>
      <div class="caja12">
        <hr class="separadorblanco">
      </div>  
    </div>
  </section>
<!-- / Promo -->

    <section id="mapa">
      <div class="contenedor">
        <div class="caja12">
          <h1>Estamos muy cerca</h1>
        </div>
        <div class="caja2"></div>
        <div class="caja8">
          <img src="img/mapa.png" alt="">
          <div class="direccion">                  
              <h2>AVENIDA DE LA MAHÍA, Nº 48, BERTAMIRANS - AMES</h2>
              <h2>TELF: 981 891 117</h2>
          </div>
        </div>
        <div class="caja2"></div>
        <div class="caja12" id="acontacto"></div>
        

      </div>
    </section>
<!-- / Mapa -->      

    <section id="contacto">
      <div class="contenedor">
        <div class="caja12">
          <hr class="separadorblanco">
        </div>  
        <div class="caja12 texto">
          <h1>CONTACTO</h1>
        </div>
        <div class="caja3"></div>
        <div class="caja6">
          <form action="">
              <div class="caja12 grupo">
                <label class='label'>Nombre</label>
                <input type="text" placeholder="Nombre" class="campos" name="nombre" required />            
              </div>
              <div class="caja12 grupo">
                <label class='label'>Email</label>
                <input type="email" placeholder="Email" class="campos" name="email" required />
              </div>
              <div class="caja12 grupo">
                <label class='label'>Mensaje</label>
                <textarea placeholder="Mensaje" name="mensaje" id="" class="campos mensaje" required></textarea>
              </div>
              <div class="caja12">
                <button type="submit"class="boton enviar">
                  <span class="boton-texto">ENVIAR</span>
                  <span class="boton-icono"><i class="fa fa-arrow-right"></i></span>                  
                </button>  
              </div>
          </form>
        </div>
        <div class="caja3"></div>
      </div>
    </section>
<!-- / Contacto -->
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

<!-- Ventana Modal  de LOGIN -->

    <div id="abrirLogin" class="login">
      <div class="contenedor">
          <div class="caja4"></div>
          <div class="caja4 divlogin">
            <a href="#cerrar" title="Cerrar" class="cerrar"><i class="fa fa-times"></i></a>
                 
            <div class="caja12">
              <h2>ACCESO A TU CUENTA</h2>
            </div>
            <div class="caja12">
              <form name="Form1" method="post" action="return false" onsubmit="return false" id="Form1">
                <div id="resultado" class="caja12"></div> 
                <div class="caja12 grupo">                               
                    <div class="caja12">
                      <label class="label">Usuario</label>
                    </div>
                    <div class="caja12">
                      <input type="text" name="user" id="user" value="" class="campos" placeholder="Usuario" required />
                    </div>            
                </div>
                <div class="caja12 grupo">
                    <div class="caja12">
                      <label class="label">Password</label>
                    </div>
                    <div class="caja12">
                      <input type="password" name="pass" id="pass" value="" class="campos" placeholder="Password" required />
                    </div>            
                </div>            
                <div class="caja12">
                  <button type="submit"class="boton enviar" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">
                    <span class="boton-texto">ENTRAR</span>
                    <span class="boton-icono"><i class="fa fa-arrow-right"></i></span>                  
                  </button>  
                </div>          
              </form>
             </div> 
              <div class="otroLogin">
                <a href="registro_usuarios.php">Registro nuevo usuario</a> - <a href="resetPassword.php">Password perdido</a>
              </div>
          </div>
          <div class="caja4"></div>
        </div>
    </div>
<!--/ Ventana Modal Login -->

</body>
</html>

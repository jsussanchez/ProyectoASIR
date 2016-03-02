<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Burgercity - Resetear Password</title>
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">	
</head>
<body>
	<header id="navegador">
		<div class="contenedor">
		    <div class="caja12 edificios">
		      <img src="img/edificios_gris.png" alt="">          
		      <a class="scroll" href="index.php"><img src="img/logotipo_burgercity_BK.png" alt="burgercity" class="logo"></a>
		      <div class="enlaces-derecha">
	            <span><a href="index.html#abrirLogin">ACCESO A TU CUENTA</a></span>
	            <span><i class="fa fa-circle"></i></span>
	            <span><a href="registro_usuarios.php">REGISTRO USUARIOS</a></span>
			  </div>
			</div>
		</div>
	</header>
	<section id="reset-pass">
		<div class="contenedor">
		    <div class="caja12 texto">
          		<h1>RESETEAR EL PASSWORD</h1>
        	</div>						
		  <div id="registroUser" class="caja12 user">			
		    <div>
		        <form name="Form1" method="post" id="Form1">
		          <div class="grupo caja12">
		              <label class='label'>Usuario</label>
		              <input type="text" placeholder="Usuario" class="campos" name="user" required />
		          </div>		        	
		          <div class="grupo caja12">
		              <label class='label'>EMail</label>
		              <input type="email" placeholder="Email" class="campos" name="email" required />
		          </div>
		          <div class="grupo caja12">
		              <label class='label'>Nuevo Password</label>
		              <input type="password" name="pass" id="pass" value="" class="campos" placeholder="Nuevo Password" required />            
		          </div>
		          <button type="submit"class="boton enviar">
		            <span class="boton-texto">ENVIAR</span>
		            <span class="boton-icono"><i class="fa fa-arrow-right"></i></span>                  
		          </button>           
		        </form> 
		    </div>
		  </div>			
		</div>		
	</section>
<!-- Reset password -->		        		
    <footer id="pie">
      <div class="contenedor reset">
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
</body>
</html>
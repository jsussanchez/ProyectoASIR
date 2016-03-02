<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Burgercity - Registro usuarios</title>
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
	            <span><a href="resetPassword.php">RESET PASSWORD</a></span>
			  </div>
			</div>
		</div>
	</header>
	<section id="registro">
		<div class="contenedor">
		    <div class="caja12 texto">
          		<h1>REGISTRO DE USUARIOS</h1>
        	</div>						
		  <div id="registroUser" class="caja12 user">			
		    <div>
		    	<?php 
		    	if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
		    	?>
		        <form name="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="Form1">
		          <div class="grupo caja4">
		              <label class='label'>Nombre</label>
		              <input type="text" placeholder="Nombre" class="campos" name="nombre" required/ />        
		          </div>
		          <div class="grupo caja8">
		              <label class='label'>Apellidos</label>
		              <input type="text" placeholder="Apellidos" class="campos" name="apellidos" required/ />              
		          </div>
		          <div class="grupo caja6">
		              <label class='label'>Usuario</label>
		              <input type="text" placeholder="Usuario" class="campos" name="user" required/ />
		          </div>
		          <div class="grupo caja6">
		              <label class='label'>DNI</label>
		              <input type="text" placeholder="DNI" class="campos" name="dni" maxlength="9" pattern="(([X-Z,x-z]{1})([-]?)(\d{7})([-]?)([A-Z,a-z]{1}))|((\d{8})([-]?)([A-Z,a-z]{1}))" required/ />
		          </div>		          		          
		          <div class="grupo caja12">
		              <label class='label'>EMail</label>
		              <input type="email" placeholder="Email" class="campos" name="email" required/ />
		          </div>
		          <div class="grupo caja12">
		              <label class='label'>Password</label>
		              <input type="password" name="pass" id="pass" value="" class="campos" placeholder="Password" required/ />            
		          </div>
		            <div class="grupo caja12">
		              <label class='label'>Dirección</label>
		              <input type="text" placeholder="Dirección" class="form-control campos" name="direccion" required/>
		            </div>
		          <div class="grupo caja2">
		              <label class='label'>CP</label>
		              <input type="text" placeholder="Código postal" class="form-control campos" name="cp" maxlength="5" pattern="[0-9]{5}" required/>
		          </div>
		          <div class="grupo caja5">
		              <label class='label'>Población</label>
		              <input type="text" placeholder="Población" class="form-control campos" name="poblacion" required/>
		          </div> 
		          <div class="grupo caja5">
		              <label class='label'>Provincia</label>
		              <input type="text" placeholder="Provincia" class="form-control campos" name="provincia" required/>
		          </div> 
		          <div class="grupo caja12">
		              <label class='label'>Teléfono Fijo/Móvil</label>
		              <input type="tel" placeholder="Teléfono Fijo/Móvil" class="form-control campos" name="telefono" maxlength="9" pattern="[0-9]{9}" required/>
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
<!-- Registro Usuarios -->

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

        <?php } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $dni = $_POST['dni'];
            $email = $_POST['email'];
            $direccion = $_POST['direccion'];
            $cp = $_POST['cp'];
            $poblacion = $_POST['poblacion'];
            $provincia = $_POST['provincia'];
            $telefono = $_POST['telefono'];
            require("connect_db.php");
			@mysql_query($link, "SET NAMES 'utf8'");
			// comprobamos que no existe el usuario
			$sql =  "SELECT * FROM cliente WHERE user = '$user' OR email = '$email'";
        	$result = mysqli_query($link,$sql);
        	if (!$result) {
        		$my_error = mysqli_error($result);
        		echo "Ha habido un error: $my_error";
        	} else {
			        if (mysqli_num_rows($result) > 0) {

			                //$_SESSION["usuario"] = $user;
			                echo "<h2>Este usuario ya existe</h2>";			                
			                echo '<meta http-equiv="refresh" content="5; url=index.php" />';

			            } else {

			            	$sql = "INSERT INTO cliente (user, pass, nombre, apellidos, dni, email, direccion, cp, poblacion, provincia, telefono) 
								VALUES ('$user','$pass','$nombre','$apellidos','$dni','$email','$direccion','$cp','$poblacion','$provincia','$telefono')";
							mysqli_query($link,$sql);
							// Ahora comprobaremos que todo ha ido correctamente
							$my_error = mysqli_error($link);
							if (!empty($my_error)) {
								echo "Ha habido un error al insertar los valores. $my_error";
								} else {
								echo "<h2>Los datos han sido introducidos satisfactoriamente".$result."</h2>";
								echo "<h2></h2>";
								echo '<meta http-equiv="refresh" content="5; url=index.php" /> ';

							};
			        }; 

        	}
        	};
         ?>

</body>
</html>
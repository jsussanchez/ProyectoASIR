<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>BurgerCity: Resgistro de Usuarios</title>	
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main_user.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container registrousuarios">
			<div class="col-sm-3 hidden-xs logopequeno">
				<a class="navbar-brand" data-scroll href="#"><img src="img/logotipo_burgercity_pequeno.png"></a>
			</div>
			<div class="col-sm-9 registroh3">
				<h3 class="navbar-right">REGISTRO DE USUARIOS</h3>
			</div>
		</div>
	</nav>

	<div id="contenido">

	<section id="formulario">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3><i>Por favor, rellene todos los campos</i></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" id="soporteForm" method="post" action="ajaxSubmit.php">
                      <div class="form-group">
                        <div class="col-sm-4">
                        	  <label class='control-label'>Nombre</label>
                              <input type="text" placeholder="Nombre" class="form-control campos" name="nombre" required> 
                        </div>
                        <div class="col-sm-8">
                              <label class='control-label'>Apellidos</label>
                              <input type="text" placeholder="Apellidos" class="form-control campos" name="apellidos" required> 
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                        	<label class='control-label'>EMail</label>
                        	<input type="email" placeholder="Email" class="form-control campos" name="email" required>
                        </div> 
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                      		<label class='control-label'>Password</label>
                        	<input type="password" placeholder="Password" class="form-control campos" name="pass" required>
                        </div> 
                      </div>   

                      <div class="form-group">
                        <div class="col-sm-12">
                        	<label class='control-label'>Dirección</label>
                        	<input type="text" placeholder="Dirección" class="form-control campos" name="direccion" required>
                        </div> 
                      </div>

                      <div class="form-group">
                        <div class="col-sm-2">
                        	<label class='control-label'>CP</label>
                        	<input type="text" placeholder="Código postal" class="form-control campos" name="cp" maxlength="4" required>
                        </div>
                        <div class="col-sm-5">
                        	<label class='control-label'>Población</label>
                        	<input type="text" placeholder="Población" class="form-control campos" name="poblacion" required>
                        </div> 
                        <div class="col-sm-5">
                        	<label class='control-label'>Provincia</label>
                        	<input type="text" placeholder="Provincia" class="form-control campos" name="provincia" required>
                        </div>  
                      </div>

                      <div class="form-group">
                        <div class="col-sm-6">
                        	<label class='control-label'>Teléfono Fijo</label>
                        	<input type="text" placeholder="Teléfono Fijo" class="form-control campos" name="tfijo" required>
                        </div>
                        <div class="col-sm-6">
                        	<label class='control-label'>Teléfono Movil</label>
                        	<input type="text" placeholder="Teléfono Movil" class="form-control campos" name="tmovil" required>
                        </div>  
                      </div>

                      <div class="form-group boton">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                        </div> 
                      </div>
                  </form>
				</div>
			</div>
		</div>
	</section>	

	<footer id="pie">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-2">
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
			
				<div class="col-sm-10 enlaces">
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
		</div>
	</footer>
	</div> 	
</body>
</html>
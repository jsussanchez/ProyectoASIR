<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	require("connect_db.php");
	session_start();
	$nombre = $_POST['nombre'];
	$nick = $_POST['nick'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	//---------------------------------------------
	function ExisteUser(){
		//Comprobamos que no exista el usuario
		global $nick, $link;
		$sql = "SELECT * FROM usuarios WHERE nick = '".$nick."'";
		$buscaUser = mysql_query($sql,$link);
		if ( mysql_num_rows($buscaUser)> 0 ) {
	    		echo "<p>Este nombre de usuario ya existe</p><br>";
	    		return 0;
	    };
	}
	function InsertarUser(){
		global $link, $nombre, $nick, $pass;
		$sql = "INSERT INTO usuarios VALUES ('','$nombre','$nick','$pass')";
		if (mysql_query($sql,$link)) {
				echo "<p>Registro completo.</p><br>";
		} else {
			echo "<p>Error con Registro.</p><br>";
			return 0;
		};
	}    
	//------------------------------------------------
	
	$reglen = strlen($nick) * strlen($pass) * strlen($repass);
	//Comprueba si falta algun dato
	if ($reglen > 0){
		echo $nombre."<br>".$nick."<br>".$pass."<br>".$repass;	
		//comprueba que las contraseñas son iguales
		if ($pass === $repass){			
			//codifica la contraseña antes de meterla en bd
			$pass = md5($pass);
		} else {
			echo '<p>Por favor, introduzca dos contraseñas iguales.</p>';
			exit;
		};
	} else {
		echo '<p>Por favor, rellene todos los campos requeridos.</p>';
		exit;
	};
	if (ExisteUser() === 0){
		exit;
		} else {
			if (InsertarUser() === 0){
			exit;
			}
		}
?>
</body>
</html>

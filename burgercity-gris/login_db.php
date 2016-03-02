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
	$nick = $_POST['user'];
	$pass = $_POST['pass'];

	function ExisteUser(){
		//Comprobamos que exista el usuario
		global $nick, $link;
		$sql = "SELECT * FROM usuarios WHERE nick = '".$nick."'";
		$buscaUser = mysql_query($sql,$link);
		if ( mysql_num_rows($buscaUser)> 0 ) {	    		
	    		return 1;
	    	} else {
	    		echo "<p>Este nombre de usuario NO EXISTE</p><br>";
	    	}
	};
	

	function CompruebaPass(){
		//Comprobamos que el pass sea el correcto
		global $pass, $nick, $link;
		$sql = "SELECT * FROM usuarios WHERE nick = '$nick' and pass = '$pass'";
		$buscaUser = mysql_query($sql,$link);
		if ( mysql_num_rows($buscaUser)> 0 ) {	    		
	    		return 1;
	    	} else {
	    		echo "<p>Password INCORRECTO</p><br>";
	    	}
	};
	


	if (ExisteUser() === 1){
		echo "<p>Nombre de usuario CORRECTO</p>";
		if (CompruebaPass() === 1){
			echo "<p>Contraseña CORRECTA</p>";
		}
	}
?>

</body>
</html>
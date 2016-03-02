<?php 
	define('DB_SERVER','localhost');
	define('DB_NAME','dbburgercity');
	define('DB_USER','root');
	define('DB_PASS','Abc123.');
	$link = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);//si se conecta = true
	if (!$link) {
		echo "<span>ERROR DE CONEXIÓN</span>";
	};
	// else {		
	//	mysql_select_db(DB_NAME, $link);
	//}
 ?>
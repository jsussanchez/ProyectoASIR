<html> 
<head> 
<title>Ejemplo sencillo de AJAX</title> 
<script type="text/javascript" src="jquery-1.12.1.js"></script> 
<script type="text/javascript" src="funciones.js"></script>  
</head> 
<body> 
Introduce valor 1 
<input type="text" name="caja_texto" id="valor1" value="0"/> 
Introduce valor 2 
<input type="text" name="caja_texto" id="valor2" value="0"/> 
Realiza suma 
<input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
<br/> 
<a href="javascript:;" onclick="Pedido('jesus','especial','hamburguesa','1');return false;" value="Calcula">Calcula</a>
<br/>
Resultado: <span id="resultado">0</span> 
</body> 
</html>
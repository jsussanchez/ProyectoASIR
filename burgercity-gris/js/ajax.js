/*
* Parametros mandatorios
*/
    var seconds = 1; // el tiempo en que se refresca
	var divid = "contenido"; // el div que quieres actualizar!
	var divPe = "numArticulos"; // el div que quieres actualizar!	
	var url1 = "../Pedido.php"; // el archivo que ira en el div
	var url2 = "../numeroArticulos.php"; // el archivo que ira en el div

	function refreshdiv(){ 

		// The XMLHttpRequest object

		var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Tu explorador no soporta AJAX.");
					return false;
				}
			}
		}

		// Timestamp for preventing IE caching the GET request
		var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
		var nocacheurl1 = url1+"?t="+timestamp;
		var nocacheurl2 = url2+"?t="+timestamp;

		// The code...

		xmlHttp.onreadystatechange=function(){
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				document.getElementById(divid).innerHTML=xmlHttp.responseText;
				setTimeout('refreshdiv()',seconds*1000);
			}
			if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
				document.getElementById(divPe).innerHTML=xmlHttp.responseText;
				setTimeout('refreshdiv()',seconds*1000);
			}
		}

		xmlHttp.open("GET",nocacheurl1,true);
		xmlHttp.send(null);
		xmlHttp.open("GET",nocacheurl2,true);
		xmlHttp.send(null);
	}

	// Empieza la función de refrescar

	window.onload = function(){
		refreshdiv(); // corremos inmediatamente la funcion
	}
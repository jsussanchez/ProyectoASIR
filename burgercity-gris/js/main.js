//************************************
//
// SCRIP Creado por Jesús Sánchez 
// fecha: 20/01/2016
//
//************************************

function Validar(user, pass)
  {
      $.ajax({
          url: "../login_db2.php",
          type: "POST",
          data: "user="+user+"&pass="+pass,
          success: function(resp){
              $('#resultado').html(resp)
          }        
      });
  };          

function Pedido(user, nombre, tipo, cantidad)
  {
    $.ajax({
        url: "../hacerPedido.php",
        type: "POST",
        data: "user="+user+"&nombre="+nombre+"&tipo="+tipo+"&cantidad="+cantidad,
        success: function(resp){
              $('#resultado').html(resp)
          } 
    });
  };

function BorrarArticulo(articulo_id)
  {
    $.ajax({
        url: "../borrarArticulo.php",
        type: "POST",
        data: "articulo_id="+articulo_id,
        success: function(resp){
              $('#resultado').html(resp)
          } 
    });
  };


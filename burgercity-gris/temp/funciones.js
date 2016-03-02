function realizaProceso(valorCaja1, valorCaja2){
        // var parametros = {
        //         "valorCaja1" : valorCaja1,
        //         "valorCaja2" : valorCaja2
        // };
        $.ajax({
                //data:  parametros,
                data: "valorCaja1="+valorCaja1+"&valorCaja2="+valorCaja2,
                url:   'ejemplo_ajax_proceso.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
};

function Pedido(user, nombre, tipo, cantidad)
  {
    $.ajax({
        url:  'ejemplo_ajax_proceso.php',
        type: "post",
        data: "user="+user+"&nombre="+nombre+"&tipo="+tipo+"&cantidad="+cantidad,
        success:  function (response) {
                $("#resultado").html(response);
        }
    });
  }
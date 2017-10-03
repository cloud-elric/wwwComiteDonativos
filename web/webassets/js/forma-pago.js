var modal = $("#modal-checkout");
var progressBar = $(".progressBar-hidden .progress");
var contenedorAjax = $(".ajax-container");
$(document).ready(function(){
    $(".js-btn-pago").on("click", function(){
        var token = $(this).data("token");
        var tokenOc = $(this).data("tokenoc");
        var tipo = $(this).data("value");
        // abrirModal();
        // colocarProgressBar();
        if(tipo==1){
            enviarInformacion(token, tokenOc, tipo);
        }
    });

});

function abrirModal(){
    modal.modal("show");
}

function cerrarModal(){ 
    modal.modal("hide");
}

function colocarProgressBar(){
    contenedorAjax.html(progressBar.html());
}

function removerProgressBar(){
    contenedorAjax.html("");
}

function colocarRespuesta(res){
    contenedorAjax.html(res);
}

function enviarInformacion(token , tokenOc, tipo){
    $.ajax({
        url: baseUrl+"/pagos/generar-orden-compra?token="+tokenOc,
        type: "POST",
        data:{
            formaPago: token
        },
        success:function(res){
            colocarRespuesta(res);

            if(tipo==1){
                $("#form-pay-pal").submit();    
            }
        }
    });
}
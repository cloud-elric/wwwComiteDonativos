var modal = $("#modal-checkout");
var progressBar = $(".progressBar-hidden .progress");
var contenedorAjax = $(".ajax-container");
$(document).ready(function(){
    $("#opc-pay-pal").on("click", function(){
        var token = $(this).data("token");
        var tokenOc = $(this).data("tokenoc");
        abrirModal();
        colocarProgressBar();
        enviarInformacion(token, tokenOc);
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

function enviarInformacion(token , tokenOc){
    $.ajax({
        url: baseUrl+"/pagos/generar-orden-compra?token="+tokenOc,
        type: "POST",
        data:{
            formaPago: token
        },
        success:function(res){
            colocarRespuesta(res);
        }
    });
}
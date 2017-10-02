var botonesAmount = null;
var otraCantidad = null;
var amount = null;
$(document).ready(function(){
    botonesAmount = $(".js-select-amount");
    otraCantidad = $(".js-add");
    amount = $("#entordenescompras-num_total");

    otraCantidad.on("change", function(e){
        removerActivar();
        amount.val(otraCantidad.val());
    });

    botonesAmount.on("click", function(e){
        e.preventDefault();
        var elemento = $(this);
        removerActivar()
        activarBoton(elemento);
        var cantidad = $(this).data("value");
        amount.val(cantidad);
    })
});

function activarBoton(elemento){
    elemento.addClass("btn-success");
}

function removerActivar(){
    botonesAmount.removeClass("btn-success");
}
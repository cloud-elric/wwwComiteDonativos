Pago se esta procesando

<script>
setTimeout(function() {
    $.ajax({
        url: baseUrl+"site/verificar-pago?oc=<?=$ordenCompra->txt_order_number?>",
        success: function(res){
            if(res=="1"){
                window.location.replace(baseUrl+"site/mis-boletos");
            }
        }
    });
}, 5000);

</script>
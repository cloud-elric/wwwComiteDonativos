
$(document).ready(function(){
    setTimeout(function() {
    $.ajax({
        url: baseUrl+"site/verificar-pago?oc=<?=$oc?>",
        success: function(res){
            if(res=="1"){
                window.location.replace(baseUrl+"site/mis-boletos");
            }
        }
    });
}, 5000);
});

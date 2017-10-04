<section class="donativos-wrapper">
    <div class="container-full">
        <div class="login-content">
            <h3>Pago en proceso</h3>
        </div>
    </div>
  </section>


<script>
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


</script>
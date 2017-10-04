<style>
.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
<section class="donativos-wrapper">
    <div class="container-full">
        <div class="login-content">
            <h3><div class="loader"></div>Pago en proceso</h3>
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
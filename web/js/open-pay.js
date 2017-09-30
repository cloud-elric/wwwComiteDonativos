$(document).ready(function(){
    $('.collapsible').collapse();

    $('.js-print-button').on('click', function(e){
        e.preventDefault();

        $('.tickert-print').printArea({
            mode: 'iframe'
        });
    });

    console.log('aqui');


      OpenPay.setId('mgvepau0yawr74pc5p5x');
         OpenPay.setApiKey('pk_a4208044e7e4429090c369eae2f2efb3');
            
            OpenPay.setSandboxMode(true);
            //Se genera el id de dispositivo
            var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");
            
            $('#pay-button').on('click', function(event) {
                event.preventDefault();
                $("#pay-button").prop( "disabled", true);
                OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);                
            });

            var sucess_callbak = function(response) {
                console.log(response);
              var token_id = response.data.id;
              $('#token_id').val(token_id);
              var forma = $('#payment-form');
			
			$.ajax({
				url: forma.attr("action"),
				data:forma.serialize(),
				method:"POST",
				success: function(response){

					if(response=="success"){
                        $("#pay-button").prop("disabled", false);
                        $('.lean-overlay').trigger('click');
						swal("Correcto", "La compra se ha procesado correctamente", "success");
                        paso1();
					}else{
						//toastrError(response);
						$("#pay-button").prop( "disabled", false);
					}
				},error:function(){

					}
			});
              
            };

            var error_callbak = function(response) {
                var desc = response.data.description != undefined ? response.data.description : response.message;
                
                //alert("ERROR [" + response.status + "] " + desc);
                swal("Un momento", 'Open pay rechazó el pago por: '+desc, "warning")
                $("#pay-button").prop("disabled", false);
            };

        


  });
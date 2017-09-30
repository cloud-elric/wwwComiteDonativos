 
<?php
use yii\helpers\Url;

$this->registerJsFile(
    '@web/js/open-pay.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Imprimir ticket
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
       
      <img  src="<?=$charger->payment_method->barcode_url?>" alt="Código de Barras">
                            <div><?=$charger->payment_method->reference?></div>

                            <h3>$ <?=number_format($charger->amount)?>
                                <small> MXN</small>
                            </h3>
                            <h3>más comisión</h3>

                            <?=$charger->description?>
                                    
                                        <?=$charger->creation_date?>
                                    
                                        $ <?=number_format($charger->amount)?> MXN más comisión


      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Pagar con tarjeta de crédito o débito
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        
      <form
                action="<?=Url::base()?>/pagos/pagar-tarjeta-open-pay"
                method="POST" id="payment-form">
                <input type="hidden" name="token_id" id="token_id">
                <div class="container-form-pago-tarjeta">

                    <div class="row">
                        <div class="col-md-4">
                            <h5>
                                Tarjetas de crédito
                            </h5>
                            <div class="tarjetas-credito">

                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5>
                                Tarjetas de débito
                            </h5>
                            <div class="tarjetas-debito">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="nombre-titular" class="control-label">Nombre del titular</label> 
                            <input value="Humberto Antonio" id="nombre-titular"
                                    type="text" class="form-control"
                                    autocomplete="off" data-openpay-card="holder_name">
                                   
                        </div>
                        <div class="form-group col-md-6">
                            <input value="<?=$ordenCompra2->txt_order_number?>"
                                    type="hidden" name="orderId"> 
                            <label for="numero-tarjeta" class="control-label">Número de tarjeta</label>                
                            <input type="text" id="numero-tarjeta"
                                    class="form-control"
                                    autocomplete="off" data-openpay-card="card_number"
                                    maxlength="16" value="4111111111111111">
                             
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                Fecha de expiración
                            </label>
                            <div class="row">
                                <div class="form-group col-md-6">
                                     <input type="number" value="12" maxlength="2" min="0" max="12" type="text" placeholder="Mes"
                                     class="form-control"
                                        data-openpay-card="expiration_month">
                                </div>
                                <div class="form-group col-md-6">
                                    <input value="17" maxlength="2" type="number" min="17" max="99" placeholder="Año"
                                    class="form-control"
                                        data-openpay-card="expiration_year">
                                </div>
                            </div>
                        </div>

                         <div class="col-md-6">
                            <label for="codigo-seguridad">
                               Código de seguridad
                            </label>
                            <div class="row">
                                <div class="form-group col-md-6">
                                     <input value="" id="codigo-seguridad"
                                     class="form-control"
                                      type="text" placeholder="3 dígitos"
                                        autocomplete="off" data-openpay-card="cvv2">
                                </div>
                                <div class="col-md-6">
                                    <div class="help-codigo-seguridad"></div>
                                </div>
                            </div>
                        </div>    

                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <small>Transacciones realizadas vía:</small>
                            </div>
                            <div class="logo-open-pay">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shield">

                            </div>
                            
                            <small>
                                Tus pagos se realizan de forma segura con encriptación de 256 bits
                            </small>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <button id="pay-button" class="btn  btn-block btn-success btn-pagar-tarjeta">
                                Pagar
                            </button>
                        </div>
                    </div>    


                </div>
            </form>



      </div>
    </div>
  </div>
</div>
                                   

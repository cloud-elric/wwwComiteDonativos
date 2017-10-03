<?php
$this->title = "Seleccionar forma de pago";


$this->registerJsFile(
    'https://openpay.s3.amazonaws.com/openpay.v1.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    'https://openpay.s3.amazonaws.com/openpay-data.v1.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    '@web/webassets/plugins/print-area/print-area.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->registerJsFile(
    '@web/webassets/js/forma-pago.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<section class="donativos-wrapper">
    <div class="container container-column container-full">
      <div class="tipos-de-pago-content">
        <h3>Selecciona un tipo de pago</h3>
        <div class="tipos-de-pago">
          <div class="pagocard">
            <a data-tokenoc="<?=$tokenOc?>" data-token="tp_80244ff4f23c1f06e8262c2b0a7462a6571112ad791dc" class="btn-tipo-de-pago js-btn-pago"><img src="webassets/images/logo-paypal.png" alt=""></a><span class="caption">Tarjeta de Crédito o cuenta</span>
          </div>
          <div class="pagocard">
            <a data-tokenoc="<?=$tokenOc?>" data-token="tp_3922b05cccd499fb9d2c415038ab9c08571112b938d1d" class="btn-tipo-de-pago js-btn-pago"><img src="webassets/images/logo-openpay.png" alt=""></a><span class="caption">Pago en establecimiento</span>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- 


<div class="row">
    <div class="col-md-6 col-md-offset-3" >
        <div class="panel">
            <div class="panel-body">
                <h1>Seleccionar forma de pago</h1>
                <button  data-tokenoc="<?=$tokenOc?>" data-token="tp_80244ff4f23c1f06e8262c2b0a7462a6571112ad791dc" class="btn btn-primary btn-block js-btn-pago">PayPal</button>
                <button  data-tokenoc="<?=$tokenOc?>" data-token="tp_3922b05cccd499fb9d2c415038ab9c08571112b938d1d" class="btn btn-primary btn-block js-btn-pago">Open Pay</button>
            </div>
        </div>
    </div>
</div>
Modal 
<div class="modal fade" id="modal-checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-checkoutLabel">Revisar y pagar</h4>
      </div>
      <div class="modal-body">
        
        <div class="ajax-container">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="progressBar-hidden" style="display:none;">
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"
        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
        Cargando...
        </div>
    </div>
</div> -->

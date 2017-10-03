 
<?php
use yii\helpers\Url;

$this->registerJsFile(
    '@web/webassets/js/open-pay.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>


  <div class="panel">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Imprimir ticket
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body  tickert-print">
       
      <img  src="<?=$charger->payment_method->barcode_url?>" alt="Código de Barras">
                            <div><?=$charger->payment_method->reference?></div>

                            <h3>$ <?=number_format($charger->amount)?>
                                <small> MXN</small>
                            </h3>
                            <h3>más comisión</h3>

                            <?=$charger->description?>
                                    
                                        <?=$charger->creation_date?>
                                    
                                        $ <?=number_format($charger->amount)?> MXN más comisión

                                        <a class="btn btn-primary js-print-button">Imprimir ticket</a>


      </div>
    </div>
  </div>
</div>
                                   

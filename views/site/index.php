<?php
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;
/* @var $this yii\web\View */

$this->title = 'Elegir monto a donar';

$this->registerJsFile(
    '@web/webassets/js/index.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>

                <a class="btn btn-primary btn-block js-select-amount <?=$ordenCompra->num_total==100?'btn-success':''?>"  data-value="100">$ 100 MXN</a>

                <a class="btn btn-primary btn-block js-select-amount <?=$ordenCompra->num_total==200?'btn-success':''?>" data-value="200">$ 200 MXN</a>

                <a class="btn btn-primary btn-block js-select-amount <?=$ordenCompra->num_total==300?'btn-success':''?>" data-value="300">$ 300 MXN</a>

                <div class="form-group">
                    <label for="amount">Otra cantidad</label>
                    <input id="amount" type="text" class="form-control js-add" value="0" />
                </div>

                <?= $form->field($ordenCompra, 'num_total')->hiddenInput(['maxlength' => true])->label(false)?>

                <div class="form-group">
                    <?= Html::submitButton('Donar', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

<?php
use yii\widgets\ActiveForm;
use yii\bootstrap\Html;
/* @var $this yii\web\View */

$this->title = 'Elegir monto a donar';
?>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel">
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($ordenCompra, 'num_total')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Donar', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

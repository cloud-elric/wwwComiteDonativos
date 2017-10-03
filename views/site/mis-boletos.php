<div class="row">
<?php
foreach($boletos as $boleto){
?>

    <div class="col-md-3">
        <div class="panel">
            <div class="panel-body">
                <p>
                <?=$boleto->txt_codigo?>
                </p>
            </div>
        </div>
    </div>

<?php
}
?>
</div>
<section class="donativos-wrapper">
    <div class="container container-column container-full">
      <div class="boletos-content">
        <h3>Estos son los boletos con los que podrás participar en la rifa</h3>
        <?php
        foreach($boletos as $boleto){
        ?>
        <div class="boletos">
          <div class="boleto">
            <h2> <?=$boleto->txt_codigo?></h2>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
</section>





               
               


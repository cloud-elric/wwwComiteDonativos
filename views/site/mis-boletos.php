<section class="donativos-wrapper">
    <div class="container container-column container-full">
      <div class="boletos-content">
        <h3>Gracias por tu donación para ayudar a reconstruir México</h3>
        <h3>Martes 17 de octubre a las 8pm en transmisión en vivo anunciaremos a los ganadores de la rifa</h3>
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





               
               


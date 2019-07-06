<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>



<div class="nonloop-block-16 owl-carousel">
              
    <?php 
		$entradas = conseguirEntradas($db, true);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>

              <div class="border rounded p-4 bg-white">
                <h2 class="h5"><?=$entrada['titulo']?></h2>
                <p><span class="border border-warning rounded p-1 px-2 text-warning"><?=$entrada['tipo_horario']?></span></p>
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span><?=$entrada['categoria']?></span>
                  <span class="d-block"><span class="icon-room"></span>Lima</span>
                  <span class="d-block"><span class="icon-money mr-1"></span><?=$entrada['sueldo']?></span>
                </p>
                <p class="mb-0"><?=substr($entrada['descripcion'], 0, 180)."..."?></p>
              </div>

         

         <?php
			endwhile;
		endif;
	?>

            </div>
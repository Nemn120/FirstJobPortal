   <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Ellos nos respaldan</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">
          

           	
	<?php 
		$empresas = conseguirEmpresas($db, true);
		if(!empty($empresas)):
			while($entrada = mysqli_fetch_assoc($empresas)):
	?>
           
           
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="ver-datos.php?id=<?=$entrada['id']?>" class="image-play">
                  <img src="images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0 h5"><a href="ver-datos.php?id=<?=$entrada['id']?>"></a><?=$entrada['nombre']?></h2>
              <span class="mb-3 d-block post-date"><a href="ver-datos.php?id=<?=$entrada['id']?>"><br><?=$entrada['area']?></a></span>
          
                <p><?=$entrada['ciudad']?></p>
              <p>	<?=substr($entrada['descripcion'], 0, 180)."..."?></p>
            </div>
          <?php
			endwhile;
		endif;
	?>
          
         
          
          
        
        </div>
    
            <div class="col-md-12 text-center mt-5">
              <a href="verempresass.php" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Ver mas Empresas</a>
            </div>
        <div class="row">
          
        </div>
      </div>
    </div>
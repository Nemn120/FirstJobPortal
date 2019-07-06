
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

   
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Categorias Populares</h2>
          </div>
        </div>
        <div class="row">
         
         <?php 
				$categorias = conseguirCategorias($db);
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
					?>	      
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="vercategoria.php?id=<?=$categoria['id']?>" class="h-100 feature-item">
            <span class="d-block icon flaticon-computer-graphic mb-3 text-primary"></span>
              <h2><?=$categoria['nombre']?></h2>
              <span class="counting">5012</span>
            </a>
          </div>
              <?php
				endwhile;
						endif;
					?>
        </div>

      </div>
    </div>
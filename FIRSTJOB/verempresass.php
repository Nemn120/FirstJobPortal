<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!-- MAQUETACION-->
<?php require_once 'maqueta/cabecera.php'; ?>

   






    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Empresas FirstJob</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Job Item</span></p>
      </div>
    </div>

   <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Todos las Empresas</h2>
            <div class="rounded border jobs-wrap">
              
	<?php 
		$empresas = conseguirEmpresas($db, true);
		if(!empty($empresas)):
			while($entrada = mysqli_fetch_assoc($empresas)):
	           if($entrada['id'] != 2):
              
	?>
  
              <a href="verempresa.php?id=<?=$entrada['id']?>" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3><?=$entrada['nombre']?></h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span><?=$entrada['apellidos']?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span><?=$entrada['ciudad']?></div>
                   
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
               <div class="p-3">
                    <span class="text-info p-0 rounded border border-info"><?=$entrada['area']?></span>
                  </div>
                </div>  
              </a>
              

         <?php
        endif;
			endwhile;
		endif;
	?>
            </div>
            
            

            <div class="col-md-12 text-center mt-5">
              <a href="veravisos.php" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> Ver mas avisos</a>
            </div>
          </div>
          
          
          
          <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex mb-0">
              <h2 class="mb-5 h3 mb-0">Mejores avisos</h2>
              <div class="ml-auto mt-1"><a href="#" class="owl-custom-prev">Prev</a> / <a href="#" class="owl-custom-next">Next</a></div>
            </div>

            <?php require_once 'oferta.php'; ?>

          </div>
          
          
          
        </div>
      </div>
    </div>
      
      
      

      <?php require_once 'maqueta/piepagina.php'; ?>

  </div>


<?php require_once 'maqueta/scrippie.php'; ?>
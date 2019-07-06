<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>


<?php
	$categoria_actual = conseguirHorario($db, $_GET['id']);

	if(!isset($categoria_actual['id'])){
		header("Location: index.php");
	}
?>

<!-- MAQUETACION-->
<?php require_once 'maqueta/cabecera.php'; ?>

    <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Avisos de horario <?=listaHorario($categoria_actual['id'])?> </h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Job Item</span></p>
      </div>
    </div>

   <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Todos los Avisos</h2>
            <div class="rounded border jobs-wrap">
   
	<?php 
		$entradas = conseguirEntradasss($db, null, null, $_GET['id'] );
       
		if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
              
              

              <a href="veraviso.php?id=<?=$entrada['id']?>" class="job-item d-block d-md-flex align-items-center  border-bottom fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="images/company_logo_blank.png" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3><?=$entrada['titulo']?></h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span><?=$entrada['categoria']?></div>
                      <div class="mr-3"><span class="icon-room mr-1"></span>Lima</div>
                      <div><span class="icon-money mr-1"></span><?=$entrada['sueldo']?></div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info"><?=$entrada['tipo_horario']?></span>
                  </div>
                </div>  
              </a>

         <?php
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
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$empresa_actual = conseguirEmpresa($db, $_GET['id']);

	if(!isset($empresa_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'maqueta/cabecera.php'; ?>

  <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
      <div class="container text-center">
        <a href="#">
		<h2 class="mb-0"><?=$empresa_actual['nombre']?></h2>
	    </a>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Job Item</span></p>
      </div>
    </div>





    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <div class="p-5 bg-white">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4"><?=$empresa_actual['nombre']?></h2>
                 <div class="badge-wrap">
                  <span class="border border-warning text-warning py-2 px-4 rounded"><?=$empresa_actual['ciudad']?></span>
                 </div>
               </div>
                <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">   <?=$empresa_actual['area'] ?> </a></div>
                
               </div>
           
              </div>


            
              <div class="img-border mb-5">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                </a>
              </div>
              
                 
    <h2><?=$empresa_actual['apellidos']?></h2>
      
       	<p><span><b>Área:</b></span>
		<?=$empresa_actual['area']?>
	</p>
	<p><span><b>Ciudad:</b></span>
		<?=$empresa_actual['ciudad']?>
	</p>
	<p>
    <span><b>Correo:</b>
	<?=$empresa_actual['email']?> </span>
	</p>
	<p><span><b>Página Web:</b></span>
    <a href="<?=$empresa_actual['link']?>" target="_blank" title=""><?=$empresa_actual['link']?></a>
	</p>
	</p>
	<p><span><b>Fecha de Inscripcion:</b></span>
		<?=$empresa_actual['fecha']?>
	</p>
	

              
             <p>
		<?=$empresa_actual['descripcion']?>
	</p>

        
            </div>
          </div>

          <div class="col-lg-4">
            
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Postula a este aviso</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>





      <?php require_once 'maqueta/piepagina.php'; ?>

  </div>


<?php require_once 'maqueta/scrippie.php'; ?>
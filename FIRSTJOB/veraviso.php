<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>


<?php
	$entrada_actual = conseguirEntrada($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
   
<?php require_once 'maqueta/cabecera.php'; ?>

  <div style="height: 113px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
      <div class="container text-center">
        <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
		<h2 class="mb-0"><?=$entrada_actual['categoria']?></h2>
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
                 <h2 class="mr-3 text-black h4"><?=$entrada_actual['titulo']?></h2>
                 <div class="badge-wrap">
                  <span class="border border-warning text-warning py-2 px-4 rounded"><?=$entrada_actual['tipo_horario']?></span>
                 </div>
               </div>
                <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="verempresa.php?id=<?=$entrada_actual['usuario_id']?>"> <?=$entrada_actual['usuario'] ?> </a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span> <?=$entrada_actual['fecha']?></span></div>
               </div>
               
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">San Miguel  </a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>Lima, Perú</span></div>
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
            
              
             <p>
		<?=$entrada_actual['descripcion']?>
	</p>
 <div><span class="icon-money mr-1"></span>Salario: <?=$entrada_actual['sueldo']?> mensuales.</div>    
                                 
<?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
		<br/>	
		<a href="editar-aviso.php?id=<?=$entrada_actual['id']?>"  class="btn btn-primary  py-2 px-4">Editar Aviso</a>
		<a href="borrar-entrada.php?id=<?=$entrada_actual['id']?>" class="btn btn-primary  py-2 px-4">Eliminar Aviso</a>
	<?php endif; ?>
 
            </div>
          </div>

          <div class="col-lg-4">
            
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Informacion adicional:</h3>
              <p>En FirstJob nos preocupamos por tu bienestar por ello todos nuestros avisos son evaluados bajo estandares de calidad.</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Postula a este aviso</a></p>
            </div>
  
            
            
          </div>
          

          
          
          
        </div>
      </div>
    </div>






      <?php require_once 'maqueta/piepagina.php'; ?>

  </div>


<?php require_once 'maqueta/scrippie.php'; ?>
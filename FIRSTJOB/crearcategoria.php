
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
    <?php require_once 'maqueta/cabecera.php'; ?>
    
   
    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Nueva categoría</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Aviso</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
        
        
    
       <div class="col-md-12 col-lg-8 mb-5">





<!-- BARRA LATERAL -->
    <aside id="sidebar">
     <h3>Crear categoria</h3>
	<div id="registro" class="bloque">
		
		<form action="guardar-categoria.php" method="POST" class="p-5 bg-white"> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="categoria">Categoría:</label>
		        <input type="text" name="nombre" />
    
			  </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12">
        <input type="submit" name="submit" value="Crear" class="btn btn-primary pill px-4 py-2" />
           </div>
              </div>
         </div>
		</form>	
         
	
	</div>

</aside>
          
                  </div>
		    </div>
      </div>
    </div>		
    <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Localización</h2>
              <p class="mb-0">San Marcos<br> Facultad de Ingeniería de Sistemas e Informática</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Tiempo de Servicios </h2>
              <p class="mb-0">Sabado de 1:30PM - 7:30PM <br>
           
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span>Envia tu mensaje a</h2>
            <p class="mb-0">Email: contacto@FirstJob.com<br>
            Phone: +51 909090909 </p>
          </div>
        </div>
      </div>
    </div>

	
       <?php require_once 'maqueta/piepagina.php'; ?>

  </div>
  
<?php require_once 'maqueta/scrippie.php'; ?>

       
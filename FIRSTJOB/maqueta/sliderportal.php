 <?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
     <div class="site-blocks-cover overlay" style="background-image: url('images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Portal de empleo FISI</h1>
            <form action="buscardata.php" method="POST">     
              <div class="row mb-3">
         
                <div class="col-md-9">
                    
		
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input type="text" name="busqueda" class="mr-3 form-control border-0 px-4" placeholder="ingrese palabra clave ">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <div class="input-wrap">
                       <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="ciudad, provincia o region" onFocus="geolocate()">
                        <span class="icon icon-room"></span>
                    
                      </div>
                    </div>
                  </div>
                  
                  
                
                </div>
                <div class="col-md-3">
                  <input type="submit" class="btn btn-search btn-primary btn-block" value="Buscar">
                                    
                  
                </div>
              </div>
              
              
              <div class="row">
                     <div class="col-md-12">
                   <p class="small">buscar por:
               	<?php 
            
				$horarios = conseguirHorarios($db); 
				if(!empty($horarios)):
				while($horario = mysqli_fetch_assoc($horarios)): 
			         ?>
               
                 
                 
	
		           <a href="busquedahorario.php?id=<?=$horario['id']?>" class="category" ><?=$horario['horario']?></a>
			    <?php
				endwhile;
				endif;
			     ?>
	               
		
                 
                
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
    
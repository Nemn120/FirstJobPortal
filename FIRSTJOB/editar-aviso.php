
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
    <?php require_once 'maqueta/cabecera.php'; ?>
    
   <?php
	$entrada_actual = conseguirEntrada($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
   
    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Editar Aviso</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Aviso</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
        
        
    
       <div class="col-md-12 col-lg-8 mb-5">



<!-- BARRA LATERAL -->
    <aside id="sidebar">

	<div id="principal" class="bloque">
		<h3>Modificar Aviso  <?=$entrada_actual['titulo']?></h3>
		
		
		
		<form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST" class="p-5 bg-white"> 
		
		  <div class="row form-group">
                <div class="col-md-12">
		
	<label  class="font-weight-bold" for="titulo">Título</label>
		<input type="text" name="titulo" class="form-control"  value="<?=$entrada_actual['titulo']?>"/>
	<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
              
             </div>
              </div>   
              
              
		  
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="categoria">Categoría:</label>
			    <select name="categoria">
			    <?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)): 
			     ?>
				<option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
					<?=$categoria['nombre']?>
				</option>
		    	<?php
				endwhile;
				endif;
                    ?>
		</select>
          
			  </div>
              </div>

   
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Horario:</label>
                  
			<select name="horario">
			<?php 
				$horarios = conseguirHorarios($db); 
				if(!empty($horarios)):
				while($horario = mysqli_fetch_assoc($horarios)): 
			?>
			<option value="<?=$horario['id']?>" <?=($horario['id'] == $entrada_actual['tipo_horario_id']) ? 'selected="selected"' : '' ?>>
					<?=$horario['horario']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
			  </div>
              </div>
              
              


		
              <div class="row form-group">
                <div class="col-md-12">
                 <label class="font-weight-bold" for="sueldo">Salario:</label>
             	<select name="sueldo">
			<?php 
				$sueldos = conseguirSueldos($db); 
				if(!empty($sueldos)):
				while($sueldo = mysqli_fetch_assoc($sueldos)): 
			?>
			<option value="<?=$sueldo['id']?>" <?=($sueldo['id'] == $entrada_actual['sueldo_id']) ? 'selected="selected"' : '' ?>>
					<?=$sueldo['salario']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
		
           
            </div>
              </div>
       
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="descripcion">Descripción</label>
		
		    <textarea name="descripcion"cols="30" rows="10" class="form-control" ><?=$entrada_actual['descripcion']?></textarea>
          
           </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
        <input type="submit" name="submit" value="Modificar" class="btn btn-primary pill px-4 py-2" />
           </div>
              </div>
         </div>
		</form>	
		<?php borrarErrores(); ?>
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
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Times</h2>
              <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
              Fridays at Sunset - 7:30PM <br>
              Saturdays at 8:00AM - Sunset</p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: info@yoursite.com <br>
            Phone: (123) 3240-345-9348 </p>
          </div>
        </div>
      </div>
    </div>
    

	
       <?php require_once 'maqueta/piepagina.php'; ?>

  </div>
  
<?php require_once 'maqueta/scrippie.php'; ?>

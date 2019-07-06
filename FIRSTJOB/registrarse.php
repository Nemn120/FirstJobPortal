    
<?php require_once 'maqueta/cabecera.php'; ?>
    <?php require_once 'includes/cabecera.php'; ?>
 <?php require_once 'includes/helpers.php'; ?>


    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Mi Empresa</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Contact</span></p>
      </div>
    </div>
       
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
        
        
    
       <div class="col-md-12 col-lg-8 mb-5">
       
       
       
       
<!-- BARRA LATERAL -->
    <aside id="sidebar">
    
    
    
    
    
    

	<?php if(!isset($_SESSION['usuario'])): ?>
	<div id="login" class="bloque">
		<h3>Identifícate</h3>
		
		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
		<?php endif; ?>
		
		<form action="login.php" method="POST" class="p-5 bg-white"> 
		  <div class="row form-group">
                <div class="col-md-12">
			<label for="email" >Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email Address" />
              </div>
            </div>
              <div class="row form-group">
                <div class="col-md-12">
			<label for="password">Contraseña</label>
			<input type="password" name="password" class="form-control" placeholder="Password" />
                  </div>
            </div>
                 <div class="row form-group">
               <div class="col-md-12">
			<input type="submit" value="Entrar" class="btn btn-primary pill px-4 py-2" />
            </div>
            </div>
		</form>
	</div>
	
	

	<div id="register" class="bloque">
		<h3>Registrate en FirstJob</h3>
		
		<!-- Mostrar errores -->
		<?php if(isset($_SESSION['completado'])): ?>
			<div class="alerta alerta-exito">
				<?=$_SESSION['completado']?>
			</div>
		<?php elseif(isset($_SESSION['errores']['general'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['errores']['general']?>
			</div>
		<?php endif; ?>
		
		
		
		
		<form action="registro.php" method="POST" class="p-5 bg-white"> 
		
		
		  <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nombre comercial</label>
			<input type="text" name="nombre"  class="form-control" placeholder="Full Name"/>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
               </div>
              </div>
              
              
              
              
		  
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="razonsocial">Razon Social</label>
			<input type="text" name="apellidos"  class="form-control" placeholder="Full Name"/>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
			
			  </div>
              </div>

   
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
			
			<input type="email" name="email" class="form-control" placeholder="Email Address" />
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
			  </div>
              </div>
              
              


		
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Contraseña</label>
			
			<input type="password" name="password" class="form-control" placeholder="Password"/>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            </div>
              </div>

          
          
          
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Página Web</label>
			
		<input type="text" name="link" class="form-control" placeholder="Web page" />
		   </div>
              </div>

          
		
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="area">Area</label>
		<input type="text" name="area" class="form-control" placeholder="Area" />
		
		   </div>
              </div>

          
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="ciudad">Ciudad</label>
		
		
		<input type="text" name="ciudad"  class="form-control" placeholder="City"/>
		   </div>
              </div>

          
	
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="ciudad">Descripción</label>
		
		    <textarea name="decripcion"cols="30" rows="8" class="form-control" placeholder="Say hello to us"></textarea>
           </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
        <input type="submit" name="submit" value="Registrar" class="btn btn-primary pill px-4 py-2" />
           </div>
              </div>
         </div>
		</form>	
		<?php borrarErrores(); ?>
	</div>
	<?php endif; ?>
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

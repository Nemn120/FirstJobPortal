
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
    <?php require_once 'maqueta/cabecera.php'; ?>
    

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Contacto</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Contact</span></p>
      </div>
    </div>

    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nombres</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              
              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Teléfono</label>
                  <input type="text" id="phone" class="form-control" placeholder="Phone #">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Mensaje</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar Mensaje" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
            </form>
            
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Informacion de Contacto</h3>
              <p class="mb-0 font-weight-bold">Dirección</p>
              <p class="mb-4">Facultad de Ingeniería de Sistemas e Informática, Cercado de Lima, Lima, Perú</p>

              <p class="mb-0 font-weight-bold">Teléfono</p>
              <p class="mb-4"><a href="#">+51 909090909</a></p>

              <p class="mb-0 font-weight-bold">Email:</p>
              <p class="mb-0"><a href="#">contacto@FirstJob.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Mas Información</h3>
              <p>FirstJob es una portal de empleo enfocado en las Tecnologias de la información con la finalidad de ser un nexo entre la empresa y el postulante.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white pill">FirstJob</a></p>
            </div>
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

    


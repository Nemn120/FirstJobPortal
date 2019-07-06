<!DOCTYPE html>
<html lang="en">
  <head>
    <title>First Job &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css"> 
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php">First <strong class="font-weight-bold">Job</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="categories.php">Candidato</a></li>
                      <li class="has-children">
                        <a href="index.php">Empresa</a>
		        
			<!--botones-->  
                        <ul class="dropdown arrow-top">
                        <?php if(isset($_SESSION['usuario'])): ?>
                       <li><a href="crear-aviso.php">Publicar Empleo</a></li>
                     <li><a href="misdatos.php">Actualizar Datos</a></li>
                    <li><a href="cerrar.php">Cerrar sesión</a></li>
                          
                          <?php endif; ?>

                        </ul>
                        </li>
                          
                        
                     
                      <li><a href="contact.php">Contacto</a></li>
                       <li><a href="about.php">Sobre Nosotros</a></li>
                        <?php if(isset($_SESSION['usuario'])): ?>
                       <li><a href="verempresa.php?id=<?= $_SESSION['usuario']['id'] ?>"><span class="bg-primary text-white py-3 px-4 rounded"><span class=" mr-2"></span><?=$_SESSION['usuario']['nombre'];?></span></a></li>
                       <?php endif; ?>
                      
                      <?php if((isset($_SESSION['usuario']['id']))): 
                            if($_SESSION['usuario']['id'] ==2): ?>
                      <li><a href="crearcategoria.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Crear Categoria</span></a></li>
                      <?php endif; ?>
                      <?php endif; ?>
                      
                      <?php if(!isset($_SESSION['usuario'])): ?>
                       <li><a href="registrarse.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-2"></span>Nuevo empleo</span></a></li>
                       <?php endif; ?>
                       
                        <?php if(isset($_SESSION['usuario'])): 
                         if($_SESSION['usuario']['id'] !=2): ?>
                       <li><a href="crear-aviso.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-2"></span>Nuevo empleo</span></a></li>
                       <?php endif; ?>
                        <?php endif; ?>
                       
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div style="height: 113px;"></div>
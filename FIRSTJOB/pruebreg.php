

<?php require_once 'helpers.php'; ?>
<!-- BARRA LATERAL -->
<aside id="sidebar">

	<?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario-logueado" class="bloque">
			<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'];?></h3>
			<!--botones-->
			<a href="crear-entradas.php" class="boton boton-verde">Publicar Ofertas</a>
			<a href="crear-categoria.php" class="boton">Crear categoria</a>
			<a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>
			<a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
		</div>
	<?php endif; ?>
	
	<?php if(!isset($_SESSION['usuario'])): ?>
	<div id="login" class="bloque">
		<h3>Identificate</h3>
		
		<?php if(isset($_SESSION['error_login'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['error_login'];?>
			</div>
		<?php endif; ?>
		
		<form action="login.php" method="POST"> 
			<label for="email">Email</label>
			<input type="email" name="email" />

			<label for="password">Contraseña</label>
			<input type="password" name="password" />

			<input type="submit" value="Entrar" />
		</form>
	</div>

	<div id="register" class="bloque">
		<h3>Resgistrate en FirstJob</h3>
		
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
		
		<form action="registro.php" method="POST"> 
			<label for="nombre">Nombre Empresa</label>
			<input type="text" name="nombre" />
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

			<label for="apellidos">Razon Social</label>
			<input type="text" name="apellidos" />
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

			<label for="email">Email corporativo</label>
			<input type="email" name="email" />
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

			<label for="password">Contraseña</label>
			<input type="password" name="password" />
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
           <label for="link">Página Web</label>
		<input type="text" name="link" />
		
		<label for="area">Área</label>
		<input type="text" name="area" />
		
		<label for="ciudad">Ciudad</label>
		<input type="text" name="ciudad"/>
		
		<label for="decripcion">Descripción:</label>
		<textarea name="decripcion" cols="25" rows="12"></textarea>
       
       
       
        <input type="submit" name="submit" value="Registrar" />
		</form>
		<?php borrarErrores(); ?>
	</div>
	<?php endif; ?>
</aside>
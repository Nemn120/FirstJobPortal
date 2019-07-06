<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php require_once 'includes/lateralizquierdo.php'; ?>
<?php
	$entrada_actual = conseguirEntrada($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar Aviso</h1>
	<p>
		Edita tu Aviso <?=$entrada_actual['titulo']?>
	</p>
	<br/>
	<form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion" cols="80" rows="30"><?=$entrada_actual['descripcion']?></textarea>
		
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría</label>
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
		<!--SUELDO-->
		<label for="sueldo">Sueldo</label>
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
		<!--TIPO HORARIO-->
		<label for="horario">Horario</label>
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
		
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<?php require_once 'includes/pie.php'; ?>
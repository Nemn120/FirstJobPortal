<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateralizquierdo.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Empresas Inscritas</h1>
	
	<?php 
		$empresas = conseguirEmpresas($db, true);
		if(!empty($empresas)):
			while($entrada = mysqli_fetch_assoc($empresas)):
	?>
				<article class="entrada">
					<a href="ver-datos.php?id=<?=$entrada['id']?>">
						<h2><?=$entrada['nombre']?></h2>
						<span class="fecha"><?=$entrada['apellidos'].'| '.$entrada['area'].'  | '.$entrada['ciudad']?></span>
						<p>
							<?=substr($entrada['descripcion'], 0, 180)."..."?>
						</p>
					</a>
				</article>
	<?php
			endwhile;
		endif;
	?>

	<div id="ver-todas">
		<a href="entradas.php">Ver todas las Ofertas</a>
	</div>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>
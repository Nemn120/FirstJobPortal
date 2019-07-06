<?php
	if(!isset($_POST['busquedaSalario'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
    <?php require_once 'includes/lateralizquierdo.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">

	<h1>Busqueda Salario: <?=listaSalario($_POST['busquedaSalario'])?></h1>
	
	<?php 
		$entradas = conseguirEntradass($db, null, null, $_POST['busquedaSalario']);
        
       
		if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
				<article class="entrada">
					<a href="entrada.php?id=<?=$entrada['id']?>">
				<h2><?=$entrada['titulo']?></h2>
				<span class="fecha"><?=$entrada['categoria'].'| '.$entrada['tipo_horario'].' | '.$entrada['sueldo'].' | '.$entrada['fecha']?></span>
						<p>
				<?=substr($entrada['descripcion'], 0, 180)."..."?>
						</p>
					</a>
				</article>
	<?php
			endwhile;
		else:
	?>
		<div class="alerta">No hay Avisos en esta categoría</div>
	<?php endif; ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>
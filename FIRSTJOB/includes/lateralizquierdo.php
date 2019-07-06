<?php require_once 'helpers.php'; ?>
<?php require_once 'helpers.php'; ?>
<!-- BARRA LATERAL -->
<aside id="blockIzq">
	
	<div id="buscadorIzquierdo" class="bloqueIzq">
		<h3>Buscar</h3>

		<form action="buscar.php" method="POST"> 
			<input type="text" name="busqueda" />
			<input type="submit" value="Buscar" />
		</form>
	</div>
	
	
	
	
	<div id="buscadorIzquierdo" class="bloqueIzq">
		<h3>Buscar por Saláio</h3>

		<form action="buscarSalario.php" method="POST"> 
		<select name="busquedaSalario">
			<?php 
				$sueldos = conseguirSueldos($db); 
				if(!empty($sueldos)):
				while($sueldo = mysqli_fetch_assoc($sueldos)): 
			?>
				<option value="<?=$sueldo['id']?>">
					<?=$sueldo['salario']?>
				</option>
				
			<?php
    
				endwhile;
				endif;
			?>
		</select>
		<input type="submit" value="Buscar" />
			
		</form>
	</div>
	
	<div id="buscadorIzquierdo" class="bloqueIzq">
		<h3>Buscar por Horario</h3>

		<form action="buscarHorario.php" method="POST"> 
		<select name="buscarHorario">
			<?php 
				$horarios = conseguirHorarios($db); 
				if(!empty($horarios)):
				while($horario = mysqli_fetch_assoc($horarios)): 
			?>
				<option value="<?=$horario['id']?>">
					<?=$horario['horario']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
			<input type="submit" value="Buscar" />
		</form>
	</div>
		<div id="buscadorIzquierdo" class="bloqueIzq">
			<!--botones-->
			<a href="verempresas.php" class="boton boton-naranja">Ver Empresas</a>
			
			
			
		</div>

</aside>
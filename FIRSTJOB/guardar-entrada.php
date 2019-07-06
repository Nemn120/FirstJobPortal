<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
	$descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    
    
    $sueldo = isset($_POST['sueldo']) ? (int)$_POST['sueldo'] : false;
    $horario = isset($_POST['horario']) ? (int)$_POST['horario'] : false;
    
	$usuario = $_SESSION['usuario']['id'];
	
	// Validación
	$errores = array();
	
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no es válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no es válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no es válida';
	}
	
	
	if(count($errores) == 0){
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
    
            
			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion',
            sueldo_id=$sueldo,
            tipo_horario_id=$horario,
            categoria_id=$categoria ".
					" WHERE id = $entrada_id";

		}else{
			$sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion',CURDATE(), $sueldo, $horario);";
		}
		$guardar = mysqli_query($db, $sql);
        
            echo "No guardo ni mrd";
            mysqli_error($db);
       
		header("Location: index.php");
	}else{

		$_SESSION["errores_entrada"] = $errores;
		
		if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$_GET['editar']);
		}else{
			header("Location: crear-entradas.php");
		}
	}
	
}


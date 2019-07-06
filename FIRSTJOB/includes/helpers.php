<?php

function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = '<p>'.$errores[$campo].'</p>';
	}
	
	return $alerta;
}

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['completado'])){
		$_SESSION['completado'] = null;
		$borrado = true;
	}
	
	return $borrado;
}

function conseguirCategorias($conexion){
	$sql = "SELECT * FROM categorias ORDER BY id ASC;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = $categorias;
	}
    
	
	return $resultado;
}
function conseguirHorarios($conexion){
	$sql = "SELECT * FROM tipo_horario ORDER BY id ASC;";
	$horarios = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($horarios && mysqli_num_rows($horarios) >= 1){
		$resultado = $horarios;
	}
    
	
	return $resultado;
}
function conseguirSueldos($conexion){
	$sql = "SELECT * FROM sueldo ORDER BY id ASC;";
	$sueldos = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($sueldos && mysqli_num_rows($sueldos) >= 1){
		$resultado = $sueldos;
	}
    
	
	return $resultado;
}

function conseguirCategoria($conexion, $id){
	$sql = "SELECT * FROM categorias WHERE id = $id;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = mysqli_fetch_assoc($categorias);
	}
	
	return $resultado;
}

function conseguirHorario($conexion, $id){
	$sql = "SELECT * FROM tipo_horario WHERE id = $id;";
	$categorias = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($categorias && mysqli_num_rows($categorias) >= 1){
		$resultado = mysqli_fetch_assoc($categorias);
	}
	
	return $resultado;
}

function conseguirEntrada($conexion, $id){
	$sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS usuario , s.salario AS 'sueldo', t.horario AS 'tipo_horario' "
		  . " FROM entradas e ".
		   "INNER JOIN categorias c ON e.categoria_id = c.id ".
         "INNER JOIN sueldo s ON e.sueldo_id = s.id ".
        "INNER JOIN tipo_horario t ON e.tipo_horario_id = t.id ".
		   "INNER JOIN usuarios u ON e.usuario_id = u.id ".
		   "WHERE e.id = $id";
	$entrada = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}
function conseguirEmpresa($conexion, $id){
	$sql = "SELECT e.*  "
		  . " FROM usuarios e WHERE e.id = $id";
	$empresa = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($empresa && mysqli_num_rows($empresa) >= 1){
		$resultado = mysqli_fetch_assoc($empresa);
	}
	
	return $resultado;
}
function conseguirEmpresas($conexion, $limit = null, $area = null, $ciudad = null){
		$sql="SELECT e.* FROM usuarios e ";

		 
	if(!empty($area)){
		$sql .= "WHERE e.area = $area ";
	}
	
	if(!empty($ciudad)){
		$sql .= "WHERE e.ciudad = $ciudad ";
	}
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		//$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	//$resultado
	return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null){
		$sql="SELECT e.*, c.nombre AS 'categoria',
    s.salario AS 'sueldo', 
    t.horario AS 'tipo_horario'". "FROM entradas e ".
     "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "INNER JOIN sueldo s ON e.sueldo_id = s.id ".
        "INNER JOIN tipo_horario t ON e.tipo_horario_id = t.id ";
		 
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	
	if(!empty($busqueda)){
		$sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
	}
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	//$resultado
	return $resultado;
}
function conseguirEntradass($conexion, $limit = null, $categoria = null, $salarioB){
    
    
	$sql="SELECT e.*, c.nombre AS 'categoria',
    s.salario AS 'sueldo', 
    t.horario AS 'tipo_horario'". "FROM entradas e ".
    "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "INNER JOIN sueldo s ON e.sueldo_id = s.id ".
        "INNER JOIN tipo_horario t ON e.tipo_horario_id = t.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	if(!empty($salarioB)){
        
		$sql .= "WHERE e.sueldo_id LIKE '%$salarioB%'";
	}
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	// $entradas
	return $entradas;
}
function conseguirEntradasss($conexion, $limit = null, $categoria = null, $salarioB){
    
    
	$sql="SELECT e.*, c.nombre AS 'categoria',
    s.salario AS 'sueldo', 
    t.horario AS 'tipo_horario'". "FROM entradas e ".
    "INNER JOIN categorias c ON e.categoria_id = c.id ".
        "INNER JOIN sueldo s ON e.sueldo_id = s.id ".
        "INNER JOIN tipo_horario t ON e.tipo_horario_id = t.id ";
	
	if(!empty($categoria)){
		$sql .= "WHERE e.categoria_id = $categoria ";
	}
	if(!empty($salarioB)){
        
		$sql .= "WHERE e.tipo_horario_id LIKE '%$salarioB%'";
	}
	
	$sql .= "ORDER BY e.id DESC ";
	
	if($limit){
		// $sql = $sql." LIMIT 4";
		$sql .= "LIMIT 4";
	}
	
	$entradas = mysqli_query($conexion, $sql);
	
	$resultado = array();
	if($entradas && mysqli_num_rows($entradas) >= 1){
		$resultado = $entradas;
	}
	// $entradas
	return $entradas;
}

function listaSalario($busqueda= null){
    switch($busqueda){
        case 1:return 'Menor o igual a 100'; break;
        case 2:return '1000 a 1300'; break;
        case 3:return '1300 a 1500'; break;
        case 4:return '1500 a 1800'; break;
        case 5:return '1800 a 2200'; break;
        case 6:return '2200 a 2700'; break;
        case 7:return '2700 a 3500'; break;
        case 8:return '3500 a 4200'; break;
        case 9:return '4200 a mas'; break;            
    }
}
function listaHorario($busqueda= null){
    switch($busqueda){
        case 1:return 'Part time'; break;
        case 2:return 'FullTime'; break;
        case 3:return 'Freelance'; break;
        case 4:return 'Pasantia'; break;
               
    }
}
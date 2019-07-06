<?php
// Conexión
$servidor = 'sql111.epizy.com';
$usuario = 'epiz_24074968';
$password = 'XNabQSjU';
$basededatos = 'epiz_24074968_blog';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}
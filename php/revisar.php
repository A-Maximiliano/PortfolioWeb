<?php 
	session_start();
	include_once 'conexion.php';
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['clave'];
	$sentencia = $bd->prepare('select * from t_usuario where 
								Usuario = ? and Clave = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: login.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['nombre'] = $datos->nombre_usu;
		header('Location: homepage.php');
	}
?>
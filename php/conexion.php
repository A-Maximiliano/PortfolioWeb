<?php  
	$servidor = "mysql:dbname=crudsem5; host=127.0.0.1; port=3307"; // localhost     127.0.0.1 
	$usuario = "root";
	$password = "";

	try {
		$bd = new PDO($servidor,$usuario, $password,			
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

?>


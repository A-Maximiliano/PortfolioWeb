<?php

$servidor = "mysql:dbname=crudsem5; host=127.0.0.1; port=3307"; // localhost     127.0.0.1
$usuario = "root";
$password = "";

try {
  $conn = new PDO($servidor,$usuario, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Conexion perfecta";
} catch(PDOException $e) {
  echo "Fallo en la conexion a la BD: " . $e->getMessage();
}

?>
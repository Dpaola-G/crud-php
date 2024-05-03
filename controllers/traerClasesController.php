<?php
include('ClaseDao.php');
$productoDao = new ProductoDAO();
$productos = $productoDao->TraerClases($conexion); // Pasamos la conexión como parámetro

print_r(json_encode($productos));
?>

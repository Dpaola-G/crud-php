<?php
include ('../models/claseDAO.php');

$clase=new ClaseDAO();
$msg=$clase->EliminarClase($_GET['id']);


?>
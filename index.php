<?php 
header("Content-Type: application/json");
$metodo = $_SERVER['REQUEST_METHOD'];
$uri = explode("/", trim($_SERVER['REQUEST_URI'], "/"));
 

?>
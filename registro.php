<?php
require "conexion.php"
$mysql=conectabd();
$dni=$_POST ["dni"];
$password=$_POST ["password"];
$nombre=$_POST ["nombre"];
$apellido=$_POST ["apellido"];
$sql="insert into usuario_personas(dni,password,nombre,apellido) values($dni,$password,$nombre,$apellido)";
$resultado=$mysql->query($sql);
?>
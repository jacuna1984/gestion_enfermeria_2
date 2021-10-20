<?php
$servidor="localhost";
$usuario="root";
$pass="";
$enfermeria="enfermeria";
$conecta=mysqli_connect($servidor, $usuario, $pass, $enfermeria);
if(!$conecta){
    die("error de conexion");

}
else{
    echo"conexion exitosa";
}
?>
<?php
ob_start();
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'misol';

$conexion = new mysqli($hostname,$username,$password,$database);
if(!$conexion){
    echo'Error al conectarse a la red';
}else{
	echo'Conexion exitosa';
}
ob_end_flush();
 ?>  
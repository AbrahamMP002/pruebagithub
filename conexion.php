<?php 

$conexion = new mysqli("localhost","root","12345678","encuesta");

if ($conexion) {
	;
}
else{
	echo "Error de Conexion";
}

 ?>
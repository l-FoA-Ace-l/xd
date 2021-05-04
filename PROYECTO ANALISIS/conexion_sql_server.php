<?php
$serverName = 'localhost';
$connectionInfo = array("Database"=>"ProyectoAnalisis", "UID"=>"xd", "PWD"=>"1234", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName, $connectionInfo);
if ($conn_sis) {
	echo "conexion exitosa xd";
}else{
	echo "fallo en la conexion";
	die(print_r(sqlsrv_errors(), true));
}
////////////////////////
<?php

	include ('conexion.php');
	$conexion = conectar();

	$sql = "SELECT * FROM Estudiante";
	$res = sqlsrv_query($conexion,$sql);


while ( $row = sqlsrv_fetch_object($res)) {
	echo $row=>codigo;
}
<?php

$conexion=mysql_connect("localhost","root","m1189t0390");
if (!$conexion) {
	die("no se ha podido conectar por la siguiente razon: ".mysql_error());
}
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];

mysql_select_db("whiplash",$conexion);
mysql_query("INSERT INTO admin(email,password,nombre,apellido) VALUES('$email','$password','$nombre','$apellido')");
echo "se ha creado una nueva cuenta. <a href='pruebaregistroadminnuevo.php'>volver</a>";



mysql_close($conexion);

?>
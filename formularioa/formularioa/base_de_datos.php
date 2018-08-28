<?php
mb_internal_encoding("UTF-8");

$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Direccion = $_POST['Direccion'];
$Contraseña =$_POST['Contraseña'];
$Email = $_POST['Email'];

$conexion = mysqli_connect ("localhost","root","","paginita");

mysqli_set_charset($conexion, 'utf8');

$sql = "INSERT INTO Formulario(Nombre,Apellido,Contraseña,Direccion,Email) VALUES ('$Nombre','$Apellido','$Contraseña','$Direccion','$Email')";

$query = mysqli_query($conexion,$sql);

?>
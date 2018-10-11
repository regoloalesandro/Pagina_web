<?php
$usuario = $_POST['username'];
$password = $_POST['password'];

//conectar
$conexion = mysqli_connect("localhost","root","","paginita");

$consulta = "SELECT * FROM formulario WHERE Nombre= '$usuario' and  Contraseña= '$password'";
$resultado= mysqli_query($conexion,$consulta);
$data=mysqli_fetch_assoc($resultado);
if($data['Nombre']==$usuario && $data['Contraseña']==$password  ){
    session_start();
    $_SESSION['usuario']= $usuario;
    $_SESSION['Contraseña']= $password;    
    header('location:perfil.html');
}
else{
    echo "error en la autentificacion";
}
mysqli_close($conexion);

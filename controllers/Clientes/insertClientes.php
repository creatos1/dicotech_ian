<?php
include("../../config/connect.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "INSERT INTO cliente (nombre, apellido, direccion, email, usuario, fecha_nacimiento) 
        VALUES ('$nombre', '$apellido', '$direccion', '$email', '$usuario', '$fecha_nacimiento')";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Cliente registrado con exito";
}else{
    echo "Error al registrar cliente: " . mysqli_error($conn);
}
header("Location: ../../view/Clientes/clientes_home.php");
?>

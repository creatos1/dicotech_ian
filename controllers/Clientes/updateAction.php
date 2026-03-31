<?php
include("../../config/connect.php");

$id_original = $_POST["id_original"];
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];

$sql = "UPDATE cliente SET 
        id = '$id',
        nombre = '$nombre',
        apellido = '$apellido',
        direccion = '$direccion',
        email = '$email',
        usuario = '$usuario',
        fecha_nacimiento = '$fecha_nacimiento'
        WHERE id = '$id_original'";

$query = mysqli_query($conn, $sql);

if($query){
    header("Location: ../../view/Clientes/clientes_home.php");
}else{
    echo "Error al actualizar cliente: " . mysqli_error($conn);
}
?>

<?php
include ("../../config/connect.php");

$upc = $_POST["upc"];
$descripcion = $_POST["descripcion"];
$costo = $_POST["costo"];
$precio = $_POST["precio"];
$existencia = $_POST["existencia"];

$sql = "INSERT INTO producto (upc, descripcion, costo, precio, existencia) 
        VALUES ('$upc', '$descripcion', '$costo', '$precio', '$existencia')";

$query = mysqli_query($conn, $sql);

if($query){
    echo "Producto insertado con exito";
}else{
    echo "Error al insertar producto: " . mysqli_error($conn);
}
header("Location: ../../index.php");
?>

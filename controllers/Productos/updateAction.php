<?php
include("../../config/connect.php");

$upc_original = $_POST["upc_original"];
$upc = $_POST["upc"];
$descripcion = $_POST["descripcion"];
$costo = $_POST["costo"];
$precio = $_POST["precio"];
$existencia = $_POST["existencia"];

$sql = "UPDATE producto SET upc = '$upc', descripcion = '$descripcion', costo = '$costo', precio = '$precio', existencia = '$existencia' WHERE upc = '$upc_original'";
$query = mysqli_query($conn, $sql);

header("Location: ../../index.php");
?>

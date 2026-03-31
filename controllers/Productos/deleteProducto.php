<?php
include("../../config/connect.php");

$upc = $_GET["upc"];

$sql = "DELETE FROM producto WHERE upc = '$upc'";
$query = mysqli_query($conn, $sql);

header("Location: ../../view/Productos/productos_home.php");

?>

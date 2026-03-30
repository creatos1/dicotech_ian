<?php
include("../../config/connect.php");

$upc = $_GET["upc"];

$sql = "SELECT * FROM producto WHERE upc = '$upc'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Producto</title>
</head>
<body>
    <h1>Modificar Producto</h1>
    <form action="../../controllers/Productos/updateAction.php" method="POST">
        <input type="hidden" name="upc_original" value="<?php echo $row['upc']; ?>">

        <p>UPC</p>
        <input type="text" name="upc" value="<?php echo $row['upc']; ?>">

        <p>Descripción</p>
        <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>">

        <p>Costo</p>
        <input type="text" name="costo" value="<?php echo $row['costo']; ?>">

        <p>Precio</p>
        <input type="text" name="precio" value="<?php echo $row['precio']; ?>">

        <p>Existencia</p>
        <input type="text" name="existencia" value="<?php echo $row['existencia']; ?>">

        <br><br>
        <button type="submit">Actualizar Producto</button>
        <a href="../../index.php">Cancelar</a>
    </form>
</body>
</html>

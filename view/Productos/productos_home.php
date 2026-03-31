<?php
include("../../config/connect.php");
$sql = "SELECT * FROM producto";
$query = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Ian</title>
    <link rel="stylesheet" href="../../css/productos.css">
</head>
<body>
    <section class="Products">
        <div class="registro">
            <h1>Registrar productos</h1>
            <section>
                <form action="../../controllers/Productos/insertProductos.php" method="POST" onsubmit="return validar()">
                <div>
                    <p>Pieza de produto</p>
                    <input class="inputProducto" type="text" name="upc" placeholder="Ingrese el UPC del producto" >
                </div>
                <div>
                    <p>Descripcion del producto</p>
                    <input class="inputProducto" type="text" name="descripcion" placeholder="Ingrese la descripcion del producto">
                </div>
                <div>
                    <p>Costo del producto</p>
                    <input class="inputProducto" type="text" name="costo" placeholder="Ingrese el costo del producto">
                </div>
                <div>
                    <p>Precio del producto</p>
                    <input class="inputProducto" type="text" name="precio" placeholder="Ingrese el precio del producto">
                </div>
                <div>
                    <p>Existencia del producto</p> 
                    <input class="inputProducto" type="text" name="existencia" placeholder="Ingrese la existencia del producto">
                </div>
                <button class="inputProducto" type = "submit" href ="../../controllers/Productos/insertProductos.php">Registrar producto</button>
                
                </form>
            </section>
            <section>
                <h1>Productos registrados</h1>
                <div style="margin-bottom: 20px;">
                    <input type="text" id="buscarProducto" class="inputProducto" placeholder="Buscar por UPC o Descripción...">
                </div>
                <table border="1" class="inputProducto" id="tablaProductos">
                    <tr>
                        <th>UPC</th>
                        <th>Descripcion</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>Existencia</th>
                        <th>Acciones</th>

                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>" . $row["upc"] . "</td>";
                        echo "<td>" . $row["descripcion"] . "</td>";
                        echo "<td>" . $row["costo"] . "</td>";
                        echo "<td>" . $row["precio"] . "</td>";
                        echo "<td>" . $row["existencia"] . "</td>";
                        echo "<td>
                                <a href='../view/Productos/updateProducto.php?upc=" . $row["upc"] . "'>Modificar</a> | 
                                <a href='../../controllers/Productos/deleteProducto.php?upc=" . $row["upc"] . "' onclick='return confirm(\"¿Seguro?\")'>Eliminar</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </section>
            


        </div>
    
    </section>
    <script src="../../js/validar.js"></script>
    <script src="../../js/productos/filters.js"></script>

</body>
</html>
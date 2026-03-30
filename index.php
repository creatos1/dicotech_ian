<?php
include("config/connect.php");
$sql = "SELECT * FROM producto";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Ian</title>
</head>
<body>
    <section>
        <div>
            <h1>Registrar productos</h1>
            <section>
                <form action = "controllers/Productos/insertProductos.php" method = "POST">
                <div>
                    <a>Pieza de produto</a>
                    <input type="text" name="upc" placeholder="Ingrese el UPC del producto" >
                </div>
                <div>
                    <a>Descripcion del producto</a>
                    <input type="text" name="descripcion" placeholder="Ingrese la descripcion del producto">
                </div>
                <div>
                    <a>Costo del producto</a>
                    <input type="text" name="costo" placeholder="Ingrese el costo del producto">
                </div>
                <div>
                    <a>Precio del producto</a>
                    <input type="text" name="precio" placeholder="Ingrese el precio del producto">
                </div>
                <div>
                    <a>Existencia del producto</a>
                    <input type="text" name="existencia" placeholder="Ingrese la existencia del producto">
                </div>
                <button type = "submit" href ="controllers/Productos/insertProductos.php">Registrar producto</button>
                
                </form>
            </section>
            


        </div>
    
    </section>

</body>
</html>
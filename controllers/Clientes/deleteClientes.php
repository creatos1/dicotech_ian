<?php
include("../../config/connect.php");

$id = $_GET["id"];

$sql = "SELECT * FROM cliente WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente</title>
</head>
<body>
    <h1>Eliminar Cliente</h1>
    <section>
        <form action="../../controllers/Clientes/deleteAction.php" method="POST" onsubmit="return confirmar()">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <div>
                <p>ID</p>
                <input class="login" type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
            </div>
            
            <div>
                <p>Nombre</p>
                <input class="login" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" readonly>
            </div>
            
            <div>
                <p>Apellido</p>
                <input class="login" type="text" name="apellido" value="<?php echo $row['apellido']; ?>" readonly>
            </div>
            
            <div>
                <p>Dirección</p>
                <input class="login" type="text" name="direccion" value="<?php echo $row['direccion']; ?>" readonly>
            </div>
            
            <div>
                <p>Email</p>
                <input class="login" type="text" name="email" value="<?php echo $row['email']; ?>" readonly>
            </div>
            
            <div>
                <p>Usuario</p>
                <input class="login" type="text" name="usuario" value="<?php echo $row['usuario']; ?>" readonly>
            </div>
            
            <div>
                <p>Fecha de nacimiento</p>
                <input class="login" type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" readonly>
            </div>
            
            <button class="login" type="submit">Eliminar Cliente</button>
            <a href="../../index.php">Cancelar</a>
        </form>
    </section>
    </form>

    <script>
        function confirmar() {
            return confirm("¿Está seguro de que desea eliminar este cliente?");
        }
    </script>
</body>
</html>

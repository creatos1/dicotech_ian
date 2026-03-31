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
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="../../css/clientes.css">
</head>
<body>
    <section class="Login">
        <div class="registro">
            <h1>Modificar Cliente</h1>
            <section>
                <form action="../../controllers/Clientes/updateAction.php" method="POST" onsubmit="return validar()">
                    <input type="hidden" name="id_original" value="<?php echo $row['id']; ?>">
                    
                    <div>
                        <p>ID</p>
                        <input class="login" type="text" name="id" value="<?php echo $row['id']; ?>" placeholder="Ingrese el ID">
                    </div>
                    
                    <div>
                        <p>Nombre</p>
                        <input class="login" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" placeholder="Ingrese el nombre">
                    </div>
                    
                    <div>
                        <p>Apellido</p>
                        <input class="login" type="text" name="apellido" value="<?php echo $row['apellido']; ?>" placeholder="Ingrese el apellido">
                    </div>
                    
                    <div>
                        <p>Dirección</p>
                        <input class="login" type="text" name="direccion" value="<?php echo $row['direccion']; ?>" placeholder="Ingrese la dirección">
                    </div>
                    
                    <div>
                        <p>Email</p>
                        <input class="login" type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="Ingrese el email">
                    </div>
                    
                    <div>
                        <p>Usuario</p>
                        <input class="login" type="text" name="usuario" value="<?php echo $row['usuario']; ?>" placeholder="Ingrese el usuario">
                    </div>
                    
                    <div>
                        <p>Fecha de nacimiento</p>
                        <input class="login" type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" placeholder="Seleccione la fecha de nacimiento">
                    </div>
                    
                    <button class="login" type="submit">Actualizar Cliente</button>
                    <a href="clientes_home.php">Cancelar</a>
                </form>
            </section>
        </div>
    </section>
    <script src="../../js/validar.js"></script>
</body>
</html>

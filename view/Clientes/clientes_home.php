<?php
include("../../config/connect.php");
$sql = "SELECT * FROM cliente";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../../css/clientes.css">
</head>
<body>
    <section class="Login">
        <div class="registro">
            <h1>Registro de clientes</h1>
            <section>
                <form action="../../controllers/Clientes/insertClientes.php" method="POST" onsubmit="return validar()">
                <div>
                    <p>Nombre</p>
                    <input class="login" type="text" name="nombre" placeholder="Ingrese el nombre">
                </div>
                <div>
                    <p>Apellido</p>
                    <input class="login" type="text" name="apellido" placeholder="Ingrese el apellido">
                </div>
                <div>
                    <p>Dirección</p>
                    <input class="login" type="text" name="direccion" placeholder="Ingrese la dirección">
                </div>
                <div>
                    <p>Email</p> 
                    <input class="login" type="text" name="email" placeholder="Ingrese el email">
                </div>
                <div>
                    <p>Usuario</p> 
                    <input class="login" type="text" name="usuario" placeholder="Ingrese el usuario">
                </div>
                <div>
                <p>Fecha de nacimiento</p> 
                    <input class="login" type="date" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Seleccione la fecha de nacimiento">
                </div>

                <button class="login" type = "submit" href ="../../controllers/Clientes/insertCliente.php">Registrar cliente</button>
                
                </form>
            </section>
            <section>
                <h1>Clientes registrados</h1>
                <table border="1" class="login">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["apellido"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>
                                <a href='updateCliente.php?id=" . $row["id"] . "'>Modificar</a> | 
                                <a href='../../controllers/Clientes/deleteClientes.php?id=" . $row["id"] . "' onclick='return confirm(\"¿Seguro?\")'>Eliminar</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </section>
        </div>
    </section>
    <script src="../../js/validar.js"></script>
</body>
</html>
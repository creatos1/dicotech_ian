<?php
$token = "4d2b6a290c5cd8ba38f2a973a712457947ffda098323ea8d4f46db11299f1727";
$url = "https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43718/datos/oportuno";

$opciones = [
    "http" => [
        "method" => "GET",
        "header" => "Bmx-Token: $token\r\n"
    ]
];
$contexto = stream_context_create($opciones);

$respuesta = file_get_contents($url, false, $contexto);
$datos = json_decode($respuesta);


$tipoCambio = $datos->bmx->series[0]->datos[0]->dato;
$fecha = $datos->bmx->series[0]->datos[0]->fecha;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Inicio</title>
    <link rel="stylesheet" href="css/index.css?v=1.1">
</head>
<body>
    <Section h1>
        <h1>API de Banxico</h1>
    </Section>
        <section>
        <?php
        echo "El tipo de cambio hoy ($fecha) es: $" . $tipoCambio;
        ?>
    </section>
    <section>
        Ian Axel Rodríguez Santoyo
    </section>
    <section class = "logobank">
        <img src="assets/img/bank.png" alt="Examen Ian">
    </section>
    <section>
        <button class="button" type="button" onclick="location.href='view/Productos/productos_home.php'">Productos</button>
        <button class="button" type="button" onclick="location.href='view/Clientes/clientes_home.php'">Clientes</button>

    </section>

</body>
</html>
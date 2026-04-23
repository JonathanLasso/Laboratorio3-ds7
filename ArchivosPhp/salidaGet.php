<?php
if (isset($_GET['nombre']) && isset($_GET['peso']) && isset($_GET['altura'])) {
    $nombre = htmlspecialchars(trim($_GET['nombre']));
    $peso = (float)$_GET['peso'];
    $altura = (float)$_GET['altura'];
    echo '
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Resultado de Calculo de IMC</title>
    </head>
    <body>
        <div class="container mt-3">
        <h1>Resultado de Calculo de IMC</h1>
        <p>' . $nombre . ' tu Indice de Masa Corporal (IMC) es: ' . number_format($peso / ($altura * $altura), 2) . ' </p>
        <h2>Información adicional a mostrar:</h2>
        <ul>
            <li>Nombre de archivo php ejecutado: ' . htmlspecialchars($_SERVER['PHP_SELF']) . '</li>
            <li>Nombre del Servidor: ' . htmlspecialchars($_SERVER['SERVER_NAME']) . '</li>
            <li>Agente de usuario HTTP: ' . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . '</li>
            <li>Metodo de petición: ' . htmlspecialchars($_SERVER['REQUEST_METHOD']) . '</li>
            <li>Dirección remota: ' . htmlspecialchars($_SERVER['REMOTE_ADDR']) . '</li>
            <li>Cadena de consulta: ' . htmlspecialchars($_SERVER['QUERY_STRING']) . '</li>
        
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
    ';
} else {
    header('Location:../Formularios/calculadoraDeImc.hml');
    exit();
}
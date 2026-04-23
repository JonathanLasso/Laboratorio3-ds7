<?php
if (isset($_GET['nombre']) && isset($_GET['correo']) && isset($_GET['cedula']) && isset($_GET['edad'])) {
    $nombre = htmlspecialchars(trim($_GET['nombre']));
    $email = htmlspecialchars(trim($_GET['correo']));
    $cedula = htmlspecialchars(trim($_GET['cedula']));
    $edad = htmlspecialchars(trim($_GET['edad']));

    echo '
            <!doctype html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
                <title>Registro de Contacto</title>
            </head>
            <body >
            <div class="container">
                <h1>Registro de Contacto</h1>
                <p>Su formulario con la siguiente información ha sido registrado:</p>
                <ul>
                    <li>Nombre: ' . $nombre . '</li>
                    <li>Email: ' . $email . '</li>
                    <li>Cédula: ' . $cedula . '</li>
                    <li>Edad: ' . $edad . '</li>
                </ul>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            </div>
            </body>
            </html>';
} else {
    header("location:../Formularios/registroDeContacto.html");
    exit();
}
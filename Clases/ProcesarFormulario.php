<?php
class ProcesarFormulario
{
    public static function procesar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = htmlspecialchars(trim($_POST['nombre']));
            $correo = htmlspecialchars(trim($_POST['correo']));
            $cedula = htmlspecialchars(trim($_POST['cedula']));
            $edad = htmlspecialchars(trim($_POST['edad']));
            header("Location:http:../ArchivosPhp/salidaPost.php?nombre=" . urlencode($nombre)
                . "&correo=" . urlencode($correo) . "&cedula=" . urlencode($cedula)
                . "&edad=" .urlencode($edad));
            exit();
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            header("Location:http:../ArchivosPhp/salidaGet.php?" . $_SERVER['QUERY_STRING']);
            exit();
        }
    }
}

ProcesarFormulario::procesar();
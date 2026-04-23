<?php
class ProcesarDatos
{
    public static function verificarTipoDeMetodo()
    {
        $metodo = $_SERVER['REQUEST_METHOD'];
        $servidor = $_SERVER['SERVER_NAME'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $navegador = $_SERVER['HTTP_USER_AGENT'];
        $archivoActual = $_SERVER['PHP_SELF'];
        $todaLaUrl = $_SERVER['QUERY_STRING'];
        if($metodo == 'POST') {
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $cedula=$_POST['cedula'];
            $edad=$_POST['edad'];
            header("Location: ../ArchivosPhp/salidaPost.php?nombre=$nombre&correo=$correo&cedula=$cedula&edad=$edad&metodo=$metodo&servidor=$servidor&ip=$ip&navegador=$navegador&archivo=$archivoActual");
            exit;
        }
        else if ($metodo == 'GET') {
            header("Location: ../ArchivosPhp/salidaGet.php?consulta=$todaLaUrl&$metodo&$servidor&$ip&$navegador&$archivoActual");
            exit;
        }
    }
}

ProcesarDatos::verificarTipoDeMetodo();
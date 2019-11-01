<?php
//importamos cuando no exista controlador
require_once 'controllers/error.php';
//creamos la clase dnd centraremos toda la app
class App
{
    function __construct()
    {
        echo "<p>Nueva App</p>";

        $url = $_GET['url'];
        //quitamos los / q no necesitamos
        $url = rtrim($url, '/');
        //separamos por /
        $url = explode('/', $url);
        //print_r($url);

        //cargar el controlador actual
        $archivoController = 'controllers/' . $url[0] . '.php';
        //validamos si existe el archivo
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];

            //para saber que metodo esta usando en el segundo parametro de la url
            if (isset($url[1])) {
                //creamos un metodo con el parametro obtenido
                $controller->{$url[1]}();
            }
        } else {
            $controller = new Errors();
        }
    }
}

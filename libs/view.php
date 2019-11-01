<?php

class View
{

    function __construct()
    {
        echo 'Vista Base';
    }

    //funcion para mostrar la vista que se llama con el parametro recibido
    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}

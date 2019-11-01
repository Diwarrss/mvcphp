<?php

class Controller
{

    function __construct()
    {
        echo 'Controlador Base';
        //cada vez que creo un controlador que extienda de mi controlador base creara una vista asociada a este
        $this->view = new View();
    }
}

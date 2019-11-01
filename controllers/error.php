<?php
class Errors extends Controller
{
    function __construct()
    {
        //hago el llamado al constructor de mi clase Base
        parent::__construct();
        //enviar el mensaje de error a la vista
        $this->view->mensaje = "Error generico desde Controlador";
        $this->view->render('error/index');
        //echo "Error al cargar recurso";
    }
}

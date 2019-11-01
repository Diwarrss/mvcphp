<?php
class Main extends Controller
{
    function __construct()
    {
        //hago el llamado al constructor de mi clase Base Controller
        parent::__construct();
        //llamo el objeto view de mi controlador base junto con la vista
        $this->view->render('main/index');
        //echo "Controlador Principal";
    }

    function saludo()
    {
        echo 'Hola soy Metodo saludo';
    }
}

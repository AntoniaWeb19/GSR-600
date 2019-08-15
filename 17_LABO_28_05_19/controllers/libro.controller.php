<?php
require_once 'models/libro.php';

class LibroController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Libro();
    }
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/libro/libro.php';
        require_once 'views/footer.php';

    }
    public function Crud(){
        $alm = new Libro();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/libro/libro-editar.php';
        require_once 'views/footer.php';

    }
    public function Guardar(){
        $alm = new Libro();

        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['Nombre'];
        $alm->autor = $_REQUEST['Autor'];
        $alm->editorial = $_REQUEST['Editorial'];

        $alm->id > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

            header('Location: index.php');
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}

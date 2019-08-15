<?php
require_once 'models/libreria.php';

class LibreriaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Libreria();
    }
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/libreria/libreria.php';
        require_once 'views/footer.php';

    }
    public function Crud(){
        $alm = new Libreria();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/libreria/libreria-editar.php';
        require_once 'views/footer.php';

    }
    public function Guardar(){
        $alm = new Libreria();

        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['Nombre'];
        $alm->direccion = $_REQUEST['Direccion'];
        $alm->nit = $_REQUEST['nit'];
        $alm->telefono = $_REQUEST['telefono'];

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

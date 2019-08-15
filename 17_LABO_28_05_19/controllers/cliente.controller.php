<?php
require_once 'models/cliente.php';

class ClienteController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }
    public function Index(){
        require_once 'views/header.php';
        require_once 'views/cliente/cliente.php';
        require_once 'views/footer.php';

    }
    public function Crud(){
        $alm = new Cliente();

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'views/header.php';
        require_once 'views/cliente/cliente-editar.php';
        require_once 'views/footer.php';

    }
    public function Guardar(){
        $alm = new Cliente();

        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['Nombre'];
        $alm->ci = $_REQUEST['CI'];
        $alm->telefono = $_REQUEST['Telefono'];

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

<?php
class Usuarios extends Controller{
    public function index(){
        print_r($this->model->getUsuario());
    }
    public function validar(){
        if (empty($_POST['usuario']) || empty($_POST['clave'])){
            $msg = "Los campos estan vacios";
        }else{
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $data = $this->model->getUsuario( $usuario, $clave);
        }
        print_r($data);
        die();

    }
}
?>
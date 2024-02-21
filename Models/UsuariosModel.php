<?php
class UsuariosModel extends Query{ 
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuarios ( string $usuario, string $clave){
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
        $data = $this->select($sql);
        return $data;
    }
}
?>
<?php
require_once 'cls_conexion.php';
class LoginModel{
    public $correo;
   
    public $password;

    public function __construct() {
        $this->correo = "";
       
        $this->password = "";
    }
    public function loginUser($correo,$password){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("select u.correo, v.idveterinario, v.nombre,v.apellido,u.rol_id from usuarios u inner JOIN veterinarios v on v.idveterinario = u.id_veterinario where u.correo = '%s' and u.password = '%s';",$conex->real_escape_string($correo),$conex->real_escape_string($password));
        $res = mysqli_fetch_array(mysqli_query($conex,$sql));
        return $res;
    }
}
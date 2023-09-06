<?php
require_once 'cls_conexion.php';
class LoginModel{
    public $correo;
   
    public $password;
    
    public $id;
    public function __construct() {
        $this->correo = "";
       
        $this->password = "";

        $this->id = "";
    }
    public function getRol($correo,$password){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("SELECT id_persona,rol_id FROM usuarios WHERE usuarios.correo = '%s' AND usuarios.password = '%s';",$conex->real_escape_string($correo),$conex->real_escape_string($password));
        $res = mysqli_fetch_array(mysqli_query($conex,$sql));
        return $res;
    }
    public function loginUser($id,$rol){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        if($rol == 3){
            $sql = sprintf("select u.correo, p.idpersona,p.nombre,p.apellido from usuarios u inner join persona p on u.id_persona = p.idpersona where u.id_persona = %s",$id);

        }else{
            $sql = sprintf("select u.correo, p.nombre,p.apellido,v.idveterinario from usuarios u inner join persona p on u.id_persona = p.idpersona inner join veterinarios v on v.idpersona = p.idpersona where u.id_persona = %s",$id);
        }
        try {
            $res = mysqli_fetch_array(mysqli_query($conex,$sql));
        } catch (\Throwable $th) {
            $res = $th;
        }
       
        return $res;
    }
    
    
    

}
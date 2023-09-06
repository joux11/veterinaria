<?php
require_once 'cls_conexion.php';
class PropietariosModel
{
    public $id;
    public $cedula;
    public $nombre;
    public $apellido_pa;
    public $apellido_ma;
    public $celular;
    public $direccion;

    public function __construct()
    {
        $this->id = "";
        $this->cedula = "";
        $this->nombre = "";
        $this->apellido_pa = "";
        $this->apellido_ma = "";
        $this->celular = "";
        $this->direccion = "";
    }

    public function insertPropietario($cedula, $nombre, $apellido_pa, $apellido_ma, $celular, $direccion)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf(
            "INSERT INTO `propietarios` (`cedula`, `nombre`, `apellido_pa`, `apellido_ma`, `celular`, `direccion`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
            mysqli_real_escape_string($conex, $cedula),
            mysqli_real_escape_string($conex, $nombre),
            mysqli_real_escape_string($conex, $apellido_pa),
            mysqli_real_escape_string($conex, $apellido_ma),
            mysqli_real_escape_string($conex, $celular),
            mysqli_real_escape_string($conex, $direccion)
        );
        try {
            $res = mysqli_query($conex, $sql);
        } catch (\Throwable $th) {
            $res = false;
        }
        
        return $res;
    }
    public function getAll()
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "select * from propietarios";
        $res = mysqli_query($conex, $sql);
        return $res;
    }

    public function getAllById($id)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "select * from propietarios where idpropietario = $id ";
        try {
            $res = mysqli_query($conex, $sql);
        } catch (\Throwable $th) {
            $res = $th;
        }
        return $res;
    }

    public function deleteById($id)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("delete from propietarios where idpropietario = %s", $conex->real_escape_string($id));

        $res = mysqli_query($conex, $sql);

        return $res;
    }

    public function getPropietarios(){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "select idpropietario, CONCAT(nombre, ' ', apellido_pa) AS nombres from propietarios;";
        try {
            $res = mysqli_query($conex, $sql);
        } catch (\Throwable $th) {
            $res = $th;
        }
        return $res;
    }
}

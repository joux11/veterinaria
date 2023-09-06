<?php
require_once 'cls_conexion.php';
class MascotasModel
{

    private $idmascota;
    private $idpropietario;
    private $nombreMascota;
    private $raza;
    private $color;
    private $pelaje;
    private $edad;
    private $tamaño;
    private $especie;
    private $sexo;
    private $foto;


    public function __construct()
    {

        $this->idmascota = "";
        $this->idpropietario = "";
        $this->nombreMascota = "";
        $this->raza = "";
        $this->color = "";
        $this->pelaje = "";
        $this->edad = "";
        $this->tamaño = "";
        $this->especie = "";
        $this->sexo = "";
        $this->foto = "";
    }

    public function insertMascota($idpropietario, $nombreMascota, $raza, $color, $pelaje, $edad, $tamaño, $especie, $sexo,$foto)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "insert into mascotas (idpropietario, nombreMascota, raza, color, pelaje, edad, tamanio, especie, sexo, foto)
            values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s','%s')";

        $query = sprintf(
            $sql,
            mysqli_real_escape_string($conex, $idpropietario),
            mysqli_real_escape_string($conex, $nombreMascota),
            mysqli_real_escape_string($conex, $raza),
            mysqli_real_escape_string($conex, $color),
            mysqli_real_escape_string($conex, $pelaje),
            mysqli_real_escape_string($conex, $edad),
            mysqli_real_escape_string($conex, $tamaño),
            mysqli_real_escape_string($conex, $especie),
            mysqli_real_escape_string($conex, $sexo),
            mysqli_real_escape_string($conex, $foto)
        );
        try {
            $res = mysqli_query($conex, $query);
        } catch (\Throwable $th) {
            $res = $th;
        }
        return $res;
    }

    public function getListMascotas(){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "SELECT m.idmascota, m.nombreMascota, CONCAT(p.nombre, ' ', p.apellido_pa) AS nombres, p.cedula FROM mascotas AS m INNER JOIN propietarios AS p ON m.idpropietario = p.idpropietario";
        $res = mysqli_query($conex, $sql);
        return $res;   
    }

    public function getAllById($idmascota){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("select * from mascotas where idmascota = %s",$conex->real_escape_string($idmascota));
        $res = mysqli_query($conex, $sql);
        return $res;

    }

    public function deleteById($idmascota){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("DELETE FROM mascotas WHERE idmascota = %s",$conex->real_escape_string($idmascota));
        $res = mysqli_query($conex, $sql);
        return $res;
    }

    public function getDatosMascota($idmascota){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = sprintf("SELECT m.idmascota, m.nombreMascota, m.color, m.tamanio, m.edad, m.especie, m.pelaje, m.sexo, m.raza, CONCAT(p.nombre, ' ', p.apellido_pa, ' ', COALESCE(p.apellido_ma, '')) AS nombres, p.direccion, p.celular, p.cedula, m.foto FROM mascotas AS m INNER JOIN propietarios AS p ON m.idpropietario = p.idpropietario where m.idmascota = %s",$conex->real_escape_string($idmascota));
        $res = mysqli_query($conex, $sql);
        return $res;
    }
}

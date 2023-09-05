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
    }

    public function insertMascota($idpropietario, $nombreMascota, $raza, $color, $pelaje, $edad, $tamaño, $especie, $sexo)
    {
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "insert into mascotas (idpropietario, nombreMascota, raza, color, pelaje, edad, tamanio, especie, sexo)
            values ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')";

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
            mysqli_real_escape_string($conex, $sexo)
        );
        try {
            $res = mysqli_query($conex, $query);
        } catch (\Throwable $th) {
            $res = $th;
        }
        return $res;
    }
}

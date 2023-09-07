<?php

require_once 'cls_conexion.php';

class ServiciosModel{
    public $idservicios;
    public $idmascota;
    public $idcuidador;
    public $fecha;
    public $atencion;
    public $observacion;
    public $costo;
    public $estado;

    public function __construct() {
        $this->idservicios = "";
        $this->idmascota = "";
        $this->idcuidador = "";
        $this->fecha = "";
        $this->atencion = "";
        $this->observacion = "";
        $this->costo = "";
        $this->estado = "";
    }

    public function getAllServicios(){
        $conex = new DBConexion();
        $conex = $conex->Conectar();
        $sql = "SELECT s.fecha, m.nombreMascota, concat(p.nombre,' ',p.apellido) as nombres, s.atencion,s.observacion,s.costo,s.estado FROM servicios s LEFT JOIN mascotas m ON s.idmascota = m.idmascota LEFT JOIN persona p ON s.idcuidador = p.idpersona; ";
        try {
            $res = mysqli_query($conex, $sql);
        } catch (\Throwable $th) {
            $res = false;
        }
        return $res;
    }
}
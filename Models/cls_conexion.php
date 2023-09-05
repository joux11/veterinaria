<?php
class DBConexion{
public $conexion;
protected $db;
private $host;
private $usuario;
private $clave;
private $base;
public function __construct(){
    $this->conexion="";
    $this->db="sql10644413";
    $this->host="sql10.freemysqlhosting.net:3306";
    //$this->host="localhost";

    $this->usuario = "sql10644413";
    //$this->usuario = "root";


    $this->clave ="wrfUuMYMIX";
    //$this->clave ="";
    }
    public function Conectar() {
        $this->conexion= mysqli_connect($this->host,$this->usuario, $this->clave,$this->db);
        
        $this->base=mysqli_select_db($this->conexion, $this->db);
        if($this->base==0) die("error de conexion con la base de datos". mysqli_error($this->conexion));
        return $this->conexion;
    }
}
?>
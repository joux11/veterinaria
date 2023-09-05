<?php
require_once 'Models/cls_Mascotas.php';
class Mascotas{
    private $views;
    private $model;
    public function __construct() {
        $this->views = new Views();
        $this->model = new MascotasModel();
    }

    public function mascotas(){
        $this->views->getView($this,"mascotas");
    }
    
    public function nuevaMascota(){
        $this->views->getView($this,"nuevaMascota");
    }

    public function insertMascota(){
        $result = $this->model->insertMascota($_POST['propietario'],$_POST['txtNombreMascota'],$_POST['txtRaza'],$_POST['txtColor'],$_POST['txtPelaje'],$_POST['txtEdad'],$_POST['txtTamaño'],$_POST['txtEspecie'],$_POST['txtSexo']);
        if($result){
            $response = array("status" => true, "msg" => "Guardado Correctamente!");
        }else{
            $response = array("status" => false, "msg" => "Error al Guardar :(");
        }
        echo json_encode($response);
    }
}
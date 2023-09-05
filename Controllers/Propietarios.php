<?php
require_once 'Models/cls_Propietarios.php';

class Propietarios
{
    private $views;
    private $model;
    public function __construct()
    {
        $this->views = new Views();
        $this->model = new PropietariosModel();
    }

    public function propietarios()
    {
        $this->views->getView($this, "propietarios");
    }
    public function nuevoPropietario()
    {
        $this->views->getView($this, "nuevoPropietario");
    }

    public function insertPropietario()
    {
        $result = $this->model->insertPropietario($_POST['txtCedula'], $_POST['txtNombre'], $_POST['txtApellidoPa'], $_POST['txtApellidoMa'], $_POST['txtCelular'], $_POST['txtDireccion']);
        if ($result) {
            $response = array("status" => true, "msg" => "Guardado Correctamente!");
        } else {
            $response = array("status" => false, "msg" => "Error al Guardar :(");
        }
        echo json_encode($response);
    }

    public function getTablaPropietarios()
    {
        $result = $this->model->getAll();

        echo "<table id='datatableDefault' class='table text-nowrap w-100'>
        <thead>
            <tr>
                <th>Nro.</th>
                <th>Nombre</th>                        
                <th>Cedula</th>
                <th>Celular</th>

                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>";
        
        if (mysqli_num_rows($result)> 0) {
            $f = 1;
            while ($row = mysqli_fetch_array($result)) {
                echo "
                <tr>
                    <td>".$f."</td>
                    <td>".$row['nombre']." ".$row['apellido_pa']." ".$row['apellido_ma']."</td>                        
                    <td>".$row['cedula']."</td>
                    <td>".$row['celular']."</td>

                    <td>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-success' disabled><i class='fa fa-edit'></i></button>
                            <button class='btn btn-success' onclick='btnEditarPropietario(".$row['idpropietario'].")'>Editar</button>
                        </div>
                    </td>
                    <td>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-danger' disabled><i class='fa fa-trash-alt'></i></button>
                            <button class='btn btn-danger' onclick='btnEliminarPropietario(".$row['idpropietario'].")' >Eliminar</button>
                        </div>
                    </td>
                
                </tr>";
                $f++;
            }
        }
        echo "</tbody>
        </table>";
    }
    public function getAllById(){       
        
        $result = $this->model->getAllById($_POST['id']);
        $row = mysqli_fetch_array($result);
        if(!empty($row)){
            $response = array(
                "idpropietario" =>$row['idpropietario'],
                "cedula" =>$row['cedula'],
                "nombre" =>$row['nombre'],
                "apellido_pa" =>$row['apellido_pa'],
                "apellido_ma" =>$row['apellido_ma'],
                "celular" =>$row['celular'],
                "direccion" =>$row['direccion'],
            );
        }
        echo json_encode($response);
    }

    public function deletePropById(){
        $result = $this->model->deleteById($_POST['id']);
        
        if($result){
            $response = array('status' => true, 'msg' => 'EL Propietario se elimino correctamente!'); 
        }else{
            $response = array('status' => false, 'msg' => 'Error al eliminar al propietario'); 
        }
        echo json_encode($response);
    }   

    public function getPropietarios(){
        $result = $this->model->getPropietarios();
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                echo"
                    <option value='".$row['idpropietario']."'>".$row['nombres']."</option>
                ";
            }
        }
    }
}

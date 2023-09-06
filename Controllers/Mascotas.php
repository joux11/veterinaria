<?php
require_once 'Models/cls_Mascotas.php';
class Mascotas
{
    private $views;
    private $model;
    public function __construct()
    {
        $this->views = new Views();
        $this->model = new MascotasModel();
    }

    public function mascotas()
    {
        $this->views->getView($this, "mascotas");
    }

    public function nuevaMascota()
    {
        $this->views->getView($this, "nuevaMascota");
    }

    public function historialMedico()
    {
        $this->views->getView($this, "historialMedico");
    }

    public function nuevaConsulta()
    {
        $this->views->getView($this, "nuevaConsulta");
    }


    public function insertMascota()
    {
        $rutaDB = "";
        if(isset($_FILES['dirFoto'])){
            if ($_FILES['dirFoto']['error'] == UPLOAD_ERR_OK) {
        
                $rutaTempArchivo = $_FILES['dirFoto']['tmp_name'];
                $nombreArchivoMod = 'img_'.md5(date('d-m-Y H:i:s')).'.jpg';
    
                $rutaServer = "assets/uploads/$nombreArchivoMod";
                $rutaDB = "../assets/uploads/$nombreArchivoMod";
    
                move_uploaded_file($rutaTempArchivo,$rutaServer);
                
                
            }     
        }else{
            $rutaDB = "";
        }
         
        
        
        $result = $this->model->insertMascota($_POST['propietario'], $_POST['txtNombreMascota'], $_POST['txtRaza'], $_POST['txtColor'], $_POST['txtPelaje'], $_POST['txtEdad'], $_POST['txtTamaño'], $_POST['txtEspecie'], $_POST['txtSexo'],$rutaDB);
        if ($result) {
            $response = array("status" => true, "msg" => "Guardado Correctamente!");
        } else {
            $response = array("status" => false, "msg" => "Error al Guardar :(");
        }
        echo json_encode($response);
    }

    public function getTablaMascotas()
    {
        $res = $this->model->getListMascotas();
        echo "
        <table id='datatableDefault' class='table text-nowrap w-100'>
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Mascota</th>
                        <th>Dueño</th>
                        <th>Cedula</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
        ";
        if (mysqli_num_rows($res) > 0) {
            $f = 1;
            while ($row = mysqli_fetch_array($res)) {
                echo "
                <tr>
                    <td>$f</td>
                    <td>" . $row['nombreMascota'] . "</td>
                    <td>" . $row['nombres'] . "</td>
                    <td>" . $row['cedula'] . "</td>
                    <td>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-pink' disabled><i class='fa fa-clipboard'></i></button>
                            <a href='mascotas/historialMedico?id=" . $row['idmascota'] . "' class='btn btn-pink'>Historial</a>
                        </div>
                    </td>
                    <td>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-success' disabled><i class='fa fa-edit'></i></button>
                            <button class='btn btn-success' onclick='btnEditMascota(" . $row['idmascota'] . ")'>Editar</button>
                        </div>
                    </td>
                    <td>
                        <div class='btn-group'>
                            <button type='button' class='btn btn-danger' disabled><i class='fa fa-trash-alt'></i></button>
                            <button class='btn btn-danger'onclick='btnDelMascota(" . $row['idmascota'] . ")'>Eliminar</button>
                        </div>
                    </td>
                </tr>
                
                ";
                $f++;
            }
        }
        echo "
        </tbody>
        </table>";
    }

    public function getAllById()
    {
        $result = $this->model->getAllById($_POST['id']);
        $row = mysqli_fetch_array($result);
        if (!empty($row)) {
            $response = array(
                "idmascota" => $row['idmascota'],
                "idpropietario" => $row['idpropietario'],
                "nombreMascota" => $row['nombreMascota'],
                "color" => $row['color'],
                "edad" => $row['edad'],
                "especie" => $row['especie'],
                "pelaje" => $row['pelaje'],
                "raza" => $row['raza'],
                "sexo" => $row['sexo'],
                "tamanio" => $row['tamanio'],

            );
        }

        echo json_encode($response);
    }

    public function deleteById()
    {
        $result = $this->model->deleteById($_POST['id']);
        if ($result) {
            $response = array('status' => true, 'msg' => 'La mascota se elimino correctamente!');
        } else {
            $response = array('status' => false, 'msg' => 'Error al eliminar a la mascota');
        }
        echo json_encode($response);
    }
    public function getDatosMascota()
    {
        $result = $this->model->getDatosMascota($_POST['id']);
        $row = mysqli_fetch_array($result);
        if (!empty($row)) {
            $response = array(
                "idmascota" => $row['idmascota'],
                "nombreMascota" => $row['nombreMascota'],
                "color" => $row['color'],
                "tamanio" => $row['tamanio'],
                "edad" => $row['edad'],
                "especie" => $row['especie'],
                "pelaje" => $row['pelaje'],
                "sexo" => $row['sexo'],
                "raza" => $row['raza'],
                "nombres" => $row['nombres'],
                "direccion" => $row['direccion'],
                "celular" => $row['celular'],
                "cedula" => $row['cedula'],
                "foto" =>$row['foto']
            );
        }
        echo json_encode($response);
    }
}

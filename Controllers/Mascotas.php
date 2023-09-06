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

    public function nuevoServicio(){
        $this->views->getView($this,"nuevoServicio");
    }


    public function insertMascota()
    {
        $rutaDB = "";
        if (isset($_FILES['dirFoto'])) {
            if ($_FILES['dirFoto']['error'] == UPLOAD_ERR_OK) {

                $rutaTempArchivo = $_FILES['dirFoto']['tmp_name'];
                $nombreArchivoMod = 'img_' . md5(date('d-m-Y H:i:s')) . '.jpg';

                $rutaServer = "assets/uploads/$nombreArchivoMod";
                $rutaDB = "../assets/uploads/$nombreArchivoMod";

                move_uploaded_file($rutaTempArchivo, $rutaServer);
            }
        } else {
            $rutaDB = "";
        }



        $result = $this->model->insertMascota($_POST['propietario'], $_POST['txtNombreMascota'], $_POST['txtRaza'], $_POST['txtColor'], $_POST['txtPelaje'], $_POST['txtEdad'], $_POST['txtTamaño'], $_POST['txtEspecie'], $_POST['txtSexo'], $rutaDB);
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

    public function getTablaConsultas()
    {
        $res = $this->model->getAllConsultas($_POST['id']);
        echo "
        <table class='table table-bordered' id='consultas'>
                                <thead>
                                    <tr>
                                        <th scope='col'>Nro</th>
                                        <th scope='col'>Fecha</th>
                                        <th scope='col'>Motivo</th>
                                        <th scope='col'>Ver</th>
                                        <th scope='col'>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
        ";
        if (mysqli_num_rows($res) > 0) {
            $f = 1;
            while ($row = mysqli_fetch_array($res)) {
                echo "
                <tr>
                <th scope='row'>$f</th>
                <td>" . $row['fecha'] . "</td>
                <td>" . $row['motivo'] . "</td>
                <td style='width:200px'>
                    <div class='btn-group'>
                        <button type='button' class='btn btn-info' disabled><i class='fa fa-eye'></i></button>
                        <button class='btn btn-info' onclick='fnMasDetalles(" . $row['idmascota'] . ")'>Mas detalles</button>
                    </div>
                    
                </td>
                <td style='width:200px'>
                <div class='btn-group'>
                        <button type='button' class='btn btn-danger' disabled><i class='fa fa-trash-alt'></i></button>
                        <button class='btn btn-danger' onclick='fnEliminarConsulta(" . $row['idconsulta'] . ")'>Eliminar consulta</button>
                    </div>
                </td>
            </tr>
                
                ";
            }
        } else {
            echo "<tr>
                   <td colspan='5' class='text-center bg-gray-100'>No hay consultas para esta mascota!</td> 
            </tr>";
        }
        echo "</tbody>
        </table>";
    }

    public function getTablaServicio(){
        $res = $this->model->getServicioById($_POST['id']);
        echo "
        <table class='table table-bordered' id='Tservicios'
                                <thead>
                                    <tr>
                                        <th scope='col'>Nro</th>
                                        <th scope='col'>Fecha</th>
                                        <th scope='col'>Tipo de Servicio</th>
                                        <th scope='col'>Estado</th>
                                        <th scope='col'>Acciones</th>
                                        <th scope='col'>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
        ";
        if(mysqli_num_rows($res)>0){
            $f=1;
            while($row = mysqli_fetch_array($res)){
                echo "
                <tr>
                <th scope='row'>$f</th>
                <td>" . $row['fecha'] . "</td>
                <td>" . $row['atencion'] . "</td>
                
            ";
                if($row['estado'] == "pendiente"){
                  echo "<td><span class='badge bg-warning'>Pendiente</span></td><td><div class='btn-group'>
                  <button type='button' class='btn btn-success' disabled><i class='fa fa-check'></i></button>
                  <button class='btn btn-success' onclick='fnEditarServicio(" . $row['idservicios'] . ")'>Realizado</button>
              </div>
          </td>
                  "  ;
                }else{
                    echo "<td><span class='badge bg-success'>Realizado</span></td><td><div class='btn-group'>
                    <button type='button' class='btn btn-default' disabled><i class='fa fa-check'></i></button>
                    <button class='btn btn-default' disabled>Realizado</button>
                </div>
            </td>";
                }
            echo"  
            <td>
                <div class='btn-group'>
                        <button type='button' class='btn btn-danger' disabled><i class='fa fa-trash-alt'></i></button>
                        <button class='btn btn-danger' onclick='fnEliminarServicio(" . $row['idservicios'] . ")'>Eliminar Servicio</button>
                    </div>
                </td>
                
                
            </tr>
                
                "; 
                $f++;
            }
        }else{
            echo "<tr>
                   <td colspan='6' class='text-center bg-gray-100'>No hay servicios para esta mascota!</td> 
            </tr>";
        }
        echo "</tbody>
        </table>";
        
    }
    public function getAllConsulta()
    {
        $res = $this->model->getAllConsultas($_POST['id']);
        $row = mysqli_fetch_array($res);
        if (!empty($row)) {
            $response = array(
                "veterinario" => $row['nombres'],
                "fecha" => $row['fecha'],
                "temperatura" => $row['temperatura'],
                "frecuenciaCardiaca" => $row['frecuenciaCardiaca'],
                "frecuenciaRespiratoria" => $row['frecuenciaRespiratoria'],
                "mucosa" => $row['mucosa'],
                "peso" => $row['peso'],
                "motivo" => $row['motivo']
            );
        }
        echo json_encode($response);
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
                "foto" => $row['foto']
            );
        }
        echo json_encode($response);
    }


    public function insertConsulta()
    {
        $res = $this->model->insertConsulta($_POST['idmascota'], $_POST['idveterinario'], $_POST['fechaConsulta'], $_POST['temperatura'], $_POST['frecuenciaCardiaca'], $_POST['frecuenciaRespiratoria'], $_POST['mucosa'], $_POST['peso'], $_POST['motivo']);
        if (!$res) {
            $response = array("status" => false, "msg" => "Error al Guardar :(");
        } else {
            $response = array("status" => true, "msg" => "Consulta Guardada!");
        }
        echo json_encode(($response));
    }

    public function delConsulta(){
        $res = $this->model->delConsulta($_POST['id']);
        if ($res) {
            
            $response = array("status" => true, "msg" => "Consulta Eliminada!");
        } else {
            $response = array("status" => false, "msg" => "Error al eliminar :(");
        }
        echo json_encode(($response));
    }

    public function delServicio(){
        $res = $this->model->delServicio($_POST['id']);
        if ($res) {
            
            $response = array("status" => true, "msg" => "Servicio Eliminada!");
        } else {
            $response = array("status" => false, "msg" => "Error al eliminar :(");
        }
        echo json_encode(($response));
    }

    public function insertServicio(){
        $res = $this->model->insertServicio($_POST['idmascota'],$_POST['idveterinario'],$_POST['fecha'],$_POST['tipoAtencion'],$_POST['observacion'],$_POST['costo']);
        if ($res) {
            
            $response = array("status" => true, "msg" => "Servicio Agregado!");
        } else {
            $response = array("status" => false, "msg" => "Error al agregar :(");
        }
        echo json_encode(($response));
    }

    public function editServicio(){
        $res = $this->model->editServicio($_POST['id']);
        if ($res) {
            
            $response = array("status" => true, "msg" => "Se aprobo xon exito");
        } else {
            $response = array("status" => false, "msg" => "Error al aprobar :(");
        }
        echo json_encode(($response));
    }
}

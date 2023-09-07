<?php
require_once 'Models/cls_servicios.php';
class Servicios{
    private $views;
    private $model;

    public function __construct(){
        $this->views = new Views();
        $this->model = new ServiciosModel();
    }
    public function servicios(){
        $this->views->getView($this,"servicios");
    }

    public function getTablaServicios(){
        $res = $this->model->getAllServicios();
        echo"
        <table id='datatableDefault' class='table text-nowrap w-100'>
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Fecha</th>
                        <th>Mascota</th>

                        <th>Encargado</th>
                        <th>Atencion</th>
                        <!-- <th>Ver</th> -->
                        <th>Observacion</th>
                        <th>Costo</th>
                        <th>Estado</th>
                    </tr>
                </thead>
        
        ";
        if(mysqli_num_rows($res)>0){
            $f = 1;
            while($row = mysqli_fetch_array($res)){
                echo "
                <tr>
                    <td>$f</td>
                    <td>".$row['fecha']."</td>
                    <td>".$row['nombreMascota']."</td>
                    <td>".$row['nombres']."</td>
                    <td>".$row['atencion']."</td>
                    <td>".$row['observacion']."</td>
                    <td>".$row['costo']."</td>
                    <td>";
                    if($row['estado'] == "pendiente"){
                        echo "<span class='badge bg-warning'>Pendiente</span>";
                    }else{
                        echo "<span class='badge bg-success'>Realizado</span>";
                    }
                    echo "</td>
                
                </tr>
                
                ";
                $f++;
            }
        }else{
            echo "<tr>
                   <td colspan='8' class='text-center bg-gray-100'>No hay servicios para mostrar!</td> 
            </tr>";
        }
        echo "</tbody>
        </table>";
        
        
    }

    

}
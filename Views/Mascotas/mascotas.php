<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
        <li class="breadcrumb-item active">Mascotas</li>
    </ul>

    <div class="card">
        
        <div class="card-header">
            <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                <a href="mascotas/nuevaMascota" class="btn btn-primary">Nueva Mascota</a>
            </div>

        </div>
        <div class="card-body">
            <table id="datatableDefault" class="table text-nowrap w-100">
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
                    <tr>
                        <td>1</td>
                        <td>KAIRA</td>
                        <td>Maria</td>
                        <td>1600560872</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-pink" disabled><i class="fa fa-clipboard"></i></button>
                                <a href="" class="btn btn-pink">Historial</a>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success" disabled><i class="fa fa-edit"></i></button>
                                <button class="btn btn-success">Editar</button>
                            </div>

                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger" disabled><i class="fa fa-trash-alt"></i></button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PEPE</td>
                        <td>Carlos</td>
                        <td>1500560872</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-pink" disabled><i class="fa fa-clipboard"></i></button>
                                <a href="" class="btn btn-pink">Historial</a>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success" disabled><i class="fa fa-edit"></i></button>
                                <button class="btn btn-success">Editar</button>
                            </div>

                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger" disabled><i class="fa fa-trash-alt"></i></button>
                                <button class="btn btn-danger">Eliminar</button>
                            </div>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</div>


<?php require_once("Views/footer.php"); ?>
<script>
    window.onload = () => {
        fnMascotas()
    }
</script>
<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Propietarios</a></li>
        <li class="breadcrumb-item active">Propietarios</li>
    </ul>

    <div class="card shadow-sm">
        <div class="card-header">
            <div class="btn-group">
                <button type="button" class="btn btn-warning text-white"><i class="fa fa-plus"></i></button>
                <a href="propietarios/nuevoPropietario" class="btn btn-warning text-white">Nuevo Propietario</a>
            </div>

        </div>
        <div class="card-body">
            <table id="datatableDefault" class="table text-nowrap w-100">
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Nombre</th>
                        
                        <th>Cedula</th>
                        <th>Celular</th>
                        <!-- <th>Ver</th> -->
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>



                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="modal fade" id="editP">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">

                <div class="text-center" id="loaderForm" style="display: none;">
                    <div class="spinner-border text-primary" style="margin:0px auto;"></div>
                </div>

                <div class="card-header">
                    Editar Propietario
                </div>
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" id="idpropietario">
                        <div class="col-lg-4">
                            <label class="form-label">Cédula</label>
                            <input type="number" class="form-control" id="txtCedula">
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="txtNombre">
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="txtApellidoPa">
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="txtApellidoMa">
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Celular</label>
                            <input type="text" class="form-control" id="txtCelular">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Dirección</label>
                            <textarea class="form-control" id="txtDireccion"></textarea>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-success me-2" id="btnAgregarPropietario">Guardar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("Views/footer.php"); ?>
<script>
    $(document).ajaxStart(function() {
        $('.preloader').show();
    });

    // Ocultar el preloader cuando todas las solicitudes AJAX han terminado
    $(document).ajaxStop(function() {
        $('.preloader').fadeOut(500);

        
    });
    
    window.onload = () => {
        fnPropietarios();

    }
</script>
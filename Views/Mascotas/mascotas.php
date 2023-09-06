<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
        <li class="breadcrumb-item active">Mascotas</li>
    </ul>
    <div class="preloader">
        <div class="spinner"></div>
    </div>

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



                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="modal fade" id="modalLg">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="card">
                <div class="text-center" id="loaderForm" style="display: none;">
                    <div class="spinner-border text-primary" style="margin:0px auto;"></div>
                </div>
                <div class="card-header bold">
                    Editar Mascota
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Propietario</label>
                                <select class="form-select form-select" name="" id="propietario">
                                    <option value="0" selected>Seleccione</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="exampleFormControlInput1">Nombre Mascota</label>
                                <input type="text" class="form-control" id="txtNombreMascota">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Especie</label>
                            <select class="form-select form-select" name="" id="txtEspecie">
                                <option selected>Elija la especie</option>
                                <option value="Perro">Perro</option>
                                <option value="Gato">Gato</option>
                                <option value="Otro">Otra especie</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Raza</label>
                            <input class="form-control" type="text" name="txtRaza" id="txtRaza">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Color</label>
                            <input class="form-control" type="text" name="txtColor" id="txtColor">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Pelaje</label>
                            <select class="form-select form-select" name="" id="txtPelaje">
                                <option selected>Elija Pelaje</option>
                                <option value="Corto">Corto</option>
                                <option value="Largo">Largo</option>
                                <option value="Rizado">Rizado</option>
                                <option value="Liso">Liso</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Tamaño</label>
                            <select class="form-select form-select" name="" id="txtTamaño">
                                <option selected>Elija el tamaño</option>
                                <option value="Pequeño">Pequeño</option>
                                <option value="Mediano">Mediano</option>
                                <option value="Grande">Grande</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Sexo</label>
                            <select class="form-select form-select" name="" id="txtSexo">
                                <option selected>Elija un Sexo</option>
                                <option value="Macho">Macho</option>
                                <option value="Hembra">Hembra</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="exampleFormControlInput1">Edad</label>
                            <input class="form-control" type="text" name="txtEdad" id="txtEdad">
                        </div>
                    </div>




                </div>
                <div class="card-footer">
                    <button class="btn btn-success" id="btnGuardarMascota">Guardar Mascota</button>
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
        fnMascotas()
    }
</script>
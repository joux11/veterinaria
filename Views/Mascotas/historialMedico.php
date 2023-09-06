<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>mascotas">Mascotas</a></li>
        <li class="breadcrumb-item active">Historial Medico</li>
    </ul>
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <div class="card shadow">
        <div class="card-header bg-pink text-white">
            <b>HISTORIAL MEDICO</b>
        </div>
        <div class="card-body">


            <div class="row">
                <div class="col-md-12">
                    <h5 class="h5"><strong>Datos del Paciente</strong></h5>

                </div>
                <div class="col-md-8">
                    <hr class="my-2">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="custom-list">
                                <li><strong>Nombre de Mascota: </strong><span id="txtNombreMascota"></span></li>
                                <li><strong>Color:</strong> <span id="txtColor"></span></li>
                                <li><strong>Tamaño:</strong> <span id="txtTamanio"></span></li>
                                <li><strong>Edad:</strong> <span id="txtEdad"></span> años</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <!-- Contenido de la segunda columna vertical adicional -->
                            <ul class="custom-list">
                                <li><strong>Especie:</strong><span id="txtEspecie"> Perro</span></li>
                                <li><strong>Pelaje:</strong> <span id="txtPelaje"> Corto</span></li>
                                <li><strong>Sexo:</strong> <span id="txtSexo"> Macho</span></li>
                                <li><strong>Raza:</strong> <span id="txtRaza"> Labrador</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h5><strong>Datos del Propietario</strong></h5>
                        <hr class="my-1">
                        <div class="col-lg-6">
                            <!-- Datos del Propietario debajo de Datos del Paciente -->


                            <ul class="custom-list">
                                <li><strong>Nombre del Propietario: </strong><span id="txtNombreProp">Joe</span></li>
                                <li><strong>Dirección:</strong> <span id="txtDireccion">Calle 123, Ciudad</span></li>
                                <li><strong>Celular:</strong><span id="txtCelular"> (555) 123-4567</span></li>
                                <li><strong>Cédula:</strong><span id="txtCedula"> 1234567890</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <!-- Contenido de la columna derecha -->
                    <img src="" id="fotoMascota" alt="Imagen del paciente" width="150" >

                </div>
            </div>
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" data-bs-toggle="tab" href="#consultas">Consultas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#vacunas">Vacunas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#servicios">Servicios</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabsContent">
                <div class="tab-pane fade show active" id="consultas">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6><b>CONSULTAS</b></h6>

                            <div class="btn-group-sm">
                                <a href="" id="btnNuevaConsulta"  class="btn btn-primary"><i class="fa fa-plus"></i> Nueva Consulta</a>

                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Contenido para la sección de Consultas -->

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nro</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2023-08-05</td>
                                        <td>TOS y DOLOR DE ESTOMAGO</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info" disabled><i class="fa fa-eye"></i></button>
                                                <button href="#" class="btn btn-info">Mas detalles</button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="vacunas">
                    <div class="card">
                        <div class="card-body">
                            <!-- Contenido para la sección de Vacunas -->
                            <h5 class="card-title">Vacunas</h5>
                            <p class="card-text">Contenido de las vacunas.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="servicios">
                    <div class="card">
                        <div class="card-body">
                            <!-- Contenido para la sección de Tratamientos -->
                            <h5 class="card-title">Servicios</h5>
                            <p class="card-text">Contenido de los servicios.</p>
                        </div>
                    </div>
                </div>
            </div>





           
        </div>



    </div>
</div>

</div>

<?php require_once("Views/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    
    $(document).ajaxStart(function() {
        $('.preloader').show();
    });

    // Ocultar el preloader cuando todas las solicitudes AJAX han terminado
    $(document).ajaxStop(function() {
        $('.preloader').fadeOut(500);


    });
    window.onload = () => {
        fnHMascotas()
    }
</script>
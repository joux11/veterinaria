<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <!-- Recuadro "Registrar Datos para un Control Rápido" -->
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
                                <input type="hidden" name="idmascota" id="idmascota">
                                <li><strong>Nombre de Mascota: </strong><span id="txtNombreMascota"></span></li>
                                <li><strong>Color:</strong> <span id="txtColor"></span></li>
                                <li><strong>Tamaño:</strong> <span id="txtTamanio"></span></li>
                                <li><strong>Edad:</strong> <span id="txtEdad"></span> años</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <!-- Contenido de la segunda columna vertical adicional -->
                            <ul class="custom-list">
                                <li><strong>Especie:</strong><span id="txtEspecie"> </span></li>
                                <li><strong>Pelaje:</strong> <span id="txtPelaje"> </span></li>
                                <li><strong>Sexo:</strong> <span id="txtSexo"> </span></li>
                                <li><strong>Raza:</strong> <span id="txtRaza"> </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h5><strong>Datos del Propietario</strong></h5>
                        <hr class="my-1">
                        <div class="col-lg-6">
                            <!-- Datos del Propietario debajo de Datos del Paciente -->


                            <ul class="custom-list">
                                <li><strong>Nombre del Propietario: </strong><span id="txtNombreProp"></span></li>
                                <li><strong>Dirección:</strong> <span id="txtDireccion"></span></li>
                                <li><strong>Celular:</strong><span id="txtCelular"> </span></li>
                                <li><strong>Cédula:</strong><span id="txtCedula"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <!-- Contenido de la columna derecha -->
                    <img src="" id="fotoMascota" alt="Imagen del paciente" width="150">

                </div>
            </div>
            <div class="card">
                <div class="text-center" id="loaderForm" style="display: none;">
                    <div class="spinner-border text-primary" style="margin:0px auto;"></div>
                </div>
                <div class="card-header bg-yellow text-white">
                    <b>REGISTRAR DATOS PARA UN NUEVO SERVICIO</b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="txtNombreMascota">Nombre de la Mascota:</label>
                            <input type="text" id="txtNombreMascotaF" name="txtNombreMascota" class="form-control" readonly>
                        </div>
                        <div class="col-lg-4">
                            <input type="hidden" name="idveterinario" id="idveterinario" value="<?= $_SESSION['idveterinario'] ?>">
                            <label for="veterinario">Veterinario:</label>
                            <input type="text" id="veterinario" name="veterinario" class="form-control" value="<?= $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>" readonly>
                        </div>
                        <div class="col-lg-4">
                            <label for="fecha">Fecha:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="fechaConsulta" readonly />
                                <label class="input-group-text" for="datepicker">
                                    <i class="fa fa-calendar"></i>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="tipoAtencion">Tipo de Atencion:</label>
                            <select class="form-select form-select" name="tipoAtencion" id="tipoAtencion">
                                <option selected>Elija la Atencion</option>
                                <option value="Spa">Spa</option>
                                <option value="Peluqueria">Peluqueria</option>
                                <option value="Lavada">Lavada</option>
                            </select>

                        </div>
                        <div class="col-lg-4">
                            <label for="observacion">Observacion:</label>
                            <input type="text" id="observacion" name="observacion" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label for="costo">Costo:</label>
                            <input type="text" id="costo" name="costo" class="form-control">
                        </div>
                    </div>
                    <br>
                    <!-- <div class="col-lg-12">
                        <h5>Tipo de Atencion</h5>
                        <hr class="my-1">
                    </div>
                    <div class="row">
                        

                    </div> -->

                </div>
                <div class="card-footer">
                    <button class="btn btn-success" id="btnGuardarServicio">Guardar</button>
                    <a href="javascript:history.back()">Atras</a>
                </div>
            </div>


        </div>



    </div>


</div>


<?php require_once("Views/footer.php"); ?>
<script>
    window.onload = () => {
        fnNuevoServicio()
    }
    $('#fechaConsulta').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        language: 'es',

    });
</script>
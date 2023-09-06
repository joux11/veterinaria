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
                <div class="card-header bg-primary text-white">
                    <b>REGISTRAR DATOS PARA UN CONTROL RAPIDO</b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="txtNombreMascota">Nombre de la Mascota:</label>
                            <input type="text" id="txtNombreMascotaF" name="txtNombreMascota" class="form-control" readonly>
                        </div>
                        <div class="col">
                            <input type="hidden" name="idveterinario" id="idveterinario" value="<?=$_SESSION['idveterinario']?>">
                            <label for="veterinario">Veterinario:</label>
                            <input type="text" id="veterinario" name="veterinario" class="form-control" value="<?=$_SESSION['nombre']." ".$_SESSION['apellido']?>" readonly>
                        </div>
                        <div class="col">
                            <label for="fecha">Fecha:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="fechaConsulta" readonly />
                                <label class="input-group-text" for="datepicker">
                                    <i class="fa fa-calendar"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <h5>Control Previo</h5>
                        <hr class="my-1">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="temperatura">Temperatura:</label>
                            <input type="text" id="temperatura" name="temperatura" class="form-control">
                        </div>
                        <div class="col">
                            <label for="frecuenciaCardiaca">Frecuencia Cardiaca:</label>
                            <input type="text" id="frecuenciaCardiaca" name="frecuenciaCardiaca" class="form-control">
                        </div>
                        <div class="col">
                            <label for="frecuenciaRespiratoria">Frecuencia Respiratoria:</label>
                            <input type="text" id="frecuenciaRespiratoria" name="frecuenciaRespiratoria" class="form-control">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="mucosa">Mucosa:</label>
                            <input type="text" id="mucosa" name="mucosa" class="form-control">
                        </div>
                        <div class="col">
                            <label for="peso">Peso:</label>
                            <input type="text" id="peso" name="peso" class="form-control">
                        </div>
                        <div class="col">
                            <label for="motivo">Motivo:</label>
                            <input type="text" id="motivo" name="motivo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Guardar Consulta</button>
                    <a href="javascript:history.back()">Atras</a>
                </div>
            </div>


        </div>



    </div>


</div>


<?php require_once("Views/footer.php"); ?>
<script>
    window.onload = () => {
        fnNuevaConsulta()
    }
    $('#fechaConsulta').datepicker({
        autoclose: true,
        language: 'es'
    });
</script>
<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>mascotas">Mascotas</a></li>
        <li class="breadcrumb-item active">Nueva Mascota</li>
    </ul>

    <div class="card shadow">
        <div class="text-center" id="loaderForm" style="display: none;">
            <div class="spinner-border text-primary" style="margin:0px auto;"></div>
        </div>
        <div class="card-header bg-primary text-white">
            NUEVA MASCOTA
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
                <div class="col-lg-6">
                    
                        <label class="form-label" for="defaultFile">Subir Foto</label>
                        <input type="file" class="form-control" id="inputFoto" />
                   
                </div>
            </div>




        </div>
        <div class="card-footer">
            <button class="btn btn-primary" id="btnGuardarMascota">Guardar Mascota</button>
            <a href="<?=BASE_URL?>mascotas">Atras</a>
        </div>
    </div>

</div>


<?php require_once("Views/footer.php"); ?>
<script>
    window.onload = () => {
        fnNuevaMascota()
    }
</script>
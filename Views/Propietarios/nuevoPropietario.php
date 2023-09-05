<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Propietarios</a></li>
        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>propietarios">Propietarios</a></li>
        <li class="breadcrumb-item active">Nuevo Propietario</li>
    </ul>

    <div class="card shadow">

        <div class="text-center" id="loaderForm" style="display: none;">
            <div class="spinner-border text-primary" style="margin:0px auto;"></div>
        </div>

        <div class="card-header bg-warning text-white">
            AGREGAR PROPIETARIO
        </div>
        <div class="card-body">
            <div class="row">
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
                    <button class="btn btn-success me-2" id="btnAgregarPropietario">Agregar</button>

                </div>
            </div>
        </div>
    </div>

</div>
<?php require_once("Views/footer.php"); ?>
<script>
    window.onload = () => {
        fnPropietario()
    }
</script>
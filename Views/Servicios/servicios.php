<?php require_once("Views/header.php"); ?>
<div id="content" class="app-content">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
        <li class="breadcrumb-item active">Servicios</li>
    </ul>
    <div class="preloader">
        <div class="spinner"></div>
    </div>


    <div class="card">
        <div class="card-body">
            <table id="datatableDefault" class="table text-nowrap w-100">
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
                <tbody>



                </tbody>
            </table>
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
        fnServicios()
    }
</script>
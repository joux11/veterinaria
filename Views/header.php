<?php
session_start();
if ($_SESSION['idveterinario'] == "" && $_SESSION['idpersona'] == "" ) {
    header("Location: login");
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="<?= BASE_URL ?>assets/css/vendor.min.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>assets/css/app.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ================== END core-css ================== -->

    <link href="<?= BASE_URL ?>assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="<?= BASE_URL ?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">

</head>

<body class="">
   
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN mobile-toggler -->
            <div class="mobile-toggler">
                <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <!-- END mobile-toggler -->

            <!-- BEGIN brand -->
            <div class="brand">
                <div class="desktop-toggler">
                    <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                </div>

                <a href="<?= BASE_URL ?>dashboard" class="brand-logo">
                    <img src="<?= BASE_URL ?>assets/img/logo.png" alt="" height="20" />
                </a>
            </div>
            <!-- END brand -->

            <!-- BEGIN menu -->
            <div class="menu">
                <form class="menu-search text-center" method="POST" name="header_search_form">
                    
                </form>

                <div class="menu-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
                        <div class="menu-img online">
                            <img src="<?= BASE_URL ?>assets/img/user/user.jpg" alt="" class="ms-100 mh-100 rounded-circle" />
                        </div>
                        <div class="menu-text"><?= $_SESSION['correo'] ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right me-lg-3">
                        <a class="dropdown-item d-flex align-items-center" href="profile.html">Editar Perfil <i class="fa fa-user-circle fa-fw ms-auto text-dark text-opacity-50"></i></a>

                        <a class="dropdown-item d-flex align-items-center" href="<?= BASE_URL ?>logout">Salir <i class="fa fa-toggle-off fa-fw ms-auto text-dark text-opacity-50"></i></a>
                    </div>
                </div>
            </div>
            <!-- END menu -->
        </div>
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        <div id="sidebar" class="app-sidebar">
            <!-- BEGIN scrollbar -->
            <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
                <!-- BEGIN menu -->
                <div class="menu">
                    <div class="menu-header">Inicio</div>
                    <div class="menu-item">
                        <a href="<?= BASE_URL ?>dashboard" class="menu-link">
                            <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </div>

                    <div class="menu-divider"></div>
                    <div class="menu-header">Calendario</div>
                    <div class="menu-item">
                        <a href="<?=BASE_URL?>calendario" class="menu-link">

                            <span class="menu-icon"><i class="fa fa-calendar-alt"></i></span>
                            <span class="menu-text">Calendario de Citas</span>

                        </a>
                    </div>

                    <div class="menu-divider"></div>
                    <div class="menu-header">Propietarios</div>
                    <div class="menu-item">
                        <a href="<?= BASE_URL ?>propietarios" class="menu-link">

                            <span class="menu-icon"><i class="fa fa-user"></i></span>
                            <span class="menu-text">Los Propietarios </span>
                            <span class="menu-caret"><b class="caret" style="transform: rotate(270deg); display:inline-block;"></b></span>
                        </a>
                    </div>

                    <div class="menu-divider"></div>
                    <div class="menu-header">Historial de Pacientes</div>
                    <div class="menu-item">
                        <a href="<?= BASE_URL ?>mascotas" class="menu-link">

                            <span class="menu-icon"><i class="fa fa-paw"></i></span>
                            <span class="menu-text">Mascotas </span>
                            <span class="menu-caret"><b class="caret" style="transform: rotate(270deg); display:inline-block;"></b></span>
                        </a>
                    </div>

                    <div class="menu-divider"></div>
                    <div class="menu-header">Historial de Servicios</div>
                    <div class="menu-item">
                        <a href="<?= BASE_URL ?>servicios" class="menu-link">

                            <span class="menu-icon"><i class="fa fa-medkit"></i></span>
                            <span class="menu-text">Mis Servicios </span>
                            <span class="menu-caret"><b class="caret" style="transform: rotate(270deg); display:inline-block;"></b></span>
                        </a>
                    </div>

                    <div class="menu-divider"></div>
                    <div class="menu-divider"></div>
                    <div class="menu-divider"></div>
                    <div class="menu-item">
                        <a href="#" class="menu-link">

                            <span class="menu-icon"><i class="fa fa-user-md"></i></span>
                            <span class="menu-text">Veterinarios</span>
                            <span class="menu-caret"><b class="caret" style="transform: rotate(270deg); display:inline-block;"></b></span>
                        </a>
                    </div>




                </div>
                <!-- END menu -->
            </div>
            <!-- END scrollbar -->

            <!-- BEGIN mobile-sidebar-backdrop -->
            <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
            <!-- END mobile-sidebar-backdrop -->
        </div>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Biblioteca municipal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="<?php echo BASE_URL;?>assets/icons/book.ico" />
    <script src="<?php echo BASE_URL;?>views/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/sweet-alert.css">
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/normalize.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>views/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers mt-3">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Biblioteca municipal
            </div>
            <div class="full-reset" style="background-color:#2d3945; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="<?php echo BASE_URL;?>assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Municipalidad distrital de Luricocha</p>
            </div>
            <div class="full-reset nav-lateral-list-menu" style="background-color:#2d3945;">
                <ul class="list-unstyled">
                    <li><a href="<?php echo BASE_URL;?>inicio"><i class="bi bi-house-fill"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="bi bi-person-plus-fill"></i>&nbsp;&nbsp; Registro de usuarios </div>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo BASE_URL;?>admin"><i class="bi bi-person-fill"></i>&nbsp;&nbsp; Nuevo administrador</a></li>
                            <li><a href="<?php echo BASE_URL;?>lector"><i class="bi bi-person-badge-fill"></i>&nbsp;&nbsp; Nuevo lector</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="bi bi-clipboard-fill"></i>&nbsp;&nbsp; Libros y catálogo </div>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo BASE_URL;?>categoria"><i class="bi bi-bookmark-plus-fill"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                            <li><a href="<?php echo BASE_URL;?>libro"><i class="bi bi-book-fill"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                            <li><a href="<?php echo BASE_URL;?>catalogo"><i class="bi bi-journals"></i>&nbsp;&nbsp; Catálogo</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="bi bi-arrow-clockwise"></i>&nbsp;&nbsp; Préstamos y reservaciones </div>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo BASE_URL;?>loan.html"><i class="bi bi-card-list"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                            <li>
                                <a href="<?php echo BASE_URL;?>loanpending.html"><i class="bi bi-calendar-week-fill"></i>&nbsp;&nbsp; Devoluciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL;?>reportes"><i class="bi bi-graph-up"></i>&nbsp;&nbsp; Reportes</a></li>
                    <li><a href="<?php echo BASE_URL;?>configuracion-avanzada"><i class="bi bi-gear-fill"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                <i class="bi bi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                <i class="bi bi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                <i class="bi bi-question-lg"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                <i class="bi bi-list"></i>
                </li>
            </ul>
        </nav>
        </nav>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Si requiere ayuda con alguna de las funciones comuniquese con el servicio tecnico +51 983 *** *** espero haver sido de ayuda.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
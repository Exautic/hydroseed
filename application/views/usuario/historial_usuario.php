<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Plataforma Usuario</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Plataforma web Usuario" />
        <meta name="keywords" content="user,dashboard" />
        <meta name="author" content="Steelcoders" />

        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
        <link href="<?php echo base_url(); ?>assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            td.Hidden {
                visibility: hidden;
            }
        </style>
        <script>
            var base_url = "http://localhost/ProyectoHydroseed/";
        </script>

    </head>

    <?php
    $usuario = $this->session->userdata("usuario");
    ?>

    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="orange lighten-2">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">HISTORIAL</span>
                        </div>
                    </div>
                </nav>
            </header>
            <aside id="chat-sidebar" class="side-nav white">

            </aside>

            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper orange lighten-5">
                    <div class="sidebar-profile center-align">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url(); ?>assets/images/avatars/user-04.jpg" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Usuario <?php echo $usuario[0]->nombre_usuario ?></p>

                                <span><?php echo $usuario[0]->email_usuario ?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a href="<?php echo base_url() ?>cerrar_sesion" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

                        <li ><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>usuario"><i class="material-icons center-align">home</i>Inicio</a></li> 

                        <li ><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>usuario/moduloHerbario"><i class="material-icons center-align">account_balance_wallet</i>Herbario</a></li> 

                        <li ><a href="<?php echo base_url(); ?>usuario/moduloMediciones"><i class="material-icons center-align">account_balance_wallet</i>Mediciones</a></li>

                        <li ><a href="<?php echo base_url(); ?>usuario/moduloHistorial"><i class="material-icons center-align">account_balance_wallet</i>Historial</a></li>
                    </ul>

                    <div class="footer center-align">
                        <p class="copyright">HydroSeed ©</p>
                        <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                    </div>
                </div>
            </aside>
            <main class="mn-inner">

                <div class="row">
                    <div class="card-panel col s12">
                        <h4 class="center-align">Historial de mediciones</h4>
                        </br>
                        <div class="col s4"></div>
                        <div class="center-align col s3">
                            <input type="text" name="buscar_fecha" id="buscar_fecha" class="form-control pull-right" placeholder="Buscar por fecha">
                        </div>
                        <div class="col s1">
                            <button type="submit" id="bt_buscar" name="bt_buscar" class="btn btn-default"><i class="material-icons center-align">search</i></button>
                        </div>
                        <div class="col s4"></div>
                        <table class="bordered">
                            <thead>
                                <tr>
                                    <td class="Hidden">ID</td>
                                    <td>Tipo cultivo</td>
                                    <td>Temperatura Amb</td>
                                    <td>Humedad Amb</td>
                                    <td>Temperatura agua</td>
                                    <td>Hora</td>
                                    <td>Fecha</td>
                                </tr>
                            </thead>
                            <tbody id="historial">

                            </tbody>
                        </table>
                    </div>
                </div>


            </main>
            <!-- Javascripts -->
            <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/materialize/js/materialize.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/chart.js/chart.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.time.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.symbol.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/curvedlines/curvedLines.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/peity/jquery.peity.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/alpha.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

            <script>

            $(".modal-trigger").leanModal();
            $("select").material_select();

            historiallistado();

            function historiallistado() {
                $("#historial").empty();

                var id_usuario = <?php echo json_encode($usuario[0]->id_usuario) ?>;

                $.ajax({
                    url: base_url + 'usuario/listado_historial',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_usuario: id_usuario},
                    success: function (o) {
                        $.each(o, function (i, o) {
                            var fila = "<tr>";
                            fila += "<td class='Hidden'>" + o.id_historial + "</td>";
                            fila += "<td>" + ((o.id_cultivo === "2") ? "Tomate" : "Lechuga") + "</td>";
                            fila += "<td>" + o.temp_ambiente + "</td>";
                            fila += "<td>" + o.hum_ambiente + "</td>";
                            fila += "<td>" + o.temp_disolucion + "</td>";
                            fila += "<td>" + o.hora_medicion + "</td>";
                            fila += "<td>" + o.fecha_medicion + "</td>";
                            fila += "<td> <a id='bt_eliminar_historial' class='btn-floating'><i class='material-icons'>delete</i></a> </td>";
                            fila += "</tr>";
                            $("#historial").append(fila);
                        });
                    },
                    error: function () {
                        Materialize.toast("ERROR 500 JSON", "10000");
                    }
                });
            }

//Eliminar historial

            $("body").on("click", "#bt_eliminar_historial", function () {

                var id_historial = $(this).parent().parent().children()[0];
                id_historial = $(id_historial).text();

                $.ajax({
                    url: base_url + 'usuario/eliminar_historial',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_historial: id_historial},
                    success: function (o) {
                        Materialize.toast(o.mensaje, "10000");
                        historiallistado();
                    },
                    error: function () {
                        Materialize.toast("ERROR 500 JSON", "10000");
                    }
                });

            });

            </script>

    </body>
</html>

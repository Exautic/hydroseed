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

        <script>
            var base_url = "http://localhost/ProyectoHydroseed/";
        </script>

    </head>

    <?php
    $admin = $this->session->userdata("administrador");
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
                <nav class="green lighten-2">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s3 m3">      
                            <span class="chapter-title">USUARIOS</span>
                        </div>
                    </div>
                </nav>
            </header>
            <aside id="chat-sidebar" class="side-nav white">

            </aside>

            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper green lighten-5">
                    <div class="sidebar-profile center-align">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url(); ?>assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Administrador <?php echo $admin[0]->nombre_admin ?></p>
                                <span><?php echo $admin[0]->email_admin ?><i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            <li class="no-padding">
                                <a href="<?php echo base_url() ?>cerrar_sesionAdmin" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Cerrar Sesion</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

                        <li ><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>administrador"><i class="material-icons center-align">home</i>Inicio</a></li> 

                        <li ><a class="waves-effect waves-grey" href="<?php echo base_url(); ?>administrador/moduloHerbario"><i class="material-icons center-align">account_balance_wallet</i>Herbario</a></li> 

                        <li ><a id="link_usuarios" href="<?php echo base_url(); ?>administrador/moduloUsuarios"><i class="material-icons center-align">account_balance_wallet</i>Usuarios</a></li>

                    </ul>

                    <div class="footer center-align">
                        <p class="copyright">HydroSeed ©</p>
                        <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                    </div>
                </div>
            </aside>
            <main class="mn-inner">

                <!-- Vista principal -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <h4 class="center-align">Modulo Usuarios</h4>
                            <a class="waves-effect waves-light btn-floating modal-trigger" 
                               href="#modal1">
                                <i class="material-icons">add</i>
                            </a>
                            </br>
                            <table id="tblUsuarios" class="bordered">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Nombre</td>
                                        <td>Apellido</td>
                                        <td>E-mail</td>
                                        <td>Usuario</td>
                                        <td>Contraseña</td>
                                        <td>Validacion</td>
                                        <td>Accion</td>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- Modales -->

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4 class="center-align">Nuevo usuario</h4>
                        <form method="post">
                            <input type="text" id="nombre_usuario" placeholder="Nombre del usuario">
                            <input type="text" id="apellido_usuario" placeholder="Apellido del usuario">
                            <input type="text" id="email_usuario" placeholder="E-mail del usuario">
                            <input type="text" id="user_usuario" placeholder="Usuario">
                            <input type="password" id="password_usuario" placeholder="Contraseña del usuario">
                            <div class="input-field col s12">
                                <select id="validacion_usuario">
                                    <option value="0">No validado</option>
                                    <option value="1">Validado</option>
                                </select>
                                <label>Estado de validacion</label>
                            </div>
                            <button class="btn" id="bt_insertar_usuario" name="bt_insertar_usuario">Agregar usuario</button>
                        </form>
                    </div>
                </div>

                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4 class="center-align">Editar usuario</h4>
                        <form method="post">
                            <input type="hidden" id="id_usuario_e">
                            <input type="text" id="nombre_usuario_e" placeholder="Nombre del usuario">
                            <input type="text" id="apellido_usuario_e" placeholder="Apellido del usuario">
                            <input type="text" id="email_usuario_e" placeholder="E-mail del usuario">
                            <input type="text" id="user_usuario_e" placeholder="Usuario">
                            <input type="text" id="password_usuario_e" placeholder="Contraseña del usuario">
                            <div class="input-field col s12">
                                <select id="validacion_usuario_e">
                                    <option value="0">No validado</option>
                                    <option value="1">Validado</option>
                                </select>
                                <label>Estado de validacion</label>
                            </div>
                            <button class="btn blue accent-1 " id="bt_editar_usuario" name="bt_editar_usuario">Actualizar</button>
                            <button class="btn red accent-1 " id="bt_eliminar_usuario" name="bt_eliminar_usuario">Eliminar</button>
                        </form>
                    </div>
                </div>

            </main>
            <!-- Javascripts -->
            <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.2.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/dataTables/js/jquery.dataTables.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/dataTables/js/jquery.dataTables.min.js"></script>
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
            <script src="<?php echo base_url(); ?>assets/js/pages/dashboard.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

            <!-- Script -->
            <script>

            $(".modal-trigger").leanModal();
            $("select").material_select();
//
//            usuarioslistado();
//
//            function usuarioslistado() {
//                $("#usuarios").empty();
//                var url = base_url + 'listadoUsuarios';
//                $.getJSON(url, function (result) {
//                    $.each(result, function (i, o) {
//                        var fila = "<tr>";
//                        fila += "<td>" + o.id_usuario + "</td>";
//                        fila += "<td>" + o.nombre_usuario + "</td>";
//                        fila += "<td>" + o.apellido_usuario + "</td>";
//                        fila += "<td>" + o.email_usuario + "</td>";
//                        fila += "<td>" + o.user_usuario + "</td>";
//                        fila += "<td>" + o.password_usuario + "</td>";
//                        fila += "<td>" + ((o.validacion_usuario === "1") ? "Validado" : "No validado") + "</td>";
//                        fila += "<td> <a id='load_modal' class='btn-floating'><i class='material-icons'>edit</i></a> </td>";
//                        fila += "</tr>";
//                        $("#usuarios").append(fila);
//                    });
//                });
//            }

            $('#tblUsuarios').DataTable({

                'paging': false,
                'info': false,
                'filter': true,
                'stateSave': true,
                'ajax': {
                    "url": base_url + 'listadoUsuarios',
                    "type": "POST",
                    dataSrc: ''

                },
                'columns': [
                    {data: 'id_usuario'},
                    {data: 'nombre_usuario'},
                    {data: 'apellido_usuario'},
                    {data: 'email_usuario'},
                    {data: 'user_usuario'},
                    {data: 'password_usuario'},
                    {data: 'validacion_usuario'},
                    {"orderable": true,
                        render: function (data, type, row) {
                            return '<a id="load_modal" class="btn-floating"><i class="material-icons">edit</i></a>';
                        }
                    }
                ],
                "columnDefs": [{
                        "target": [6],
                        "data": "validacion_usuario",
                        "render": function (data, type, row) {
                            if (data === 0) {
                                return "<span class=''>No validado</span>";
                            } else {
                                return "<span class=''>Validado</span>";
                            }
                        }
                    }],
                "order": [[0, "asc"]]
            });
            //Cargar modal para editar y eliminar

            $("body").on("click", "#load_modal", function () {
                var id_usuario = $(this).parent().parent().children()[0];
                var nombre_usuario = $(this).parent().parent().children()[1];
                var apellido_usuario = $(this).parent().parent().children()[2];
                var email_usuario = $(this).parent().parent().children()[3];
                var user_usuario = $(this).parent().parent().children()[4];
                var password_usuario = $(this).parent().parent().children()[5];
                // var validacion_usuario = $(this).parent().parent().children()[6];

                $("#id_usuario_e").val($(id_usuario).text());
                $("#nombre_usuario_e").val($(nombre_usuario).text());
                $("#apellido_usuario_e").val($(apellido_usuario).text());
                $("#email_usuario_e").val($(email_usuario).text());
                $("#user_usuario_e").val($(user_usuario).text());
                $("#password_usuario_e").val($(password_usuario).text());
                $("#modal2").openModal();
            });
            //Boton insertar

            $("#bt_insertar_usuario").on("click", function (e) {
                e.preventDefault();
                var nombre_usuario = $("#nombre_usuario").val();
                var apellido_usuario = $("#apellido_usuario").val();
                var email_usuario = $("#email_usuario").val();
                var user_usuario = $("#user_usuario").val();
                var password_usuario = $("#password_usuario").val();
                var validacion_usuario = $("#validacion_usuario").val();
                $.ajax({
                    url: base_url + 'insertarUsuario',
                    type: 'POST',
                    dataType: 'json',
                    data: {nombre_usuario: nombre_usuario, apellido_usuario: apellido_usuario,
                        email_usuario: email_usuario, user_usuario: user_usuario, password_usuario: password_usuario,
                        validacion_usuario: validacion_usuario},
                    success: function (o) {
                        Materialize.toast(o.mensaje, "10000");
                        $("#modal1").closeModal();
                        location.reload();
                    },
                    error: function () {
                        Materialize.toast("ERROR 500 JSON", "10000");
                    }
                });
            });
            //Boton editar

            $("#bt_editar_usuario").on("click", function (e) {
                e.preventDefault();
                var id_usuario = $("#id_usuario_e").val();
                var nombre_usuario = $("#nombre_usuario_e").val();
                var apellido_usuario = $("#apellido_usuario_e").val();
                var email_usuario = $("#email_usuario_e").val();
                var user_usuario = $("#user_usuario_e").val();
                var validacion_usuario = $("#validacion_usuario_e").val();
                $.ajax({
                    url: base_url + 'editarUsuario',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_usuario: id_usuario, nombre_usuario: nombre_usuario, apellido_usuario: apellido_usuario,
                        email_usuario: email_usuario, user_usuario: user_usuario, validacion_usuario: validacion_usuario},
                    success: function (o) {
                        Materialize.toast(o.mensaje, "10000");
                        $("#modal2").closeModal();
                        location.reload();
                    },
                    error: function () {
                        Materialize.toast("ERROR 500 JSON", "10000");
                    }
                });
            });
            //Boton eliminar

            $("#bt_eliminar_usuario").on("click", function (e) {
                e.preventDefault();
                var id_usuario = $("#id_usuario_e").val();
                $.ajax({
                    url: base_url + 'eliminarUsuario',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_usuario: id_usuario},
                    success: function (o) {
                        Materialize.toast(o.mensaje, "10000");
                        $("#modal2").closeModal();
                        location.reload();
                    },
                    error: function () {
                        Materialize.toast("ERROR 500 JSON", "10000");
                    }
                });
            });

            </script>
    </body>
</html>
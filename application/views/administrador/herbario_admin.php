<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Plataforma Herbario</title>

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
                            <span class="chapter-title">HERBARIO</span>
                        </div>
                    </div>
                </nav>
            </header>
            <aside id="chat-sidebar" class="side-nav white">

            </aside>

            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper green lighten-5">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image center-align">
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
                <div class="row">
                    <div class="card-panel">
                        <h4 class="center-align">Modulo Herbario</h4>
                        <a class="waves-effect waves-light btn-floating modal-trigger" 
                           href="#modal1">
                            <i class="material-icons">add</i>
                        </a>
                        </br>
                        <table id="tblPlantillas" class="bordered">
                            <thead>
                                <tr>
                                    <td>ID</td>
<!--                                    <td>Imagen</td>-->
                                    <td>Nombre</td>
                                    <td>Descripcion</td>
                                    <td>Duracion etapa vegetativa</td>
                                    <td>Temperatura vegetativa</td>
                                    <td>Humedad vegetativa</td>
                                    <td>Duracion etapa flora</td>
                                    <td>Temperatura flora</td>
                                    <td>Humedad flora</td>
                                    <td>Accion</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4 class="center-align">Nueva Plantilla</h4>
                        <div class="row">
                            <form id="form_registrar" class="col s12" method="post">
                                <div class="col s6">
                                    <input type="text" id="nombre_cultivo" name="nombre_cultivo" placeholder="Nombre del cultivo">
                                    <textarea class="materialize-textarea" id="descripcion_cultivo" name="descripcion_cultivo" placeholder="Descripcion del cultivo"></textarea>
                                    <!--                                    <div class="file-field input-field">
                                                                            <div class="btn">
                                                                                <span>Imagen</span>
                                                                                <input type="file" id="imagen" name="imagen">
                                                                            </div>
                                                                            <div>
                                                                                <div class="file-path-wrapper">
                                                                                    <input class="file-path validate" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                </div>
                                <div class="col s6">
                                    <input type="text" id="duracion_veg_cultivo" name="duracion_veg_cultivo" placeholder="Duracion etapa vegetativa">
                                    <input type="text" id="temp_veg_cultivo" name="temp_veg_cultivo" placeholder="Temperatura promedio">
                                    <input type="text" id="hum_veg_cultivo" name="hum_veg_cultivo" placeholder="Humedad promedio">
                                    <input type="text" id="duracion_flora_cultivo" name="duracion_flora_cultivo" placeholder="Duracion etapa flora">
                                    <input type="text" id="temp_flora_cultivo" name="temp_flora_cultivo" placeholder="Temperatura promedio">
                                    <input type="text" id="hum_flora_cultivo" name="hum_flora_cultivo" placeholder="Humedad promedio">

                                </div>
                                <div class="col s12">
                                    <button class="btn" id="bt_insertar_plantilla" name="bt_insertar_plantilla">Agregar plantilla</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4 class="center-align">Editar plantilla</h4>
                        <form method="post">
                            <input type="hidden" id="id_cultivo_e">
                            <input type="text" id="nombre_cultivo_e" placeholder="Nombre del cultivo">
                            <input type="text" id="descripcion_cultivo_e" placeholder="Descripcion del cultivo">
                            <input type="text" id="duracion_veg_cultivo_e" placeholder="Duracion etapa vegetativa">
                            <input type="text" id="temp_veg_cultivo_e" placeholder="Temperatura promedio">
                            <input type="text" id="hum_veg_cultivo_e" placeholder="Humedad promedio">
                            <input type="text" id="duracion_flora_cultivo_e" placeholder="Duracion etapa flora">
                            <input type="text" id="temp_flora_cultivo_e" placeholder="Temperatura promedio">
                            <input type="text" id="hum_flora_cultivo_e" placeholder="Humedad promedio">
                            <!--                            <div class="col s12">
                                                            <div class="file-field input-field">
                                                                <div class="btn">
                                                                    <span>Imagen</span>
                                                                    <input type="file" id="file_nuevo_e" name="file_e">
                                                                </div>
                                                                <div>
                                                                    <div class="file-path-wrapper">
                                                                        <input class="file-path validate" type="text">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <button class="btn blue accent-1 " id="bt_editar_plantilla" name="bt_editar_plantilla">Actualizar</button>
                            <button class="btn red accent-1 " id="bt_eliminar_plantilla" name="bt_eliminar_plantilla">Eliminar</button>
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
<!--            <script src="<?php echo base_url(); ?>assets/js/pages/dashboard.js"></script>-->
            <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

            <!-- Script -->
            <script>

            $(".modal-trigger").leanModal();
            $("select").material_select();

//            plantillaslistado();
//
//            function plantillaslistado() {
//                $("#plantillas").empty();
//                var url = base_url + 'listadoPlantillas';
//                $.getJSON(url, function (result) {
//                    $.each(result, function (i, o) {
//                        var fila = "<tr>";
//                        fila += "<td>" + o.id_cultivo + "</td>";
//                        fila += "<td>" + o.img_cultivo +"</td>";
//                        fila += "<td>" + o.nombre_cultivo + "</td>";
//                        fila += "<td>" + o.descripcion_cultivo + "</td>";
//                        fila += "<td>" + o.duracion_veg_cultivo + "</td>";
//                        fila += "<td>" + o.temp_veg_cultivo + "</td>";
//                        fila += "<td>" + o.hum_veg_cultivo + "</td>";
//                        fila += "<td>" + o.duracion_flora_cultivo + "</td>";
//                        fila += "<td>" + o.temp_flora_cultivo + "</td>";
//                        fila += "<td>" + o.hum_flora_cultivo + "</td>";
//                        fila += "<td> <a id='load_modal' class='btn-floating'><i class='material-icons'>edit</i></a> </td>";
//                        fila += "</tr>";
//                        $("#plantillas").append(fila);
//                    });
//                });
//            }

            $('#tblPlantillas').DataTable({

                'paging': false,
                'info': false,
                'filter': true,
                'stateSave': true,
                'ajax': {
                    "url": base_url + 'listadoPlantillas',
                    "type": "POST",
                    dataSrc: ''

                },
                'columns': [
                    {data: 'id_cultivo'},
                    {data: 'nombre_cultivo'},
                    {data: 'descripcion_cultivo'},
                    {data: 'duracion_veg_cultivo'},
                    {data: 'temp_veg_cultivo'},
                    {data: 'hum_veg_cultivo'},
                    {data: 'duracion_flora_cultivo'},
                    {data: 'temp_flora_cultivo'},
                    {data: 'hum_flora_cultivo'},
                    {"orderable": true,
                        render: function (data, type, row) {
                            return '<a id="load_modal" class="btn-floating"><i class="material-icons">edit</i></a>';
                        }
                    }
                ],
                "order": [[0, "asc"]]
            });


//Cargar modal para editar y eliminar

            $("body").on("click", "#load_modal", function () {
                var id_cultivo = $(this).parent().parent().children()[0];
//                var img_cultivo = $(this).parent().parent().children()[1];
                var nombre_cultivo = $(this).parent().parent().children()[1];
                var descripcion_cultivo = $(this).parent().parent().children()[2];
                var duracion_veg_cultivo = $(this).parent().parent().children()[3];
                var temp_veg_cultivo = $(this).parent().parent().children()[4];
                var hum_veg_cultivo = $(this).parent().parent().children()[5];
                var duracion_flora_cultivo = $(this).parent().parent().children()[6];
                var temp_flora_cultivo = $(this).parent().parent().children()[7];
                var hum_flora_cultivo = $(this).parent().parent().children()[8];

                $("#id_cultivo_e").val($(id_cultivo).text());
//                $("#img_cultivo_e").val($(img_cultivo).text());
                $("#nombre_cultivo_e").val($(nombre_cultivo).text());
                $("#descripcion_cultivo_e").val($(descripcion_cultivo).text());
                $("#duracion_veg_cultivo_e").val($(duracion_veg_cultivo).text());
                $("#temp_veg_cultivo_e").val($(temp_veg_cultivo).text());
                $("#hum_veg_cultivo_e").val($(hum_veg_cultivo).text());
                $("#duracion_flora_cultivo_e").val($(duracion_flora_cultivo).text());
                $("#temp_flora_cultivo_e").val($(temp_flora_cultivo).text());
                $("#hum_flora_cultivo_e").val($(hum_flora_cultivo).text());

                $("#modal2").openModal();

            });

//Boton insertar

            $("#bt_insertar_plantilla").click(function (e) {
                e.preventDefault();
                var form = $("#form_registrar")[0];
                var data = new FormData(form);
                $.ajax({
                    url: base_url + 'insertarPlantilla',
                    type: 'POST',
                    dataType: 'json',
                    data: data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
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

            $("#bt_editar_plantilla").on("click", function (e) {
                e.preventDefault();
                var id_cultivo = $("#id_cultivo_e").val();
                var nombre_cultivo = $("#nombre_cultivo_e").val();
                var descripcion_cultivo = $("#descripcion_cultivo_e").val();
                var duracion_veg_cultivo = $("#duracion_veg_cultivo_e").val();
                var temp_veg_cultivo = $("#temp_veg_cultivo_e").val();
                var hum_veg_cultivo = $("#hum_veg_cultivo_e").val();
                var duracion_flora_cultivo = $("#duracion_flora_cultivo_e").val();
                var temp_flora_cultivo = $("#temp_flora_cultivo_e").val();
                var hum_flora_cultivo = $("#hum_flora_cultivo_e").val();

                $.ajax({
                    url: base_url + 'editarPlantilla',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_cultivo: id_cultivo, nombre_cultivo: nombre_cultivo, descripcion_cultivo: descripcion_cultivo,
                        duracion_veg_cultivo: duracion_veg_cultivo, temp_veg_cultivo: temp_veg_cultivo, hum_veg_cultivo: hum_veg_cultivo,
                        duracion_flora_cultivo: duracion_flora_cultivo, temp_flora_cultivo: temp_flora_cultivo, hum_flora_cultivo: hum_flora_cultivo},
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

            $("#bt_eliminar_plantilla").on("click", function (e) {
                e.preventDefault();
                var id_cultivo = $("#id_cultivo_e").val();

                $.ajax({
                    url: base_url + 'eliminarPlantilla',
                    type: 'POST',
                    dataType: 'json',
                    data: {id_cultivo: id_cultivo},
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
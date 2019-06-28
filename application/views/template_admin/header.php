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
                            <span class="chapter-title">Administrador</span>
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
                            <img src="<?php echo base_url();?>assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?php echo $admin[0]->nombre_admin ?></p>
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
            
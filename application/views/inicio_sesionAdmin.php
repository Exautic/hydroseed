<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <body class="signin-page">
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
                <div class="spinner-layer spinner-red">
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
        <div class="mn-content valign-wrapper">
            <main class="mn-inner container">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title center-align">ADMINISTRACION</span>
                                       <div class="row">
                                           <form class="col s12">
                                               <div class="input-field col s2">
                                                   <i class="material-icons center-align">account_box</i>
                                               </div>
                                               <div class="input-field col s10">
                                                   <input id="user_admin" type="text" class="validate">
                                                   <label for="user_admin">Administrador</label>
                                               </div>
                                               <div class="input-field col s2">
                                                   <i class="material-icons center-align">https</i>
                                               </div>
                                               <div class="input-field col s10">
                                                   <input id="contraseña_admin" type="password" class="validate">
                                                   <label for="contraseña_admin">Contraseña</label>
                                               </div>
                                               <div class="col s12 center-align m-t-sm">
                                                   <button type="submit" id="bt_sesionAdmin" class="waves-effect waves-light btn teal">Ingresar</button>
                                               </div>
                                               <div class="col s12 center-align m-t-sm">
                                                   <a href="<?php echo base_url();?>home" class="waves-effect waves-grey btn-flat">Volver</a>
                                               </div>
                                           </form>
                                      </div>
                                  </div> 
                              </div>
                          </div>
                    </div>
                </div>
            </main>
        </div>
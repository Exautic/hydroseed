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
                                      <span class="card-title">Iniciar sesion</span>
                                       <div class="row">
                                           <form class="col s12">
                                               <div class="input-field col s12">
                                                   <input id="user_usuario" type="text" class="validate">
                                                   <label for="user_usuario">Usuario</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password_usuario" type="password" class="validate">
                                                   <label for="password_usuario">Contraseña</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <a href="<?php echo base_url();?>home" class="waves-effect waves-grey btn-flat">Volver</a>
                                                   <button type="submit" id="bt_sesion" class="waves-effect waves-light btn teal">Ingresar</button>
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
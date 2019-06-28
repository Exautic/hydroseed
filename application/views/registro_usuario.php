    <body class="signup-page">
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
            <main class="mn-inner container ">
                <div class="valign">
                      <div class="row">
                          <div class="col s12 m6 l4 offset-l4 offset-m3">
                              <div class="card white darken-1">
                                  <div class="card-content ">
                                      <span class="card-title">Registrarse</span>
                                       <div class="row">
                                           <form id="form_registro" class="col s12">
                                               <div class="input-field col s12">
                                                   <input id="nombre_usuario" name="nombre_usuario" type="text" class="validate">
                                                   <label for="nombre_usuario">Nombre</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="apellido_usuario" name="apellido_usuario" type="text" class="validate">
                                                   <label for="apellido_usuario">Apellido</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="email_usuario" name="email_usuario" type="email" class="validate">
                                                   <label for="email_usuario">E-mail</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="user_usuario" name="user_usuario" type="text" class="validate">
                                                   <label for="user_usuario">Usuario</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password_usuario" name="password_usuario" type="password" class="validate">
                                                   <label for="password_usuario">Contraseña</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="repetir_contraseña" name="repetir_contraseña" type="password" class="validate">
                                                   <label for="repetir_contraseña">Confirmar contraseña</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                   <a href="<?php echo base_url();?>sesion" class="waves-effect waves-grey btn-flat">Iniciar sesion</a>
                                                   <button type="submit" id="bt_registro" class="waves-effect waves-light btn teal">Registrarse</button>
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
        
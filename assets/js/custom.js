$(document).ready(function () {
    var base_url = "http://localhost/ProyectoHydroseed/";

    //Funcion sesion usuario

    $("#bt_sesion").click(function (e) {
        e.preventDefault();
        var user_usuario = $("#user_usuario").val();
        var password_usuario = $("#password_usuario").val();

        $.ajax({
            url: base_url + 'welcome/inicio_sesion',
            type: 'POST',
            dataType: 'json',
            data: {user_usuario: user_usuario, password_usuario: password_usuario},
            success: function (o) {
                if (o.mensaje === "0") {

                    Materialize.toast("Usuario no encontrado.", "10000");
                } else {

                    if (o.mensaje === "validar") {
                        Materialize.toast("Usuario no validado, contacte con un administrador.", "10000");
                    } else {

                        window.location.href = base_url + o.mensaje;
                    }
                }
            },
            error: function () {
                Materialize.toast("ERROR 500 JSON", "10000");
            }
        });

    });

    //Funcion sesion admin

    $("#bt_sesionAdmin").click(function (e) {
        e.preventDefault();
        var user_admin = $("#user_admin").val();
        var contraseña_admin = $("#contraseña_admin").val();

        $.ajax({
            url: base_url + 'welcome/inicio_sesionAdmin',
            type: 'POST',
            dataType: 'json',
            data: {user_admin: user_admin, contraseña_admin: contraseña_admin},
            success: function (o) {
                if (o.mensaje === "0") {
                    Materialize.toast("Administrador no encontrado, verifique la informacion.", "10000");
                } else {
                    window.location.href = base_url + o.mensaje;
                }
            },
            error: function () {
                Materialize.toast("ERROR 500 JSON", "10000");
            }
        });

    });

    //Funcion registro

    $("#bt_registro").click(function (e) {
        e.preventDefault();

        var nombre_usuario = $("#nombre_usuario").val();
        var apellido_usuario = $("#apellido_usuario").val();
        var email_usuario = $("#email_usuario").val();
        var user_usuario = $("#user_usuario").val();
        var password_usuario = $("#password_usuario").val();
        var repetir_contraseña = $("#repetir_contraseña").val();

        $.ajax({
            url: base_url + 'registrar',
            type: 'POST',
            dataType: 'json',
            data: {nombre_usuario: nombre_usuario, apellido_usuario: apellido_usuario,
                email_usuario: email_usuario, user_usuario: user_usuario, password_usuario: password_usuario,
                repetir_contraseña: repetir_contraseña},
            success: function (o) {

                Materialize.toast(o.mensaje, "10000");
                window.location.href = base_url + 'sesion';

            },
            error: function () {
                Materialize.toast("ERROR 500 JSON", "6000");
            }
        });

    });
    
//     $("#bt_insertar_usuario").click(function (e) {
//         
//        e.preventDefault();
//        var nombre_usuario = $("#nombre_usuario").val();
//        var apellido_usuario = $("#apellido_usuario").val();
//        var email_usuario = $("#email_usuario").val();
//        var user_usuario = $("#user_usuario").val();
//        var password_usuario = $("#password_usuario").val();
//        var validacion_usuario = $("validacion_usuario").val();
//
//        $.ajax({
//            url: base_url + 'insertarUsuario',
//            type: 'POST',
//            dataType: 'json',
//            data: {nombre_usuario: nombre_usuario, apellido_usuario: apellido_usuario,
//                email_usuario: email_usuario, user_usuario: user_usuario, password_usuario: password_usuario,
//                validacion_usuario: validacion_usuario},
//            success: function (o) {
//
//                Materialize.toast(o.mensaje, "10000");
//                window.location.href = base_url + 'sesion';
//
//            },
//            error: function () {
//                Materialize.toast("ERROR 500 JSON", "6000");
//            }
//        });
//
//    });


});

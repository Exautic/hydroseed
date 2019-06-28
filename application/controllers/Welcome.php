<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("sesion_model");
        $this->load->model("usuario_model");
    }

    //Redireccionamiento a vistas

    public function index() {
        $this->load->view('home');
    }
    
    public function contacto() {
        $this->load->view('contacto');
    }
    
    
    public function sesionUsuario() {
        $this->load->view('template_sesion/header');
        $this->load->view('inicio_sesion');
        $this->load->view('template_sesion/footer');
    }

    public function sesionAdmin() {
        $this->load->view('template_sesion/header');
        $this->load->view('inicio_sesionAdmin');
        $this->load->view('template_sesion/footer');
    }

    public function registro() {
        $this->load->view('template_registro/header');
        $this->load->view('registro_usuario');
        $this->load->view('template_registro/footer');
    }

    //Funciones de captura de datos
    //Manejo de sesion

    public function inicio_sesion() {
        $user_usuario = $this->input->POST('user_usuario');
        $password_usuario = $this->input->POST('password_usuario');
        $arrayUser = $this->sesion_model->login($user_usuario, md5($password_usuario));
        if (count($arrayUser) > 0) {
            if ($arrayUser[0]->validacion_usuario == 0) {
                echo json_encode(array("mensaje" => "validar"));
            } else {
                $this->session->set_userdata("usuario", $arrayUser);
                echo json_encode(array("mensaje" => "usuario"));
            }
        } else {
            echo json_encode(array("mensaje" => "0"));
        }
    }

    public function inicio_sesionAdmin() {
        $user_admin = $this->input->POST('user_admin');
        $contraseña_admin = $this->input->POST('contraseña_admin');
        $arrayUser = $this->sesion_model->loginAdmin($user_admin, md5($contraseña_admin));
        if ($this->sesion_model->loginAdmin($user_admin, md5($contraseña_admin))) {
            $this->session->set_userdata("administrador", $arrayUser);
            echo json_encode(array("mensaje" => "administrador"));
        } else {
            echo json_encode(array("mensaje" => "0"));
        }
    }

    public function cerrar_sesion() {
        $this->session->sess_destroy();
        redirect('sesion');
    }
    
    public function cerrar_sesionAdmin() {
        $this->session->sess_destroy();
        redirect('sesionAdmin');
    }

    //Registro de usuario

    public function registrar_usuario() {
        $nombre_usuario = $this->input->post("nombre_usuario");
        $apellido_usuario = $this->input->post("apellido_usuario");
        $email_usuario = $this->input->post("email_usuario");
        $user_usuario = $this->input->post("user_usuario");
        $password_usuario = $this->input->post("password_usuario");
        $repetir_contraseña = $this->input->post("repetir_contraseña");
        if ($password_usuario != $repetir_contraseña) {
            echo json_encode(array("mensaje" => "Las contraseñas no coinciden, intentelo de nuevo."));
        }
        if ($nombre_usuario == "" or $apellido_usuario == "" or $email_usuario == "" or
                $user_usuario == "" or $password_usuario == "") {
            echo json_encode(array("mensaje" => "Falta informacion necesaria."));
        } else {
            if ($this->usuario_model->registrar_usuario($nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, md5($password_usuario))) {
                echo json_encode(array("mensaje" => "Registro completado."));
            } else {
                echo json_encode(array("mensaje" => "Error registrando al usuario, intentelo de nuevo."));
            }
        }
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("admin_model");
    }

    public function index() {
        if ($this->session->userdata("administrador")) {
            $this->load->view("template_admin/header");
            $this->load->view('administrador/home_admin');
            $this->load->view("template_admin/footer");
        } else {
            redirect('sesionAdmin');
        }
    }

    public function moduloUsuarios() {
        if ($this->session->userdata('administrador')) {
            $this->load->view('administrador/usuarios_admin');
        } else {
            redirect("sesionAdmin");
        }
    }

    public function moduloHerbario() {
        if ($this->session->userdata('administrador')) {
            $this->load->view('administrador/herbario_admin');
        } else {
            redirect("sesionAdmin");
        }
    }

    //CRUD Usuarios
    //insertar usuario

    public function insertar_usuario() {
        $nombre_usuario = $this->input->post("nombre_usuario");
        $apellido_usuario = $this->input->post("apellido_usuario");
        $email_usuario = $this->input->post("email_usuario");
        $user_usuario = $this->input->post("user_usuario");
        $password_usuario = $this->input->post("password_usuario");
        $validacion_usuario = $this->input->post("validacion_usuario");

        $this->admin_model->insertar_usuario($nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, md5($password_usuario), $validacion_usuario);

        echo json_encode(array("mensaje" => "Usuario creado"));
    }

    //editar usuario

    public function editar_usuario() {
        $id_usuario = $this->input->post("id_usuario");
        $nombre_usuario = $this->input->post("nombre_usuario");
        $apellido_usuario = $this->input->post("apellido_usuario");
        $email_usuario = $this->input->post("email_usuario");
        $user_usuario = $this->input->post("user_usuario");
        $validacion_usuario = $this->input->post("validacion_usuario");

        $this->admin_model->editar_usuario($id_usuario, $nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, $validacion_usuario);

        echo json_encode(array("mensaje" => "Usuario modificado"));
    }

    //eliminar usuario

    public function eliminar_usuario() {
        $id_usuario = $this->input->post("id_usuario");

        $this->admin_model->eliminar_usuario($id_usuario);

        echo json_encode(array("mensaje" => "Usuario eliminado"));
    }

    //listado usuario

    public function listado_usuarios() {
        echo json_encode($this->admin_model->listado_usuarios());
    }

    //CRUD Usuarios
    //insertar usuario
//    public function insertar_plantilla() {
//        $nombre_cultivo = $this->input->post("nombre_cultivo");
//        $descripcion_cultivo = $this->input->post("descripcion_cultivo");
//        $duracion_veg_cultivo = $this->input->post("duracion_veg_cultivo");
//        $temp_veg_cultivo = $this->input->post("temp_veg_cultivo");
//        $hum_veg_cultivo = $this->input->post("hum_veg_cultivo");
//        $duracion_flora_cultivo = $this->input->post("duracion_flora_cultivo");
//        $temp_flora_cultivo = $this->input->post("temp_flora_cultivo");
//        $hum_flora_cultivo = $this->input->post("hum_flora_cultivo");
//
//        $path = $_FILES["imagen"]["tmp_name"];
//
//        if (is_uploaded_file($path) && !empty($_FILES)) {
//            $img_cultivo = file_get_contents($path);
//            if ($this->admin_model->insertar_plantilla($nombre_cultivo, $descripcion_cultivo, $duracion_veg_cultivo, $temp_veg_cultivo, $hum_veg_cultivo, $duracion_flora_cultivo, $temp_flora_cultivo, $hum_flora_cultivo, $img_cultivo)) {
//                echo json_encode(array("mensaje" => "Plantilla ingresada"));
//            } else {
//                echo json_encode(array("mensaje" => "Error al ingresar plantilla"));
//            }
//        } else {
//            echo json_encode(array("mensaje" => "Error de archivo"));
//        }
//    }

    public function insertar_plantilla() {
        $nombre_cultivo = $this->input->post("nombre_cultivo");
        $descripcion_cultivo = $this->input->post("descripcion_cultivo");
        $duracion_veg_cultivo = $this->input->post("duracion_veg_cultivo");
        $temp_veg_cultivo = $this->input->post("temp_veg_cultivo");
        $hum_veg_cultivo = $this->input->post("hum_veg_cultivo");
        $duracion_flora_cultivo = $this->input->post("duracion_flora_cultivo");
        $temp_flora_cultivo = $this->input->post("temp_flora_cultivo");
        $hum_flora_cultivo = $this->input->post("hum_flora_cultivo");


        if ($this->admin_model->insertar_plantilla($nombre_cultivo, $descripcion_cultivo, $duracion_veg_cultivo, $temp_veg_cultivo, $hum_veg_cultivo, $duracion_flora_cultivo, $temp_flora_cultivo, $hum_flora_cultivo)) {
            echo json_encode(array("mensaje" => "Plantilla ingresada"));
        } else {
            echo json_encode(array("mensaje" => "Error al ingresar plantilla"));
        }
    }

    //editar usuario

    public function editar_plantilla() {
        $id_cultivo = $this->input->post("id_cultivo");
        $nombre_cultivo = $this->input->post("nombre_cultivo");
        $descripcion_cultivo = $this->input->post("descripcion_cultivo");
        $duracion_veg_cultivo = $this->input->post("duracion_veg_cultivo");
        $temp_veg_cultivo = $this->input->post("temp_veg_cultivo");
        $hum_veg_cultivo = $this->input->post("hum_veg_cultivo");
        $duracion_flora_cultivo = $this->input->post("duracion_flora_cultivo");
        $temp_flora_cultivo = $this->input->post("temp_flora_cultivo");
        $hum_flora_cultivo = $this->input->post("hum_flora_cultivo");
//        $path = $_FILES["file"]["tmp_name"];
//        if (is_uploaded_file($path) && !empty($_FILES)) {
//            $img = file_get_contents($path);
        if ($this->admin_model->editar_plantilla($id_cultivo, $nombre_cultivo, $descripcion_cultivo, $duracion_veg_cultivo, $temp_veg_cultivo, $hum_veg_cultivo, $duracion_flora_cultivo, $temp_flora_cultivo, $hum_flora_cultivo)) {
            echo json_encode(array("mensaje" => "Plantilla editada"));
        } else {
            echo json_encode(array("mensaje" => "Error al editar plantilla"));
        }
//        } else {
//            echo json_encode(array("mensaje" => "Error de archivo"));
//        }
    }

    //eliminar usuario

    public function eliminar_plantilla() {
        $id_cultivo = $this->input->post("id_cultivo");

        $this->admin_model->eliminar_plantilla($id_cultivo);

        echo json_encode(array("mensaje" => "Plantilla eliminada"));
    }

    //listado usuario

    public function listado_plantillas() {
        echo json_encode($this->admin_model->listado_plantillas());
    }

}

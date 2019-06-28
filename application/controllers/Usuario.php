<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model");
    }

    public function index() {
        if ($this->session->userdata("usuario")) {
            $this->load->view("template_usuario/header");
            $this->load->view("usuario/home_usuario");
            $this->load->view("template_usuario/footer");
        } else {
            redirect('sesion');
        }
    }

    public function moduloHerbario() {
        if ($this->session->userdata("usuario")) {
            $this->load->view("usuario/herbario_usuario");
        } else {
            redirect('sesion');
        }
    }

    public function moduloMediciones() {
        if ($this->session->userdata("usuario")) {
            $this->load->view("usuario/mediciones_usuario");
        } else {
            redirect('sesion');
        }
    }

    public function moduloHistorial() {
        if ($this->session->userdata("usuario")) {
            $this->load->view("usuario/historial_usuario");
        } else {
            redirect('sesion');
        }
    }

    public function buscar_plantilla() {

        $id_cultivo = $this->input->POST('id_cultivo');

        echo json_encode($this->usuario_model->buscar_plantilla($id_cultivo));
    }

    public function elegir_plantilla() {

        $id_plantilla = $this->input->POST('id_plantilla');
        $id_usuario = $this->input->POST('id_usuario');
        if ($id_usuario === 0) {
            echo json_encode(array("mensaje" => "Error ID"));
        }
        if ($this->usuario_model->elegir_plantilla_usuario($id_plantilla, $id_usuario)) {
            echo json_encode(array("mensaje" => "Plantilla elegida"));
        } else {
            echo json_encode(array("mensaje" => "Error al elegir plantilla"));
        }
    }

    public function listado_historial() {
        $id_usuario = $this->input->POST('id_usuario');
        echo json_encode($this->usuario_model->listado_historial($id_usuario));
    }

    public function eliminar_historial() {

        $id_historial = $this->input->POST('id_historial');

        if ($id_historial === 0) {
            echo json_encode(array("mensaje" => "Error ID"));
        }
        if ($this->usuario_model->eliminar_historial($id_historial)) {
            echo json_encode(array("mensaje" => "Historial eliminado"));
        } else {
            echo json_encode(array("mensaje" => "Error al eliminar historial"));
        }
    }

}

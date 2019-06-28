<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    //Modulo Usuarios

    public function insertar_usuario($nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, $password_usuario, $validacion_usuario) {

        $data = array("nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "password_usuario" => $password_usuario,
            "validacion_usuario" => $validacion_usuario);
        return $this->db->insert("usuario", $data);
    }

    public function editar_usuario($id_usuario, $nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, $validacion_usuario) {

        $this->db->where("id_usuario", $id_usuario);
        $data = array("nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "validacion_usuario" => $validacion_usuario);
        return $this->db->update("usuario", $data);
    }

    public function eliminar_usuario($id_usuario) {

        $this->db->where("id_usuario", $id_usuario);
        return $this->db->delete("usuario");
    }

    public function listado_usuarios() {
        return $this->db->get("usuario")->result();
    }

    //Modulo herbario

    public function insertar_plantilla($nombre_cultivo, $descripcion_cultivo, $duracion_veg_cultivo, $temp_veg_cultivo, $hum_veg_cultivo, $duracion_flora_cultivo, $temp_flora_cultivo, $hum_flora_cultivo) {

        $data = array(
            "nombre_cultivo" => $nombre_cultivo,
            "descripcion_cultivo" => $descripcion_cultivo,
            "duracion_veg_cultivo" => $duracion_veg_cultivo,
            "temp_veg_cultivo" => $temp_veg_cultivo,
            "hum_veg_cultivo" => $hum_veg_cultivo,
            "duracion_flora_cultivo" => $duracion_flora_cultivo,
            "temp_flora_cultivo" => $temp_flora_cultivo,
            "hum_flora_cultivo" => $hum_flora_cultivo);
        return $this->db->insert("herbario", $data);
    }

    public function editar_plantilla($id_cultivo, $nombre_cultivo, $descripcion_cultivo, $duracion_veg_cultivo, $temp_veg_cultivo, $hum_veg_cultivo, $duracion_flora_cultivo, $temp_flora_cultivo, $hum_flora_cultivo) {

        $this->db->where("id_cultivo", $id_cultivo);
        $data = array(
            "nombre_cultivo" => $nombre_cultivo,
            "descripcion_cultivo" => $descripcion_cultivo,
            "duracion_veg_cultivo" => $duracion_veg_cultivo,
            "temp_veg_cultivo" => $temp_veg_cultivo,
            "hum_veg_cultivo" => $hum_veg_cultivo,
            "duracion_flora_cultivo" => $duracion_flora_cultivo,
            "temp_flora_cultivo" => $temp_flora_cultivo,
            "hum_flora_cultivo" => $hum_flora_cultivo);
        return $this->db->update("herbario", $data);
    }

    public function eliminar_plantilla($id_cultivo) {

        $this->db->where("id_cultivo", $id_cultivo);
        return $this->db->delete("herbario");
    }

    public function listado_plantillas() {
        return $this->db->get("herbario")->result();
    }

}

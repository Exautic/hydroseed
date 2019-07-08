<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {

    public function registrar_usuario($nombre_usuario, $apellido_usuario, $email_usuario, $user_usuario, $password_usuario) {

        $data = array("nombre_usuario" => $nombre_usuario,
            "apellido_usuario" => $apellido_usuario,
            "email_usuario" => $email_usuario,
            "user_usuario" => $user_usuario,
            "password_usuario" => $password_usuario,
            "validacion_usuario" => 0);
        return $this->db->insert("usuario", $data);
    }

    public function buscar_plantilla($id_cultivo) {

        $this->db->where("id_cultivo", $id_cultivo);
        return $this->db->get("herbario")->result();
    }

    public function elegir_plantilla_usuario($id_plantilla, $id_usuario) {

        $this->db->where("id_usuario", $id_usuario);
        $data = array("id_plantilla" => $id_plantilla);
        return $this->db->update("usuario", $data);
    }
    
      public function listado_historial($id_usuario) {
        $this->db->where("id_usuario", $id_usuario);
        return $this->db->get("historial_mediciones")->result();
    }
    
    
    
    public function eliminar_historial($id_historial) {

        $this->db->where("id_historial", $id_historial);
        return $this->db->delete("historial_mediciones");
        
    }

    
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class sesion_model extends CI_Model {

    public function login($user_usuario, $password_usuario) {

        $this->db->where("user_usuario", $user_usuario);
        $this->db->where("password_usuario", $password_usuario);
        return $this->db->get("usuario")->result();
    }
    
    public function loginAdmin($user_admin, $contraseña_admin) {

        $this->db->where("user_admin", $user_admin);
        $this->db->where("contraseña_admin", $contraseña_admin);
        return $this->db->get("administrador")->result();
    }
    

   

}

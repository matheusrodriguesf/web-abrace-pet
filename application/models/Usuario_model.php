<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario_model extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'RESPONSAVEL_ANIMAL';
    }

    function ChecaUsuarioAnimal($id) {
        $usuario = $this->session->userdata("usuario_logado");
        if(is_null($id))
            return false;
        $this->db->where('IDANIMAL', $id);
        $this->db->where("IDRESPONSAVEL", $usuario['IDRESPONSAVEL']);
        $query = $this->db->get('ANIMAL');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

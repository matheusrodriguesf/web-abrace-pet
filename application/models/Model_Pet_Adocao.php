<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Pet_Adocao extends MY_Model {

	function __construct() {
		parent:: __construct();
		$this->table = 'ANIMAL';
	}

	# Funcao para remover um registro
	function Delete($id) {
        if (is_null($id))
            return false;
        $this->db->where('idanimal', $id);
        return $this->db->delete($this->table);
    }

     #Funcao para atualizar um registro;
     function Update($id, $data) { 
        if (is_null($id) || !isset($data))
            return false;

        $data['IND_CASTRADO'] = intval($data['IND_CASTRADO']);   
        $data['IND_VACINA'] = intval($data['IND_VACINA']);   
        $data['STATUS_ANIMAL'] = intval($data['STATUS_ANIMAL']);    

        $this->db->where('idanimal', $id);
        return $this->db->update($this->table, $data);
    }

	function ChecaUsuarioAnimal($id) {
        $usuario = $this->session->userdata("usuario_logado");
        if(is_null($id))
            return false;
        $this->db->where('idanimal', $id);
        $this->db->where("IDRESPONSAVEL", $usuario['IDRESPONSAVEL']);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagem_animal extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'IMAGEM_ANIMAL';
    }

    # Função para obter os dados do banco,
    # apartir de um ID;
    function GetById($id) {
        if(is_null($id))
            return false;
        $this->db->where('IDANIMAL', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    # Funcao para obter todos os registro de uma data tabela
    function GetAll($sort = 'IDANIMAL', $order = 'asc') {
        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }

    #Funcao para atualizar um registro;
    function Update($id, $data) { 
        if (is_null($id) || !isset($data))
            return false;

        $this->db->where('IDANIMAL', $id);
        return $this->db->update($this->table, $data);
    }

    # Funcao para remover um registro
	function Delete($id) {
        if (is_null($id))
            return false;
        $this->db->where('IDANIMAL', $id);
        return $this->db->delete($this->table);
    }
}
<?php

class MY_Model extends CI_Model {

    var $table = ''; 

    function __construct() {
        parent::__construct();
    }
    function create($data) {
        return $this->db->insert($this->table, $data);
    }
    function obterPorId($id) {
        if (is_null($id))
            return false;
        $query = $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    function ObterTodos() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function Update($id, $data) {
        if (is_null($id) || !isset($data))
            return false;
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    
    function Delete($id) {
        if (is_null($id))
            return false;
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}

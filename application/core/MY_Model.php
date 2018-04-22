<?php

class MY_Model extends CI_Model {

    var $table = ''; #Atributo de escopo global para receber o nome da tabela;

    function __construct() {
        parent::__construct();
    }
    # Função para obter os dados do banco,
    # apartir de um ID;
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

    # Funcao para obter todos os registro de uma data tabela
    function ObterTodos() {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    # Funcao para inserir um novo registro no banco
    function Insert($data) {
        return $this->db->insert($this->table, $data);
    }
    #Funcao para atualizar um registro;
    function Update($id, $data) {
        if (is_null($id) || !isset($data))
            return false;
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
    # Funcao para remover um registro
    function Delete($id) {
        if (is_null($id))
            return false;
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }

}

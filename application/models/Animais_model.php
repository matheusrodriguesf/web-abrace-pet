<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Animais_model extends MY_Model {
    function __construct() {
        parent:: __construct();
        $this->table = 'ANIMAL';
    }

    # Função para obter os dados do banco,
    # apartir de um ID;
    function GetById($id) {
        if(is_null($id))
            return false;
        $this->db->where('idanimal', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    # Funcao para obter todos os registro de uma data tabela
    function GetAll($sort = 'IDRESPONSAVEL', $order = 'asc') {
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
        $this->db->where('idanimal', $id);
        return $this->db->update($this->table, $data);
    }

    # Funcao para remover um registro
    function Delete($id) {
        if (is_null($id))
            return false;
        $this->db->where('idanimal', $id);
        return $this->db->delete($this->table);
    }

    function ChecaUsuarioAnimal($sort = 'IDANIMAL', $id = 'IDRESPONSAVEL', $order = 'asc') {
        $usuario = $this->session->userdata("usuario_logado");
        if(is_null($id))
            return false;
        $this->db->order_by($sort, $id, $order);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }
}
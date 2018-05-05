<?php

class MY_Model extends CI_Model {

    var $table = ''; #Atributo de escopo global para receber o nome da tabela;

    function __construct() {
        parent::__construct();
    }

    function GetUser($cpf_cnpj){
        if(is_null($cpf_cnpj))
            return false;
        $this->db->where('CPF_CNPJ', $cpf_cnpj);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    function GetAnimal($nomeanimal){
        if(is_null($nomeanimal))
            return false;
        $this->db->where('NOMEANIMAL', $nomeanimal);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    function GetAnimalByType($animaltype){
        if(is_null($animaltype))
            return false;
        $this->db
            ->select("*")
            ->from("ANIMAL_TIPO_ADOCAO")
            ->join("ANIMAL", "ANIMAL.IDANIMAL = ANIMAL_TIPO_ADOCAO.IDANIMAL")
            ->like('ANIMAL_TIPO_ADOCAO.ID_TIPOADOCAO',$animaltype); 
        return $query = $this->db->get()->result();
        /*if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }*/
    }

    # Função para obter os dados do banco,
    # apartir de um ID;
    function GetById($id) {
        if(is_null($id))
            return false;
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }

    # Funcao para obter todos os registro de uma data tabela
    function GetAll($sort = 'id', $order = 'asc') {
        $this->db->order_by($sort, $order);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }

    # Funcao para inserir um novo registro no banco
    function Insert($data) {
        if(!isset($data))
            return false;
        $this->db->set($data);
        return $this->db->insert($this->table);
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

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Animais_model extends MY_Model {

   public function __construct() {
    parent:: __construct();
    $this->table = 'ANIMAL';
     }


    /*public function create_animal($data){
        $data=array (
           'NOMEANIMAL'=>$this->input->post('NOMEANIMAL'),
           'SEXO'=>$this->input->post('SEXO'),
           'IND_CASTRADO'=>$this->input->post('IND_CASTRADO'),
           'IND_VACINA'=>$this->input->post('IND_VACINA'),
           'STATUS_ANIMAL'=>$this->input->post('STATUS_ANIMAL'),
           'PORTE'=>$this->input->post('PORTE'),
           'DESCRICAO_ANIMAL'=>$this->post('DESCRICAO_ANIMAL'),
           'IND_TIPO'=>$this->post('IND_TIPO')
        );
        return $this->db->insert('ANIMAL', $data);
      */  




    }










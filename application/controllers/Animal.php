<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller {
    
    function __construct() {
        parent:: __construct();
        $this->load->model('animais_model');
    }
    
    public function create(){
        $this->load->view('animal/cadastro_animal');
    
    }

    

    public function atualizar_animal(){
        // code
    }

       
    public function  saveanimal() {
        $data = $this->input->post();
        $this->animais_model->create($data);
    }
}

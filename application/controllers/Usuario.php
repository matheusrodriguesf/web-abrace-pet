<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    function __construct() {
        parent:: __construct();
        $this->load->model('usuario_model');
    }
    
    public function cadastrar_usuario(){
        $this->load->view('usuario/cadastrar');
    }

    public function atualizar_usuario(){
        // code
    }
    
    public function Salvar() {
        $data = $this->input->post();
        $this->usuario_model->create($data);
    }
}

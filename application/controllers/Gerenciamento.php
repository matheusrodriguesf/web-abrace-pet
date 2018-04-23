<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gerenciamento extends CI_Controller {

    public function index() {
        $messages = $this->animais_model->GetAll('nomeanimal');
        $data['messages'] = $messages;
        $this->load->view('perfil_usuario', $data);
    }

    public function Salvar() {
        $data = $this->input->post();
        $this->animais_model->Insert($data);
    }

    public function create() {
        $this->load->view('usuario/cadastrar');
    }
}
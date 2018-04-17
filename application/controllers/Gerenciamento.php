<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerenciamento extends CI_Controller {

    public function index(){
        $this->load->view('perfil_usuario');
    }

}


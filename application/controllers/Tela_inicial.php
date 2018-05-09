<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tela_inicial extends CI_Controller {

    public function index() {
        $this->load->view('tela_inicial');
    }

}

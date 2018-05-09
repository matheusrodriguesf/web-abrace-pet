<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gerenciamento_pet extends CI_Controller {

    /**
     * Carrega a home
     */
    public function Index()
    {
        // Chama a home enviando um array de dados a serem exibidos
        $this->load->view('gerenciamento_pet');
    }

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pesquisa_pet extends CI_Controller {

    public function index() {
        $this->load->view('pesquisa_pet');
    }

    public function Listar()
	{
		$this->load->model('Animais_model');
        $data = $this->Animais_model->GetAll();

        $this->load->model('Imagem_animal');
		$data_imagens = $this->Imagem_animal->GetAll();
		
		if ($data == null) {
			$this->load->view('pesquisa_erro');
		} else {
			$this->load->view('pesquisa_pet', array('animais' => $data, 'imagens' => $data_imagens));
		}
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animais extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('Animais_model');
        $data = $this->Animais_model->GetAll();

        $this->load->model('Imagem_animal');
		$data_imagens = $this->Imagem_animal->GetAll();
		
		if ($data == null) {
			$this->load->view('animais_erro');
		} else {
			$this->load->view('animais', array('animais' => $data, 'imagens' => $data_imagens));
		}
    }
}
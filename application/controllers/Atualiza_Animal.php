<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atualiza_Animal extends CI_Controller {

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
	public function index($id)
	{
        if($this->Usuario_model->ChecaUsuarioAnimal($id)) {
			$this->load->model('Animais_model');
        	$data = $this->Animais_model->GetById($id);

			if ($data != null) {
				$this->load->model('Imagem_animal');
				$data_imagem = $this->Imagem_animal->GetById($id);

				$this->load->view('atualizar_pet_adocao', array('animal' => $data));
			} else {
				$this->load->view('detalhe_animal_erro');
			}
		} else {
			redirect(base_url('login/usuario'));
		}
    }
}
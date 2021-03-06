<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detalhe_Animal extends CI_Controller {

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
        $this->load->model('Animais_model');
        $data = $this->Animais_model->GetById($id);

        $this->load->model('Usuario_model');
       	$userdata = $this->Usuario_model->GetUserContato($data['IDRESPONSAVEL']);

       	$this->load->model('Model_Contato_Usuario');
       	$userdata += $this->Model_Contato_Usuario->GetUserContato($data['IDRESPONSAVEL']);

        if ($data != NULL && $userdata != NULL) {
            $this->load->model('Imagem_animal');
            $data_imagem = $this->Imagem_animal->GetById($id);

            $this->load->view('detalhe_pet', array(
            	'animal' => $data,
            	'imagem_animal' => $data_imagem['IMAGEM_ANIMAL'],
            	'responsavel' => $userdata
            ));
        } else {
            $this->load->view('detalhe_animal_erro');
        }
    }
}
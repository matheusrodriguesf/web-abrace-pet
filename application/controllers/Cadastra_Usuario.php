<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadastra_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('cadastro_usuario');
	}
	
	public function Salvar() {
		// Recupera os contatos através do model
		/*$pets = $this->Model_Pet_Adocao->GetAll('nomeanimal');

		if (isset($pets)) {
			foreach ($pets as $key => $value) {
				$dados['pets'] = $value;
			}
		} else {
			$dados['pets'] = FALSE;
		}*/

        $dados = $this->input->post();
        $this->Usuario_model->Insert($dados);

        $this->load->view('cadastro_usuario', $dados);
    }
	
	
	public function Listar() {
		// Recupera os contatos através do model
		$pets = $this->Usuario_Model->GetAll('NOME');

		
		if (isset($pets)) {
			foreach ($pets as $key => $value) {
				$dados['usuario'][$key] = $value;
				
			}
		} else {
			$dados['usuario'] = FALSE;
		}

		// Chama a home enviando um array de dados a serem exibidos
		$this->load->view('lista_usuario', $dados);
	}

}
	
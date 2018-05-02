<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadastra_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('cadastro_usuario');
	}
	
	public function Salvar() {
		
        $dados = $this->input->post();

        $senha_encrypt = sha1($dados['SENHA']);

        $dados['SENHA'] = $senha_encrypt;

        //Muda a formatação da data
        $dt_nascimento = $dados['DATA_NASCIMENTO'];

        $dados['DATA_NASCIMENTO'] = date('Y-m-d', strtotime($dt_nascimento));

        $this->Usuario_model->Insert($dados);

        $this->load->view('cadastro_usuario', $dados);

        redirect(base_url('login/usuario'));
    }

}
	
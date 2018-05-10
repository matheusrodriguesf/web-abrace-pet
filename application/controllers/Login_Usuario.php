<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('tela_inicial');
	}
	
	public function Logar() {
		
        $dados = $this->input->post();
        
        $usuario = $dados['CPF_CNPJ'];
        $senha = sha1($dados['SENHA']);

        $usuario_db = $this->Usuario_model->GetUser($dados['CPF_CNPJ']);
        $contato_db = $this->Model_Contato_Usuario->GetUserContato($usuario_db['IDRESPONSAVEL']);

        $usuariodata = $usuario_db + $contato_db;
        
        if ($usuario == $usuariodata['CPF_CNPJ'] && $senha == $usuariodata['SENHA']) {
			$this->session->set_userdata("usuario_logado", $usuariodata);
			$this->session->set_flashdata("success", "Logado com sucesso!");
			redirect(base_url('principal'));
		} else {
			$this->session->set_flashdata("danger", "CPF/CNPJ ou senha invalidos!");
			$this->load->view('login_usuario', $dados);
		}
    }


	public function Logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->sess_destroy();
		redirect(base_url('principal'));
		
	}

}
	
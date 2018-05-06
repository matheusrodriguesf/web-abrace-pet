<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_Usuario extends CI_Controller {

	public function index(){
		$this->load->view('login_usuario');
	}
	
	public function Logar() {
		
        $dados = $this->input->post();
        
        $usuario = $dados['CPF_CNPJ'];
        $senha = sha1($dados['SENHA']);

        $usuario_db = $this->Usuario_model->GetUser($dados['CPF_CNPJ']);
        
        if ($usuario == $usuario_db['CPF_CNPJ'] && $senha == $usuario_db['SENHA']) {
			$this->session->set_userdata("usuario_logado", $usuario_db);
			$this->session->set_flashdata("success", "Logado com sucesso!");
			redirect(base_url('inicio'));
		} else {
			$this->session->set_flashdata("danger", "CPF/CNPJ ou senha invalidos!");
			$this->load->view('login_usuario', $dados);
		}
    }

    /*public function logar(){
		
		$usuario = $this->input->post("usuario");
		$senha = sha1($this->input->post("senha"));
		
		//Código sha1  da senha 123456 7c4a8d09ca3762af61e59520943dc26494f8941b
		//O usuário no exemplo aqui será usuario@email.com.br
		//Mas em um projeto real, você trará isto do banco de dados.
		
		//Se o usuário e senha combinarem, então basta eu redirecionar para a url base, pois agora o usuário irá passa
		//pela verificação que checa se ele está logado.
		if ($usuario == "usuario@email.com.br" && $senha == '7c4a8d09ca3762af61e59520943dc26494f8941b' ) {
			$this->session->set_userdata("logado", 1);
			redirect(base_url());
		} else {
			//caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login com uma mensagem de erro.
			$dados['erro'] = "Usuário/Senha incorretos";
			$this->load->view("v_login", $dados);
		}
	}*/
	/*
	 * Aqui eu destruo a variável logado na sessão e redireciono para a url base. Como esta variável não existe mais, o usuário
	 * será direcionado novamente para a tela de login.
	 */
	public function Logout(){
		$this->session->unset_userdata("usuario_logado");
		$this->session->sess_destroy();
		redirect(base_url());
		
	}

}
	
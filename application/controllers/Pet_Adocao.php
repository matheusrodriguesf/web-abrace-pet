<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pet_Adocao extends CI_Controller {

	/**
	 * Carrega a home
	 */
	public function Index()
	{
		// Chama a home enviando um array de dados a serem exibidos
		$this->load->view('pet_adocao');
	}

	/**
	 * Lista os pets
	 */
	public function Listar()
	{
		// Recupera os contatos através do model
		$pets = $this->Model_Pet_Adocao->GetAll('nomeanimal');

		
		if (isset($pets)) {
			foreach ($pets as $key => $value) {
				$dados['pets'][$key] = $value;
				
			}
		} else {
			$dados['pets'] = FALSE;
		}

		// Chama a home enviando um array de dados a serem exibidos
		$this->load->view('listar_pet_adocao', $dados);
	}

	/**
	 * Processa o formulário para salvar os dados
	 */
	public function Salvar(){
		// Recupera os contatos através do model
		$pets = $this->Model_Pet_Adocao->GetAll('nomeanimal');

		if (isset($pets)) {
			foreach ($pets as $key => $value) {
				$dados['pets'] = $value;
			}
		} else {
			$dados['pets'] = FALSE;
		}

		// Executa o processo de validação do formulário
		$validacao = self::Validar();
		// Verifica o status da validação do formulário
		// Se não houverem erros, então insere no banco e informa ao usuário
		// caso contrário informa ao usuários os erros de validação
		if($validacao){
			// Recupera os dados do formulário
			$pets = $this->input->post();
			// Insere os dados no banco recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Inserir($pets);
			// Checa o status da operação gravando a mensagem na seção
			if(!$status){
				$this->session->set_flashdata('error', 'Não foi possível adicionar o pet.');
			}else{
				$this->session->set_flashdata('success', 'Pet adicionado com sucesso.');
				// Redireciona o usuário para a home
				redirect();
			}
		}else{
			$this->session->set_flashdata('error', validation_errors('<p>','</p>'));
		}
		// Carrega a home
		$this->load->view('cadastro_pet_adocao',$dados);
	}

	/**
	 * Carrega a view para edição dos dados
	 */
	public function Editar(){
		// Recupera o ID do registro - através da URL - a ser editado
		$id = $this->uri->segment(2);
		// Se não foi passado um ID, então redireciona para a home
		if(is_null($id))
			redirect();
		// Recupera os dados do registro a ser editado
		$dados['pet'] = $this->Model_Pet_Adocao->GetById($id);
		// Carrega a view passando os dados do registro
		$this->load->view('editar',$dados);
	}

	/**
	 * Processa o formulário para atualizar os dados
	 */
	public function Atualizar(){
		// Realiza o processo de validação dos dados
		$validacao = self::Validar('update');
		// Verifica o status da validação do formulário
		// Se não houverem erros, então insere no banco e informa ao usuário
		// caso contrário informa ao usuários os erros de validação
		if($validacao){
			// Recupera os dados do formulário
			$pets = $this->input->post();
			// Atualiza os dados no banco recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Atualizar($pets['id'],$pets);
			// Checa o status da operação gravando a mensagem na seção
			if(!$status){
				$dados['pets'] = $this->Model_Pet_Adocao->GetById($pets['id']);
				$this->session->set_flashdata('error', 'Não foi possível atualizar o pet.');
			}else{
				$this->session->set_flashdata('success', 'Pet atualizado com sucesso.');
				// Redireciona o usuário para a home
				redirect();
			}
		}else{
			$this->session->set_flashdata('error', validation_errors());
		}
		// Carrega a view para edição
		$this->load->view('editar',$dados);
	}

	/**
	 * Realiza o processo de exclusão dos dados
	 */
	public function Excluir(){
		// Recupera o ID do registro - através da URL - a ser editado
		$id = $this->uri->segment(2);
		// Se não foi passado um ID, então redireciona para a home
		if(is_null($id))
			redirect();
		// Remove o registro do banco de dados recuperando o status dessa operação
		$status = $this->Model_Pet_Adocao->Excluir($id);
		// Checa o status da operação gravando a mensagem na seção
		if($status){
			$this->session->set_flashdata('success', '<p>Pet excluído com sucesso.</p>');
		}else{
			$this->session->set_flashdata('error', '<p>Não foi possível excluir o pet.</p>');
		}
		// Redirecionao o usuário para a home
		redirect();
	}

	/**
	* Valida os dados do formulário
	*
	* @param string $operacao Operação realizada no formulário: insert ou update
	*
	* @return boolean
	*/
	private function Validar($operacao = 'insert'){
		// Com base no parâmetro passado
		// determina as regras de validação
		switch($operacao){
			case 'insert':
				$rules['nomeanimal'] = array('trim', 'required', 'min_length[3]');
				$rules['sexo'] = array('trim', 'required');
				$rules['idade'] = array('trim', 'required', 'min_length[3]');
				$rules['raca'] = array('trim', 'required', 'min_length[3]');
				$rules['tp_raca'] = array('trim', 'required', 'min_length[3]');
				$rules['cor_pelagem'] = array('trim', 'required', 'min_length[3]');
				$rules['castrado'] = array('trim', 'required', 'min_length[3]');
				$rules['vacinado'] = array('trim', 'required', 'min_length[3]');
				break;
			case 'update':
				$rules['nomeanimal'] = array('trim', 'required', 'min_length[3]');
				$rules['sexo'] = array('trim', 'required');
				$rules['idade'] = array('trim', 'required', 'min_length[3]');
				$rules['raca'] = array('trim', 'required', 'min_length[3]');
				$rules['tp_raca'] = array('trim', 'required', 'min_length[3]');
				$rules['cor_pelagem'] = array('trim', 'required', 'min_length[3]');
				$rules['castrado'] = array('trim', 'required', 'min_length[3]');
				$rules['vacinado'] = array('trim', 'required', 'min_length[3]');
				break;
			default:
				$rules['nomeanimal'] = array('trim', 'required', 'min_length[3]');
				$rules['sexo'] = array('trim', 'required');
				$rules['idade'] = array('trim', 'required', 'min_length[3]');
				$rules['raca'] = array('trim', 'required', 'min_length[3]');
				$rules['tp_raca'] = array('trim', 'required', 'min_length[3]');
				$rules['cor_pelagem'] = array('trim', 'required', 'min_length[3]');
				$rules['castrado'] = array('trim', 'required', 'min_length[3]');
				$rules['vacinado'] = array('trim', 'required', 'min_length[3]');
				break;
		}
		$this->form_validation->set_rules('nomeanimal', 'NomeAnimal', $rules['nomeanimal']);
		$this->form_validation->set_rules('sexo', 'Sexo', $rules['sexo']);
		$this->form_validation->set_rules('idade', 'Idade', $rules['idade']);
		$this->form_validation->set_rules('raca', 'Raça', $rules['raca']);
		$this->form_validation->set_rules('tp_raca', 'TipoRaça', $rules['tp_raca']);
		$this->form_validation->set_rules('cor_pelagem', 'CorPelagem', $rules['cor_pelagem']);
		$this->form_validation->set_rules('castrado', 'Castrado', $rules['castrado']);
		$this->form_validation->set_rules('vacinado', 'Vacinado', $rules['vacinado']);
		// Executa a validação e retorna o status
		return $this->form_validation->run();
	}
}
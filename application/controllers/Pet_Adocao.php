<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pet_Adocao extends MY_Controller {

	/**
	 * Carrega a home
	 */
	public function Index()
	{
		// Chama a home enviando um array de dados a serem exibidos
		$this->load->view('cadastro_pet_adocao');
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

		// Executa o processo de validação do formulário
		$validacao = self::Validar();
		// Verifica o status da validação do formulário
		// Se não houverem erros, então insere no banco e informa ao usuário
		// caso contrário informa ao usuários os erros de validação
		if($validacao){
			// Recupera os dados do formulário
			$dados = $this->input->post();
			if(!isset($dados['IDRESPONSAVEL'])){
				$dados['IDRESPONSAVEL'] = $this->session->userdata('usuario_logado')['IDRESPONSAVEL'];
			}

			// Insere os dados no banco recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Insert($dados);
			// Checa o status da operação gravando a mensagem na seção
			if(!$status){
				$this->session->set_flashdata('error', 'Não foi possível adicionar o pet.');
			}else{
				$this->session->set_flashdata('success', 'Pet adicionado com sucesso.');
				$this->do_upload($this->db->insert_id());
				// Redireciona o usuário para a home
				redirect(base_url('inicio'));
			}
		}else{
			$this->session->set_flashdata('error', validation_errors('<p>','</p>'));
		}
		// Carrega a home
		$this->load->view('cadastro_pet_adocao', $dados);
	}

	public function do_upload($id_animal) {
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 100;
		$config['max_width']     = 1024;
		$config['max_height']    = 768;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')) {
      $this->Excluir_Erro($id_animal);
		   $error = array('error' => $this->upload->display_errors());
		   $this->load->view('upload_form', $error);

		}

		else {
		   $data = array('upload_data' => $this->upload->data());
		   $image_data = array(
			   'IDANIMAL' => $id_animal,
			   'IMAGEM_ANIMAL' => $data['upload_data']['file_name'],
		   );

		   $this->load->model('Imagem_animal');
           $this->Imagem_animal->Insert($image_data);
		   // $this->load->view('upload_success', $data);
		}
	 }

	 public function update_imagem($id_animal) {
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 100;
		$config['max_width']     = 1024;
		$config['max_height']    = 768;
		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('userfile')) {
		   $data = array('upload_data' => $this->upload->data());
		   $image_data = array(
			   'IDANIMAL' => $id_animal,
			   'IMAGEM_ANIMAL' => $data['upload_data']['file_name'],
		   );

		   $this->load->model('Imagem_animal');
           $this->Imagem_animal->Update($id_animal, $image_data);
		   // $this->load->view('upload_success', $data);
		}
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
	public function Atualizar($id){
		// Realiza o processo de validação dos dados
		$validacao = self::Validar('update');
		// Verifica o status da validação do formulário
		// Se não houverem erros, então insere no banco e informa ao usuário
		// caso contrário informa ao usuários os erros de validação
		if($validacao){
			// Recupera os dados do formulário
			$pets = $this->input->post();
			// Atualiza os dados no banco recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Update($id, $pets);

			// Checa o status da operação gravando a mensagem na seção
			if(!$status){
				$dados['pets'] = $this->Model_Pet_Adocao->GetById($pets['id']);
				$this->session->set_flashdata('error', 'Não foi possível atualizar o pet.');
			}else{
				$this->session->set_flashdata('success', 'Pet atualizado com sucesso.');
				$this->update_imagem($id);
				// Redireciona o usuário para a home
				redirect(base_url('inicio'));
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
	public function Excluir($id){
		if ($this->Model_Pet_Adocao->ChecaUsuarioAnimal($id)) {
			// Recupera o ID do registro - através da URL - a ser editado

			// Se não foi passado um ID, então redireciona para a home
			if(is_null($id))
				redirect();
			// Remove o registro do banco de dados recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Delete($id);

			//apagando imagem do registro
			$this->load->model('Imagem_animal');
			$this->Imagem_animal->Delete($id);

			// Checa o status da operação gravando a mensagem na seção
			if($status){
				$this->session->set_flashdata('success', '<p>Pet excluído com sucesso.</p>');
			}else{
				$this->session->set_flashdata('error', '<p>Não foi possível excluir o pet.</p>');
			}
			// Redirecionao o usuário para a home
			redirect(base_url('inicio'));
		}
	}

  public function Excluir_Erro($id){
		if ($this->Model_Pet_Adocao->ChecaUsuarioAnimal($id)) {
			// Recupera o ID do registro - através da URL - a ser editado

			// Se não foi passado um ID, então redireciona para a home
			if(is_null($id))
				redirect();
			// Remove o registro do banco de dados recuperando o status dessa operação
			$status = $this->Model_Pet_Adocao->Delete($id);

			//apagando imagem do registro
			$this->load->model('Imagem_animal');
			$this->Imagem_animal->Delete($id);

			// Checa o status da operação gravando a mensagem na seção
			if($status){
				$this->session->set_flashdata('success', '<p>Pet excluído com sucesso.</p>');
			}else{
				$this->session->set_flashdata('error', '<p>Não foi possível excluir o pet.</p>');
			}
		}
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
				$rules['NOMEANIMAL'] = array('trim', 'required');
				$rules['SEXO'] = array('trim', 'required');
				$rules['IND_VACINA'] = array('trim', 'required');
				$rules['IND_CASTRADO'] = array('trim', 'required');
				$rules['LATITUDE'] = array('trim');
				$rules['LOGITUDE'] = array('trim');
				$rules['IDRESPONSAVEL'] = array('trim');
				$rules['STATUS_ANIMAL'] = array('trim', 'required');
				$rules['FOTO_ANIMAL'] = array('trim');
				$rules['PORTE'] = array('trim', 'required', 'min_length[3]');
				$rules['DESCRICAO_ANIMAL'] = array('trim', 'min_length[3]');
				$rules['IND_TIPO'] = array('trim', 'required');
				break;
			case 'update':
				$rules['NOMEANIMAL'] = array('trim', 'required');
				$rules['SEXO'] = array('trim', 'required');
				$rules['IND_VACINA'] = array('trim', 'required');
				$rules['IND_CASTRADO'] = array('trim', 'required');
				$rules['LATITUDE'] = array('trim');
				$rules['LOGITUDE'] = array('trim');
				$rules['IDRESPONSAVEL'] = array('trim');
				$rules['STATUS_ANIMAL'] = array('trim', 'required');
				$rules['FOTO_ANIMAL'] = array('trim');
				$rules['PORTE'] = array('trim', 'required', 'min_length[3]');
				$rules['DESCRICAO_ANIMAL'] = array('trim', 'min_length[3]');
				$rules['IND_TIPO'] = array('trim', 'required');
				break;
			default:
				$rules['NOMEANIMAL'] = array('trim', 'required');
				$rules['SEXO'] = array('trim', 'required');
				$rules['IND_VACINA'] = array('trim', 'required');
				$rules['IND_CASTRADO'] = array('trim', 'required');
				$rules['LATITUDE'] = array('trim');
				$rules['LOGITUDE'] = array('trim');
				$rules['IDRESPONSAVEL'] = array('trim');
				$rules['STATUS_ANIMAL'] = array('trim', 'required');
				$rules['FOTO_ANIMAL'] = array('trim');
				$rules['PORTE'] = array('trim', 'required', 'min_length[3]');
				$rules['DESCRICAO_ANIMAL'] = array('trim', 'min_length[3]');
				$rules['IND_TIPO'] = array('trim', 'required');
				break;
		}
		$this->form_validation->set_rules('NOMEANIMAL', 'NomeAnimal', $rules['NOMEANIMAL']);
		$this->form_validation->set_rules('SEXO', 'Sexo', $rules['SEXO']);
		$this->form_validation->set_rules('IND_VACINA', 'vacinado', $rules['IND_VACINA']);
		$this->form_validation->set_rules('IND_CASTRADO', 'Castrado', $rules['IND_CASTRADO']);
		$this->form_validation->set_rules('LATITUDE', 'Latitude', $rules['LATITUDE']);
		$this->form_validation->set_rules('LOGITUDE', 'Longitude', $rules['LOGITUDE']);
		$this->form_validation->set_rules('IDRESPONSAVEL', 'IdResponsavel', $rules['IDRESPONSAVEL']);
		$this->form_validation->set_rules('STATUS_ANIMAL', 'StatusAnimal', $rules['STATUS_ANIMAL']);
		$this->form_validation->set_rules('FOTO_ANIMAL', 'FotoAnimal', $rules['FOTO_ANIMAL']);
		$this->form_validation->set_rules('PORTE', 'Porte', $rules['PORTE']);
		$this->form_validation->set_rules('DESCRICAO_ANIMAL', 'Descricao', $rules['DESCRICAO_ANIMAL']);
		$this->form_validation->set_rules('IND_TIPO', 'IndTipo', $rules['IND_TIPO']);
		// Executa a validação e retorna o status
		return $this->form_validation->run();
	}
}

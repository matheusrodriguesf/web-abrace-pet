<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Cadastra_Usuario extends CI_Controller {
    public function index(){
        $this->load->view('cadastro_usuario');
    }
    
    public function Salvar() {
        $validacao = self::Validar();
        if($validacao){
            $dados = $this->input->post();
            $senha_encrypt = sha1($dados['SENHA']);
            $dados['SENHA'] = $senha_encrypt;
            //Muda a formatação da data
            $dt_nascimento = $dados['DATA_NASCIMENTO'];
            $dados['DATA_NASCIMENTO'] = date('Y-m-d', strtotime($dt_nascimento));
            
            $status = $this->Usuario_model->Insert($dados);
            if(!$status){
                $this->session->set_flashdata('error', 'Não foi possível cadastrar o usuario');
            }else{
                $this->session->set_flashdata('success', 'Usuario cadastrado com sucesso.');
                redirect(base_url('login/usuario'));
            }
        }else{            
            $this->session->set_flashdata('error', validation_errors('<p>','</p>'));
            $dados=NULL;
        }
        $this->load->view('cadastro_usuario', $dados);
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
                $rules['NOME'] = array('trim', 'required');
                $rules['CPF_CNPJ'] = array('trim', 'required');
                $rules['DATA_NASCIMENTO'] = array('trim');
                $rules['UF'] = array('trim', 'required');
                $rules['SENHA'] = array('trim', 'required');
                $rules['IND_RESPONSAVEL'] = array('trim', 'required');
                $rules['ENDERECO'] = array('trim', 'required');
                break;
            case 'update':
                $rules['NOME'] = array('trim', 'required');
                $rules['CPF_CNPJ'] = array('trim', 'required');
                $rules['DATA_NASCIMENTO'] = array('trim');
                $rules['UF'] = array('trim', 'required');
                $rules['SENHA'] = array('trim', 'required');
                $rules['IND_RESPONSAVEL'] = array('trim', 'required');
                $rules['ENDERECO'] = array('trim', 'required');
                break;
            default:
                $rules['NOME'] = array('trim', 'required');
                $rules['CPF_CNPJ'] = array('trim', 'required');
                $rules['DATA_NASCIMENTO'] = array('trim');
                $rules['UF'] = array('trim', 'required');
                $rules['SENHA'] = array('trim', 'required');
                $rules['IND_RESPONSAVEL'] = array('trim', 'required');
                $rules['ENDERECO'] = array('trim', 'required');
                break;
        }
        $this->form_validation->set_rules('NOME', 'Nome', $rules['NOME']);
        $this->form_validation->set_rules('CPF_CNPJ', 'CPF ou CNPJ', $rules['CPF_CNPJ']);
        $this->form_validation->set_rules('DATA_NASCIMENTO', 'Data de Nascimento', $rules['DATA_NASCIMENTO']);
        $this->form_validation->set_rules('UF', 'Estado', $rules['UF']);
        $this->form_validation->set_rules('SENHA', 'Senha', $rules['SENHA']);
        $this->form_validation->set_rules('IND_RESPONSAVEL', 'Tipo de Perfil', $rules['IND_RESPONSAVEL']);
        $this->form_validation->set_rules('ENDERECO', 'Endereço', $rules['ENDERECO']);
        // Executa a validação e retorna o status
        return $this->form_validation->run();
    }
}

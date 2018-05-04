<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('salvar') ?>">
<!-- Form Name -->
<legend>Formulário de Cadastro do Usuário</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NOME"></label>  
  <div class="col-md-8">
  <input id="NOME" name="NOME" type="text" placeholder="Nome Completo" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPF"></label>  
  <div class="col-md-5">
  <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF_CNPJ" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DATA_NASCIMENTO"></label>  
  <div class="col-md-4">
  <input id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" type="text" placeholder="DATA DE NASCIMENTO" class="form-control input-md">
    
  </div>
</div>



<form class="form-horizontal">
<fieldset>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Selecione a UF">Select Basic</label>
  <div class="col-md-4">
    <select id="UF" name="UF" class="form-control">
      <option value="AC">AC</option>
      <option value="AL">AL</option>
      <option value="AP">AP</option>
      <option value="AM">AM</option>
      <option value="BA">BA</option>
      <option value="CE">CE</option>
      <option value="DF">DF</option>
      <option value="ES">ES</option>
      <option value="GO">GO</option>
      <option value="MA">MA</option>
      <option value="MT">MT</option>
      <option value="MS">MS</option>
      <option value="MG">MG</option>
      <option value="PA">PA</option>
      <option value="PB">PB</option>
      <option value="PR">PR</option>
      <option value="PE">PE</option>
      <option value="PI">PI</option>
      <option value="RJ">RJ</option>
      <option value="RN">RN</option>
      <option value="RS">RS</option>
      <option value="RO">RO</option>
      <option value="RR">RR</option>
      <option value="SC">SC</option>
      <option value="SP">SP</option>
      <option value="SE">SE</option>
      <option value="TO">TO</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LOGRADOURO"></label>  
  <div class="col-md-6">
  <input id="ENDERECO" name="ENDERECO" type="text" placeholder="ENDERECO" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SENHA"></label>
  <div class="col-md-4">
    <input id="SENHA" name="SENHA" type="password" placeholder="SENHA" class="form-control input-md">
    
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Tipo de anunciante</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL" value="0" checked="checked">
      Pessoa Física
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="IND_RESPONSAVEL" id="IND_RESPONSAVEL" value="1">
      Entidade de animais
    </label>
	</div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" class="btn btn-primary" type="submit">Button</button>
  </div>
</div>


</fieldset>
</form>
<?php $this->load->view('shared/rodape'); ?>

<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('saveanimal') ?>">
<form class="Cadastro de animal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de animal</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NOMEANIMAL">Nome do animal:</label>  
  <div class="col-md-4">
  <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do animal" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SEXO">Sexo:</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="SEXO-0">
      <input type="radio" name="SEXO" id="SEXO-0" value="1" checked="checked">
      Fêmea
    </label>
	</div>
  <div class="radio">
    <label for="SEXO-1">
      <input type="radio" name="SEXO" id="SEXO-1" value="0">
      Macho
    </label>
	</div>
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_CASTRADO">Animal castrado:</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="IND_CASTRADO-0">
      <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-0" value="1" checked="checked">
      Sim
    </label>
	</div>
  <div class="radio">
    <label for="IND_CASTRADO-1">
      <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-1" value="0">
      Não
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_VACINA">Animal vacinado:</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="IND_VACINA-0">
      <input type="radio" name="IND_VACINA" id="IND_VACINA-0" value="1" checked="checked">
      Sim
    </label>
	</div>
  <div class="radio">
    <label for="IND_VACINA-1">
      <input type="radio" name="IND_VACINA" id="IND_VACINA-1" value="0">
      Não
    </label>
	</div>
  </div>
</div>


<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="STATUS_ANIMAL">Status do Animal</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="STATUS_ANIMAL-0">
      <input type="checkbox" name="STATUS_ANIMAL" id="STATUS_ANIMAL-0" value="0">
      Adoção
    </label>
    <label class="checkbox-inline" for="STATUS_ANIMAL-1">
      <input type="checkbox" name="STATUS_ANIMAL" id="STATUS_ANIMAL-1" value="1">
      Lar Temporário
    </label>
    <label class="checkbox-inline" for="STATUS_ANIMAL-2">
      <input type="checkbox" name="STATUS_ANIMAL" id="STATUS_ANIMAL-2" value="2">
      Adotado
    </label>
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Porte do animal:</label>
  <div class="col-md-4">
    <select id="PORTE" name="PORTE" class="form-control">
      <option value="0">Mini</option>
      <option value="1">Pequeno</option>
      <option value="2">Médio</option>
      <option value="3">Grande</option>
      <option value="4">Gigante</option>
    </select>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="DESCRICAO_ANIMAL">Descrição</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="DESCRICAO_ANIMAL" name="DESCRICAO_ANIMAL">Preencha com informações do pet.</textarea>
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_TIPO">Tipo do animal</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="IND_TIPO-0">
      <input type="radio" name="IND_TIPO" id="IND_TIPO" value="1" checked="checked">
      Cão
    </label>
	</div>
  <div class="radio">
    <label for="IND_TIPO-1">
      <input type="radio" name="IND_TIPO" id="IND_TIPO" value="0">
      Gato
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" class="btn btn-primary">Cadatrar pet</button>
  </div>
</div>


</fieldset>
</form>
 

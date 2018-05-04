<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('atualizar') ?>">
<!-- Form Name -->
<legend>Formulário de Cadastro do Usuário</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NOME"></label>
  <div class="col-md-8">
  <input id="NOME" name="NOME" value="<?=$contato['NOME']?>" type="text" placeholder="Nome Completo" class="form-control input-md" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPF"></label>
  <div class="col-md-5">
  <input id="CPF" name="CPF" type="text" placeholder="CPF/CNPJ" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="DATA_NASCIMENTO"></label>
  <div class="col-md-4">
  <input id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" type="text" placeholder="DATA DE NASCIMENTO" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LOGRADOURO"></label>
  <div class="col-md-6">
  <input id="LOGRADOURO" name="LOGRADOURO" type="text" placeholder="LOGRADOURO" class="form-control input-md">

  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SENHA"></label>
  <div class="col-md-4">
    <input id="SENHA" name="SENHA" type="password" placeholder="SENHA" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UF"></label>
  <div class="col-md-4">
  <input id="UF" name="UF" type="text" placeholder="UF" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IDTIPO"></label>
  <div class="col-md-4">
  <input id="IDTIPO" name="IDTIPO" type="text" placeholder="IDTIPO" class="form-control input-md">

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

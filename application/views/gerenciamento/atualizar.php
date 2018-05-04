<?php $this->load->view('shared/cabecalho'); ?>
<form class="form-horizontal" method="post" action="<?=base_url('atualizar')?>" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend>Formulário Pet </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NOMEANIMAL"></label>
  <div class="col-md-8">
  <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="SEXO"></label>
  <div class="col-md-4">
  <input id="SEXO" name="SEXO" type="text" placeholder="SEXO" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_CASTRADO"></label>
  <div class="col-md-4">
  <input id="IND_CASTRADO" name="IND_CASTRADO" type="text" placeholder="IND_CASTRADO" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IDRESPONSAVEL"></label>
  <div class="col-md-4">
  <input id="IDRESPONSAVEL" name="IDRESPONSAVEL" type="text" placeholder="IDRESPONSAVEL" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="STATUS_ANIMAL"></label>
  <div class="col-md-4">
  <input id="STATUS_ANIMAL" name="STATUS_ANIMAL" type="text" placeholder="STATUS_ANIMAL" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_VACINA"></label>
  <div class="col-md-4">
  <input id="IND_VACINA" name="IND_VACINA" type="text" placeholder="IND_VACINA" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IND_TIPO"></label>
  <div class="col-md-4">
  <input id="IND_TIPO" name="IND_TIPO" type="text" placeholder="IND_TIPO" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="PORTE"></label>
  <div class="col-md-4">
  <input id="PORTE" name="PORTE" type="text" placeholder="PORTE" class="form-control input-md">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit">Button</button>
  </div>
</div>

</fieldset>
</form>


<?php $this->load->view('shared/rodape'); ?>

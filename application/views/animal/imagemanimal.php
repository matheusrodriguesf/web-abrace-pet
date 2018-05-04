
<?php $this->load->view('shared/cabecalho'); ?>
<form class="form-horizontal" method="post" action="<?= base_url('upload') ?>">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Upload Foto</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Foto do pet">Foto do pet</label>
  <div class="col-md-4">
    <input id="Foto do pet" name="Foto do pet" class="input-file" type="file">
  </div>
</div>

</fieldset>
</form>
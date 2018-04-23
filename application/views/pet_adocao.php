<?php $this->load->view('shared/cabecalho'); ?>

<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="Pet_Adocao"></label>
    <div class="col-md-4">
        <a class="btn btn-primary" href="<?=base_url('pet/adocao/add')?>" role="button">Adicionar</a>
    </div>
</div>

<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="Pet_Adocao"></label>
    <div class="col-md-4">
        <a class="btn btn-primary" href="<?=base_url('pet/adocao/list-all')?>" role="button">Listar</a>
    </div>
</div>

<?php $this->load->view('shared/rodape'); ?>
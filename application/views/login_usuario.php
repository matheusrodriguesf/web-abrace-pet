<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('login/usuario/logar') ?>">
    <fieldset>

        <!-- Form Name -->
        <legend>Login</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="CPF_CNPJ">CPF ou CNPJ</label>  
            <div class="col-md-2">
                <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF ou CNPJ" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="SENHA">Senha</label>  
            <div class="col-md-2">
                <input id="SENHA" name="SENHA" type="password" placeholder="Senha" class="form-control input-md">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Cadastrar"></label>
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </div>
    </fieldset>
</form>



<?php $this->load->view('shared/rodape'); ?>

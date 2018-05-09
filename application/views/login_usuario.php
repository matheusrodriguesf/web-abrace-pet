<form class="form-horizontal" method="post" action="<?= base_url('login/usuario/logar') ?>">
  <fieldset>
  <!-- Text input-->
  <div class="form-group">
    <div>
      <label for="CPF_CNPJ">CPF ou CNPJ</label>
      <input id="CPF_CNPJ" name="CPF_CNPJ" type="text" placeholder="CPF ou CNPJ" class="form-control input-md">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <div>
      <label class="control-label" for="SENHA">Senha</label>
      <input id="SENHA" name="SENHA" type="password" placeholder="Senha" class="form-control input-md">
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <label class=" control-label" for="Cadastrar"></label>
    <div class="">
      <button class="btn btn-primary" href="<?= base_url('login/usuario') ?>" type="submit">Login</button>
    </div>
  </div>
  </fieldset>
</form> 
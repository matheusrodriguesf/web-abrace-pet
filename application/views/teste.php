<?php $this->load->view('shared/cabecalho'); ?>
<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal" align="center">
          Please sign in
        </h1>
        
        <label for="inputEmail" class="sr-only">
          Email address
        </label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">
          Password
        </label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Sign in
        </button>

    </form>

    </div>
  </div>
</div>
<?php $this->load->view('shared/rodape'); ?>



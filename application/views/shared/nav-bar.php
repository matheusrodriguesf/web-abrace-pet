<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo $this->session->userdata("usuario_logado") ? base_url('inicio') : base_url('home') ?>">Home</a>
            <a class="nav-item nav-link" href="<?= base_url('pet/adocao')?>">Adoção</a>
            <a class="nav-item nav-link" href="<?= base_url('pet/lar-temporario')?>">Lar Temporário</a>
            <a class="nav-item nav-link disabled" href="#">Suporte</a>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?php echo $this->session->userdata("usuario_logado") ? base_url('inicio') : base_url('home') ?>">Home</a>
<<<<<<< HEAD
            <?php if($this->session->userdata("usuario_logado")) { ?>
                <a class="nav-item nav-link" href="<?= base_url('pet/adocao')?>">Cadastrar Animal</a>
            <?php } ?>
            <a class="nav-item nav-link" href="<?= base_url('pet/animais')?>">Animais</a>
            <!--<a class="nav-item nav-link" href="#">Lar Temporário</a>-->
=======
            <a class="nav-item nav-link" href="<?= base_url('pet/adocao')?>">Adoção</a>
            <a class="nav-item nav-link" href="<?= base_url('pet/adocao/list-all')?>">Pesquisa Adoção</a>
            <a class="nav-item nav-link" href="<?= base_url('pet/lar-temporario')?>">Lar Temporário</a>
            <a class="nav-item nav-link" href="<?= base_url('pet/lar-temporario/list-all')?>">Pesquisa Lar Temporário</a>
>>>>>>> d465af0689a2ddc093e6578b5d7e1c115a3ce1a7
            <a class="nav-item nav-link disabled" href="#">Suporte</a>
        </div>
    </div>
</nav>
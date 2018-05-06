<?php $this->load->view('shared/cabecalho'); ?>

<!-- Page Content -->
<div class="container">

<div class="row">

  <div class="col-lg-2">
  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-8">

    <div class="card mt-4">
      <img class="card-img-top img-fluid" src="/web-abrace-pet/uploads/<?=$imagem_animal?>" alt="">
      <div class="card-body">
        <h3 class="card-title"><?=$animal['NOMEANIMAL']?></h3>
        <p class="card-text"><?=$animal['DESCRICAO_ANIMAL']?></p>
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Informações do animal
      </div>
      <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">Sexo: <?=($animal['SEXO'] == 'm') ? 'Macho' : 'Fêmea'?></li>
            <li class="list-group-item">Castrado: <?=($animal ["IND_CASTRADO"]==1)?'Sim': 'Não' ?></li> 
            <li class="list-group-item">Vacinado: <?=($animal ["IND_VACINA"]==1)?'Sim': 'Não'?></li> 
            <li class="list-group-item">Situação do animal: <?=($animal ["STATUS_ANIMAL"]==1)?'Lar temporário': 'Adoção'?></li> 
            <li class="list-group-item">Porte: <?=$animal["PORTE"]?></li> 
        </ul>
      </div>
    </div>
    <!-- /.card -->

    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Localização
      </div>
      <div class="card-body">
      <div class="form-group">
	            <div class="col-md-4">
	                <?php include 'mapa_detalhe.php'; ?>
	            </div>
	        </div>
      </div>
    </div>
    <!-- /.card -->

    <?php 
    $this->load->model('Usuario_model');
    if($this->Usuario_model->ChecaUsuarioAnimal($animal['IDANIMAL']) && $this->session->userdata("usuario_logado")) : ?>
    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        Ações
      </div>
      <div class="card-body">
        <form action="<?= base_url('pet/atualizar/' . $animal['IDANIMAL'])?>" method="post">
            <button class="btn btn-info">Editar Animal</button>
        </form>
      </div>

      <div class="card-body">
        <form action="<?= base_url('pet/adocao/delete/' . $animal['IDANIMAL'])?>" method="post">
            <button class="btn btn-success">Animal já adotado</button>
        </form>
      </div>
    </div>
    <!-- /.card -->
<?php endif ?>

  </div>
  <!-- /.col-lg-9 -->

</div>

</div>
              <?php $this->load->view('shared/footer') ?>
    <?php $this->load->view('shared/rodape'); ?>
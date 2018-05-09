<?php $this->load->view('shared/cabecalho'); ?>

<!-- Page Content -->
  <div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4"><?=$animal['NOMEANIMAL']?></h1>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <div class="">
          <img class="d-block w-100" alt="Carousel Bootstrap First" src="/web-abrace-pet/uploads/<?=$imagem_animal?>">
        </div>
        
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Detalhes Animal</h3>
        <ul>
          <li >Sexo: <?=($animal['SEXO'] == 'm') ? 'Macho' : 'Fêmea'?></li>
          <li >Castrado: <?=($animal ["IND_CASTRADO"]==1)?'Sim': 'Não' ?></li> 
          <li >Vacinado: <?=($animal ["IND_VACINA"]==1)?'Sim': 'Não'?></li> 
          <li >Situação do animal: <?=($animal ["STATUS_ANIMAL"]==1)?'Lar temporário': 'Adoção'?></li> 
          <li >Porte: <?=$animal["PORTE"]?></li> 
          </ul>
        <button type="button" class="btn btn-outline-dark btn-lg">
			    Adotar
		    </button>
      </div>
    </div>
    <h3 class="my-4">Descrição</h3>
    <div class="row">
      <div class="col-md-12">
       <?=$animal['DESCRICAO_ANIMAL']?>  
      </div>
    </div>  
    <!-- /.row -->
    <h3 class="my-4">Localização</h3>
    <div class="row">
      <div class="col-md-12">
        <?php include 'mapa.php'; ?>
      </div>
    </div>
    <!-- Related Projects Row -->
    

    <!-- /.row -->
  </div>
<?php $this->load->view('shared/footer') ?>
<?php $this->load->view('shared/rodape'); ?>
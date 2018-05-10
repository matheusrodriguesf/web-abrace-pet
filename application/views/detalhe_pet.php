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
        <button type="button" class="btn btn-outline-dark btn-lg" data-toggle="modal" data-target="#exampleModal2">
          Adotar
        </button>
        <!-- Modal -->
        <!--Login e cadastro-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel2">Informações do Responsável</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('detalhes_responsavel'); ?>               
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <!--fim cadastro/login-->
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
<?php $this->load->view('shared/cabecalho'); ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-2"></div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-8">

        <br>
          <div class="row">

          <?php foreach ($animais as $indice => $animal) : 
            //if()
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="detalhe/<?=$animal['IDANIMAL']?>"><img class="card-img-top" src="/web-abrace-pet/uploads/<?=$imagens[$indice]['IMAGEM_ANIMAL']?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="detalhe/<?=$animal['IDANIMAL']?>"><?=$animal['NOMEANIMAL']?></a>
                  </h4>
                  <p class="card-text"><?=$animal['DESCRICAO_ANIMAL']?></p>
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <?php $this->load->view('shared/footer') ?>
    <?php $this->load->view('shared/rodape'); ?>

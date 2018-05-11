<?php $this->load->view('shared/cabecalho'); ?>
<div class="container">
	

	<div class="row">
	<div class="col-xl-12">

		<!-- Page Heading -->
      <h1 class="my-4">Listagem de Pets</h1>

      <div class="row">
      	<?php foreach ($animais as $indice => $animal) : 
        //if()
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="detalhe_pet/<?=$animal['IDANIMAL']?>"><img class="card-img-top" src="/web-abrace-pet/uploads/<?=$imagens[$indice]['IMAGEM_ANIMAL']?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="detalhe_pet/<?=$animal['IDANIMAL']?>"><?=$animal['NOMEANIMAL']?></a>
              </h4>
              <p class="card-text"><?=$animal['DESCRICAO_ANIMAL']?></p>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
	</div>
	
	</div>
	    <?php $this->load->view('shared/rodape'); ?>
	    <?php $this->load->view('shared/footer') ?>
      


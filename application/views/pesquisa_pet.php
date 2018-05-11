<?php $this->load->view('shared/cabecalho'); ?>
<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="pesquisaPet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">Filtro de Pesquisa</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true">&times;</span>
			        </button>
	      		</div>
	      	<div class="modal-body">
	        	<div>
					<form class="form-horizontal">
					<fieldset>
					<!-- Multiple Checkboxes -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Tipo de Adoção</label>
					  <div class="">
					  <div class="checkbox">
					    <label for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Lar Temporário
					    </label>
					  </div>
					  <div class="checkbox">
					    <label for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Permanente
					    </label>
					  </div>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Animal</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Cachorro
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Gato
					    </label>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Sexo</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Macho
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Fêmea
					    </label>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class=" control-label" for="selectbasic">Idade</label>
					  <div class="">
					    <select id="selectbasic" name="selectbasic" class="form-control">
					      <option value="1">Option one</option>
					      <option value="2">Option two</option>
					    </select>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class=" control-label" for="selectbasic">Raça</label>
					  <div class="">
					    <select id="selectbasic" name="selectbasic" class="form-control">
					      <option value="1">Option one</option>
					      <option value="2">Option two</option>
					    </select>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Tipo de Raça</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Puro
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Mestiço
					    </label>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class=" control-label" for="selectbasic">Cor da Pelagem</label>
					  <div class="">
					    <select id="selectbasic" name="selectbasic" class="form-control">
					      <option value="1">Option one</option>
					      <option value="2">Option two</option>
					    </select>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Porte</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Mini
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Pequeno
					    </label>
					    <label class="checkbox-inline" for="checkboxes-2">
					      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
					      Médio
					    </label>
					    <label class="checkbox-inline" for="checkboxes-3">
					      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
					      Grande
					    </label>
					    <label class="checkbox-inline" for="checkboxes-4">
					      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
					      Gigante
					    </label>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Vermifugado</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Sim
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Não
					    </label>
					    <label class="checkbox-inline" for="checkboxes-2">
					      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
					      Desconheço
					    </label>
					  </div>
					</div>

					<!-- Multiple Checkboxes (inline) -->
					<div class="form-group">
					  <label class=" control-label" for="checkboxes">Vacinado</label>
					  <div class="">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      Sim
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      Não
					    </label>
					    <label class="checkbox-inline" for="checkboxes-2">
					      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
					      Desconheço
					    </label>
					  </div>
					</div>

						<!-- Multiple Checkboxes (inline) -->
						<div class="form-group">
						  <label class=" control-label" for="checkboxes">Castrado</label>
						  <div class="">
						    <label class="checkbox-inline" for="checkboxes-0">
						      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
						      Sim
						    </label>
						    <label class="checkbox-inline" for="checkboxes-1">
						      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
						      Não
						    </label>
						  </div>
						</div>
					</fieldset>
					</form>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button id="button1id" name="button1id" class="btn btn-success">Filtrar</button>
				<button id="button2id" name="button2id" class="btn btn-danger">Limpar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	<div class="col-xl-12">

		<!-- Page Heading -->
      <h1 class="my-4">Listagem de Pets
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pesquisaPet">
  			Filtrar
		</button>
      </h1>

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
      


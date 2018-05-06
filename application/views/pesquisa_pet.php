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
      <h1 class="my-4">Pesquisa Realizada
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pesquisaPet">
  			Filtrar
		</button>
      </h1>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://i.kinja-img.com/gawker-media/image/upload/s--nFxGt3L5--/c_scale,f_auto,fl_progressive,q_80,w_800/ebaeet1udzknntbtepj6.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project One</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="https://heroisnopapel.com/wp-content/uploads/2015/04/naruto-shippuden-1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Three</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
	</div>
	
	</div>
	    <?php $this->load->view('shared/rodape'); ?>
	    <?php $this->load->view('shared/footer') ?>
      


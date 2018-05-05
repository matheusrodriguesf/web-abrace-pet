<?php $this->load->view('shared/cabecalho'); ?>
<div>
	<div>
		<h1>Abrace Pets - Adoção</h1>
	</div>
	<?php if ($this->session->flashdata('error') == TRUE): ?>
		<p><?php echo $this->session->flashdata('error'); ?></p>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<p><?php echo $this->session->flashdata('success'); ?></p>
	<?php endif; ?>

	<form class="form-horizontal" method="post" action="<?=base_url('pet/adocao/add')?>" enctype="multipart/form-data">
	    <fieldset>

	        <!-- Form Name -->
	        <legend>Cadastro do Pet</legend>

	        <!-- Text input-->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="NOMEANIMAL">Nome</label>  
	            <div class="col-md-2">
	                <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md">

	            </div>
	        </div>

	        <!-- Select Basic -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="IND_TIPO">Tipo do Pet</label>
	            <div class="col-md-2">
	                <select id="IND_TIPO" name="IND_TIPO" class="form-control">
	                    <option value="c">Cachorro</option>
	                    <option value="g">Gato</option>
	                </select>
	            </div>
	        </div>

	        <!-- Select Basic -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="SEXO">Sexo</label>
	            <div class="col-md-1">
	                <select id="SEXO" name="SEXO" class="form-control">
	                    <option value="m">Macho</option>
	                    <option value="f">Femea</option>
	                </select>
	            </div>
	        </div>

	        <!-- Multiple Radios -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="IND_CASTRADO">Castrado ?</label>
	            <div class="col-md-4">
	                <div class="radio">
	                    <label for="IND_CASTRADO-0">
	                        <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-0" value="1" checked="checked">
	                        Sim
	                    </label>
	                </div>
	                <div class="radio">
	                    <label for="IND_CASTRADO-1">
	                        <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-1" value="0">
	                        Não
	                    </label>
	                </div>
	            </div>
	        </div>

	        <!-- Multiple Radios -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="IND_VACINA">Vacinado ?</label>
	            <div class="col-md-4">
	                <div class="radio">
	                    <label for="IND_VACINA-0">
	                        <input type="radio" name="IND_VACINA" id="IND_VACINA-0" value="1" checked="checked">
	                        Sim
	                    </label>
	                </div>
	                <div class="radio">
	                    <label for="IND_VACINA-1">
	                        <input type="radio" name="IND_VACINA" id="IND_VACINA-1" value="0">
	                        Não
	                    </label>
	                </div>
	            </div>
	        </div>

	        <div class="form-group">
	        	<label class="col-md-4 control-label">Localização</label>
	            <div class="col-md-4">
	                <?php include 'mapa.php'; ?>
	            </div>
	        </div>

	        <!-- Multiple Radios -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="STATUS_ANIMAL">Status do pet</label>
	            <div class="col-md-4">
	                <div class="radio">
	                    <label for="STATUS_ANIMAL-0">
	                        <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-0" value="1" checked="checked">
	                        Status 1
	                    </label>
	                </div>
	                <div class="radio">
	                    <label for="STATUS_ANIMAL-1">
	                        <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-1" value="0">
	                        Status 2
	                    </label>
	                </div>
	            </div>
	        </div>

	        <!-- Text input-->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="PORTE">Porte</label>  
	            <div class="col-md-2">
	                <input id="PORTE" name="PORTE" type="text" placeholder="Porte do Pet" class="form-control input-md">
	            </div>
	        </div>


	        <!-- Field -->
	        <div class="form-group">
	        	<label class="col-md-4 control-label" for="FOTO_ANIMAL">Foto do pet</label>
			    <div class="col-md-4">
				  	<input id="FOTO_ANIMAL" name="FOTO_ANIMAL" type="file" class="custom-file-input">
				  	<label class="form-control input-md custom-file-label" for="FOTO_ANIMAL">Escolher arquivo...</label>
				</div>
			</div>

	        <!-- Text Area -->
	        <div class="form-group">
			    <label class="col-md-4 control-label" for="DESCRICAO_ANIMAL">Descrição do pet</label> 
			    <div class="col-md-4">
	                <textarea class="form-control input-md rounded-0" id="DESCRICAO_ANIMAL" name="DESCRICAO_ANIMAL" type="text" placeholder="Descreva o seu pet aqui!" rows="5"></textarea>
	            </div>
  			</div>

	        <!-- Button -->
	        <div class="form-group">
	            <label class="col-md-4 control-label" for="Cadastrar_Pet_Adocao"></label>
	            <div class="col-md-4">
	                <button class="btn btn-primary" type="submit">Cadastrar Pet</button>
	            </div>
	        </div>
	    </fieldset>
	</form>
</div>
<?php $this->load->view('shared/rodape'); ?>
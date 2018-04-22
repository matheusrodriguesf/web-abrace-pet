<?php $this->load->view('shared/cabecalho'); ?>

<form class="form-horizontal" method="post" action="<?= base_url('salvar') ?>">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Name</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="NOMEANIMAL">Nome</label>  
            <div class="col-md-8">
                <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md">

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
                        <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-1" value="2">
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
                        <input type="radio" name="IND_VACINA" id="IND_VACINA-1" value="2">
                        Não
                    </label>
                </div>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="SEXO">Sexo</label>
            <div class="col-md-5">
                <select id="SEXO" name="SEXO" class="form-control">
                    <option value="1">Macho</option>
                    <option value="2">Femea</option>
                </select>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="Cadastrar"></label>
            <div class="col-md-4">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </div>
        </div>
    </fieldset>
</form>



<?php $this->load->view('shared/rodape'); ?>

<form class="form-horizontal" method="post" action="<?=base_url('pet/adocao/atualizar/' . $animal['IDANIMAL'])?>" enctype="multipart/form-data">
    <fieldset>

        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="NOMEANIMAL">Nome</label>  
            <div class="">
                <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md" value="<?=$animal['NOMEANIMAL']?>">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class=" control-label" for="IND_TIPO">Tipo do Pet</label>
            <div class="">
                <select id="IND_TIPO" name="IND_TIPO" class="form-control">
                    <option value="c" <?= ($animal['IND_TIPO'] == 'c') ? 'selected="selected"' : ''?>>Cachorro</option>
                    <option value="g" <?= ($animal['IND_TIPO'] == 'g') ? 'selected="selected"' : ''?>>Gato</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class=" control-label" for="SEXO">Sexo</label>
            <div class="">
                <select id="SEXO" name="SEXO" class="form-control">
                    <option value="m" <?= ($animal['SEXO'] == 'm') ? 'selected="selected"' : ''?>>Macho</option>
                    <option value="f" <?= ($animal['SEXO'] == 'f') ? 'selected="selected"' : ''?>>Femea</option>
                </select>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class=" control-label" for="IND_CASTRADO">Castrado:</label>
            <div class="">
                <div class="radio">
                    <label for="IND_CASTRADO-0">
                        <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-0" value="1" <?= ($animal['IND_CASTRADO'] == 1) ? 'checked="checked"' : ''?>>
                        Sim
                    </label>
                </div>
                <div class="radio">
                    <label for="IND_CASTRADO-1">
                        <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-1" value="0"  <?= ($animal['IND_CASTRADO'] == 0) ? 'checked="checked"' : ''?>>
                        Não
                    </label>
                </div>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class=" control-label" for="IND_VACINA">Animal vacinado:</label>
            <div class="">
                <div class="radio">
                    <label for="IND_VACINA-0">
                        <input type="radio" name="IND_VACINA" id="IND_VACINA-0" value="1"  <?= ($animal['IND_VACINA'] == 1) ? 'checked="checked"' : ''?>>
                        Sim
                    </label>
                </div>
                <div class="radio">
                    <label for="IND_VACINA-1">
                        <input type="radio" name="IND_VACINA" id="IND_VACINA-1" value="0" <?= ($animal['IND_VACINA'] == 0) ? 'checked="checked"' : ''?>>
                        Não
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <?php include 'mapa.php'; ?>
            </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
            <label class=" control-label" for="STATUS_ANIMAL">Status do pet</label>
            <div class="">
                <div class="radio">
                    <label for="STATUS_ANIMAL-0">
                        <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-0" value="1" <?= ($animal['STATUS_ANIMAL'] == 1) ? 'checked="checked"' : ''?>>
                        Lar temporário
                    </label>
                </div>
                <div class="radio">
                    <label for="STATUS_ANIMAL-1">
                        <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-1" value="0" <?= ($animal['STATUS_ANIMAL'] == 0) ? 'checked="checked"' : ''?>>
                        Adoção
                    </label>
                </div>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class=" control-label" for="PORTE">Porte</label>  
            <div class="">
                <input id="PORTE" name="PORTE" type="text" placeholder="Porte do Pet" class="form-control input-md" value="<?=$animal['PORTE']?>">
            </div>
        </div>


        <!-- Field -->
        <div class="form-group">
            <div class="">
                <?php include 'upload_view.php'; ?>
            </div>
        </div>

        <!-- Text Area -->
        <div class="form-group">
            <label class=" control-label" for="DESCRICAO_ANIMAL">Descrição do pet</label> 
            <div class="">
                <textarea class="form-control input-md rounded-0" id="DESCRICAO_ANIMAL" name="DESCRICAO_ANIMAL" type="text" placeholder="Descreva o seu pet aqui!" rows="5"><?=$animal['DESCRICAO_ANIMAL']?></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class=" control-label" for="Cadastrar_Pet_Adocao"></label>
            <div class="">
                <button class="btn btn-primary" type="submit">Atualizar Pet</button>
            </div>
        </div>
    </fieldset>
</form>

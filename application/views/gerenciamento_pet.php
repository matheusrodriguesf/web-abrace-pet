<?php $this->load->view('shared/cabecalho'); ?>
<div class="container">
  <!-- Modal ADOTAR -->
  <div class="modal fade" id="adicionarPet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastro de Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?=base_url('pet/adocao/add')?>" enctype="multipart/form-data">
            <fieldset>
                <!-- Text input-->
                <div class="form-group">
                    <label class="control-label" for="NOMEANIMAL">Nome</label>  
                    <div>
                        <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class=" control-label" for="IND_TIPO">Tipo do Pet</label>
                    <div class="">
                        <select id="IND_TIPO" name="IND_TIPO" class="form-control">
                            <option value="c">Cachorro</option>
                            <option value="g">Gato</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="control-label" for="SEXO">Sexo</label>
                    <div class="">
                        <select id="SEXO" name="SEXO" class="form-control">
                            <option value="m">Macho</option>
                            <option value="f">Femea</option>
                        </select>
                    </div>
                </div>

                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class=" control-label" for="IND_CASTRADO">Castrado:</label>
                    <div class="">
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
                    <label class=" control-label" for="IND_VACINA">Animal vacinado:</label>
                    <div class="">
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
                  <label class=" control-label">Localização</label>
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
                                <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-0" value="1" checked="checked">
                                Lar temporário
                            </label>
                        </div>
                        <div class="radio">
                            <label for="STATUS_ANIMAL-1">
                                <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-1" value="0">
                                Adoção
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class=" control-label" for="PORTE">Porte</label>  
                    <div class="">
                        <input id="PORTE" name="PORTE" type="text" placeholder="Porte do Pet" class="form-control input-md">
                    </div>
                </div>


                <!-- Field -->
                <div class="form-group">
                  <div class="">
                    <?php echo form_open_multipart('upload/do_upload');?> 
                    <label class=" control-label" for="FOTO_ANIMAL">Foto do pet</label>
                    <br /> 
                    <input type = "file" name = "userfile" size = "20" /> 
                    <br /><br /> 
                  </div>
                </div>

                <!-- Text Area -->
                <div class="form-group">
                <label class=" control-label" for="DESCRICAO_ANIMAL">Descrição do pet</label> 
                <div class="">
                        <textarea class="form-control input-md rounded-0" id="DESCRICAO_ANIMAL" name="DESCRICAO_ANIMAL" type="text" placeholder="Descreva o seu pet aqui!" rows="5"></textarea>
                    </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button class="btn btn-primary" type="submit">Cadastrar Pet</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Editar -->
  <div class="modal fade" id="editarPet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Pet</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="<?=base_url('pet/adocao/atualizar/' . $data['IDANIMAL'])?>" enctype="multipart/form-data">
            <fieldset>

                <!-- Form Name -->
                <legend>Cadastro do Pet</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="NOMEANIMAL">Nome</label>  
                    <div class="col-md-2">
                        <input id="NOMEANIMAL" name="NOMEANIMAL" type="text" placeholder="Nome do Pet" class="form-control input-md" value="<?=$data['NOMEANIMAL']?>">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="IND_TIPO">Tipo do Pet</label>
                    <div class="col-md-2">
                        <select id="IND_TIPO" name="IND_TIPO" class="form-control">
                            <option value="c" <?= ($data['IND_TIPO'] == 'c') ? 'selected="selected"' : ''?>>Cachorro</option>
                            <option value="g" <?= ($data['IND_TIPO'] == 'g') ? 'selected="selected"' : ''?>>Gato</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="SEXO">Sexo</label>
                    <div class="col-md-1">
                        <select id="SEXO" name="SEXO" class="form-control">
                            <option value="m" <?= ($data['SEXO'] == 'm') ? 'selected="selected"' : ''?>>Macho</option>
                            <option value="f" <?= ($data['SEXO'] == 'f') ? 'selected="selected"' : ''?>>Femea</option>
                        </select>
                    </div>
                </div>

                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="IND_CASTRADO">Castrado:</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label for="IND_CASTRADO-0">
                                <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-0" value="1" <?= ($data['IND_CASTRADO'] == 1) ? 'checked="checked"' : ''?>>
                                Sim
                            </label>
                        </div>
                        <div class="radio">
                            <label for="IND_CASTRADO-1">
                                <input type="radio" name="IND_CASTRADO" id="IND_CASTRADO-1" value="0"  <?= ($data['IND_CASTRADO'] == 0) ? 'checked="checked"' : ''?>>
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Multiple Radios -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="IND_VACINA">Animal vacinado:</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label for="IND_VACINA-0">
                                <input type="radio" name="IND_VACINA" id="IND_VACINA-0" value="1"  <?= ($data['IND_VACINA'] == 1) ? 'checked="checked"' : ''?>>
                                Sim
                            </label>
                        </div>
                        <div class="radio">
                            <label for="IND_VACINA-1">
                                <input type="radio" name="IND_VACINA" id="IND_VACINA-1" value="0" <?= ($data['IND_VACINA'] == 0) ? 'checked="checked"' : ''?>>
                                Não
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
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
                                <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-0" value="1" <?= ($data['STATUS_ANIMAL'] == 1) ? 'checked="checked"' : ''?>>
                                Lar temporário
                            </label>
                        </div>
                        <div class="radio">
                            <label for="STATUS_ANIMAL-1">
                                <input type="radio" name="STATUS_ANIMAL" id="STATUS_ANIMAL-1" value="0" <?= ($data['STATUS_ANIMAL'] == 0) ? 'checked="checked"' : ''?>>
                                Adoção
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="PORTE">Porte</label>  
                    <div class="col-md-2">
                        <input id="PORTE" name="PORTE" type="text" placeholder="Porte do Pet" class="form-control input-md" value="<?=$data['PORTE']?>">
                    </div>
                </div>


                <!-- Field -->
                <div class="form-group">
                    <div class="col-md-4">
                        <?php include 'upload_view.php'; ?>
                    </div>
                </div>

                <!-- Text Area -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="DESCRICAO_ANIMAL">Descrição do pet</label> 
                <div class="col-md-4">
                        <textarea class="form-control input-md rounded-0" id="DESCRICAO_ANIMAL" name="DESCRICAO_ANIMAL" type="text" placeholder="Descreva o seu pet aqui!" rows="5"><?=$data['DESCRICAO_ANIMAL']?></textarea>
                    </div>
              </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="Cadastrar_Pet_Adocao"></label>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Atualizar Pet</button>
                    </div>
                </div>
            </fieldset>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>
        Pets
      </h3>
      </br></br>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarPet">
        Adicionar Pet
      </button>
      </br></br>
      <table class="table">
        <!--Título da tebela-->
        <thead>
          <tr>
            <th>
              Nome
            </th>
            <th>
              Informação
            </th>
            <th>
              Excluir
            </th>
          </tr>
        </thead>
        <!--Fim título da tebela-->
        <!--Corpo da tebela-->
        <tbody>
          <!--Linha da tebela-->
          <td>
            Nome_animal
          </td>
          <td>
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editarPet">
              Editar
            </button>
          </td>
          <td>
            <button type="button" class="btn btn-warning btn-sm">
              Excluir
            </button>
          </td>
          <!--Fim linha da tebela-->
        </tbody>
        <!--Fim corpo da tebela-->
      </table>
    </div>
  </div>
</div>
<?php $this->load->view('shared/rodape'); ?>
<?php $this->load->view('shared/footer') ?>
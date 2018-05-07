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
          <?php include 'cadastro_pet_adocao.php'; ?>
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
          <!--<?php include 'atualizar_pet_adocao.php'; ?>-->
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
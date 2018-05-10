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

              <?php foreach ($animais as $indice => $animal) : ?>
                <?php 
                $this->load->model('Usuario_model');
                if($this->Usuario_model->ChecaUsuarioAnimal($animal['IDANIMAL']) && $this->session->userdata("usuario_logado")) : ?>
              <tr>
                <td>
                  <a href="detalhe_pet/<?=$animal['IDANIMAL']?>"><?=$animal['NOMEANIMAL']?></a>
                </td>
                <td>
                  <form action="<?= base_url('pet/atualizar/' . $animal['IDANIMAL'])?>" method="post">
                      <button class="btn btn-info">Editar Animal</button>
                  </form>
                </td>
                <td>
                  <form action="<?= base_url('pet/adocao/delete/' . $animal['IDANIMAL'])?>" method="post">
                    <button class="btn btn-success">Animal já adotado</button>
                  </form>
                </td>
              </tr>
              <?php endif ?>
              <?php endforeach ?>
              <!--Fim linha da tebela-->
              
            </tbody>
            <!--Fim corpo da tebela-->
          </table>

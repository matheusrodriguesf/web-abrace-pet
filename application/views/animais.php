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
              <tr>
                <td>
                  <a href="detalhe/<?=$animal['IDANIMAL']?>"><?=$animal['NOMEANIMAL']?></a>
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
              </tr>

              <?php endforeach ?>
              <!--Fim linha da tebela-->
              
            </tbody>
            <!--Fim corpo da tebela-->
          </table>

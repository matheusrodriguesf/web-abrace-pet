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

          <?php if ($pets == FALSE): ?>
                <tr><td colspan="2">Nenhum pet encontrado</td></tr>
            <?php else: ?>
                <?php foreach ($pets as $row): ?>
                    <tr>
                        <td><?= $row->NOMEANIMAL ?></td>
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
                <?php endforeach; ?>
            <?php endif; ?>
          <!--Fim linha da tebela-->
        </tbody>
        <!--Fim corpo da tebela-->
      </table>
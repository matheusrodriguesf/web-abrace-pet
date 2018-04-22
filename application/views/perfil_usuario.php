<?php $this->load->view('shared/cabecalho'); ?>

<body>
    <div id="list" class="row">
        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Animal</th>
                        <th>Espécie</th>
                        <th>Status</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($messages as $row): ?>
                        <tr>
                            <td><?= $row['IDANIMAL'] ?></td>
                            <td><?= $row['NOMEANIMAL'] ?></td>
                            <td class="actions">
                                <a class="btn btn-success btn-xs" href="#">Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="#">Editar</a>
                                <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php $this->load->view('shared/footer') ?>
    <?php $this->load->view('shared/rodape'); ?>


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

	<table class="table">
		<thead>
			<tr>
			  	<th scope="col">Nome</th>
			  	<th scope="col">Sexo</th>
			  	<th scope="col">Descrição</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($pets == FALSE): ?>
				<tr><td colspan="2">Nenhum pet encontrado</td></tr>
			<?php else: ?>
				<?php foreach ($pets as $row): ?>
					<tr>
						<td><?= $row->NOMEANIMAL ?></td>
						<td><?= $row->SEXO ?></td>
						<td><?= $row->DESCRICAO_ANIMAL ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>


<?php $this->load->view('shared/rodape'); ?>
<!DOCTYPE html>
<html>

	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Page Title</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	    <script src="main.js"></script>
	</head>

	<body>
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

			<div>
				<table>
					<caption>Contatos</caption>
					<thead>
						<tr>
							<th>Nome</th>
							<th>Idade</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($pets == FALSE): ?>
							<tr><td colspan="2">Nenhum contato encontrado</td></tr>
						<?php else: ?>
							<?php foreach ($pets as $row): ?>
								<tr>
									<td><?= $row['nome'] ?></td>
									<td><?= $row['idade'] ?></td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>


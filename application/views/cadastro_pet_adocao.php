<!DOCTYPE html>
<html>

	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Abrace Pets - Adoção</title>
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

			<form method="post" action="<?=base_url('pet/adocao/add')?>" enctype="multipart/form-data">
				<div>
					<label>Nome do Animal:</label>
					<input type="text" name="nomeanimal" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Sexo:</label>
					<input type="text" name="sexo" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Idade:</label>
					<input type="text" name="idade" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Raça:</label>
					<input type="text" name="raca" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Tipo de Raça:</label>
					<input type="text" name="tp_raca" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Cor da Pelagem:</label>
					<input type="text" name="cor_pelagem" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Castrado:</label>
					<input type="text" name="castrado" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label>Vacinado:</label>
					<input type="text" name="vacinado" value="<?=set_value('')?>" required/>
				</div>

				<div>
					<label><em>Todos os campos são obrigatórios.</em></label>
					<input type="submit" value="Salvar"/>
				</div>
			</form>
		</div>
	</body>
</html>
<?php $this->load->view('shared/cabecalho'); ?>

<div id="container">
	<h1>Abrace Pets</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

		<!--Para retornar alguma informação do usuario é so usar $this->session->userdata('usuario_logado')['colunatable']-->
		<!--colunatable são as colunas da tabela do RESPOSAVEL_ANIMAL-->
		<p>Nome do Usuario: <?php echo($this->session->userdata('usuario_logado')['NOME']); ?></p>
		<a class="btn btn-primary" href="<?= base_url('login/usuario/deslogar') ?>" role="button">Deslogar</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<?php $this->load->view('shared/rodape'); ?>
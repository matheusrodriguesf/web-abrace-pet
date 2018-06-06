<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/css_geral_paginas.min.css') ?>" rel="stylesheet">

        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        
        <!-- Funções para validação de CPF e CNPJ -->
        <script src="<?= base_url('assets/js/valida_cpf_cnpj.js') ?>"></script>

        <!-- Valida data -->
        <script src="<?= base_url('assets/js/validar_data.js') ?>"></script>
        
        <!-- Formatando o CPF ou CNPJ || E valida o campo data-->
        <script src="<?= base_url('assets/js/exemplo_3.js') ?>"></script>

        

        <style>
    
          #map {
           height:300px;
           width:500px;
          }
        
        </style>
    </head>
    <body>
        <?php $this->load->view('shared/nav-bar'); ?>

		<?php if ($this->session->flashdata('error') == TRUE): ?>
			<p><?php echo $this->session->flashdata('error'); ?></p>
		<?php endif; ?>

		<?php if ($this->session->flashdata('success') == TRUE): ?>
			<p><?php echo $this->session->flashdata('success'); ?></p>
		<?php endif; ?>


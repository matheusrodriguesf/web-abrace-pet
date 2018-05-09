<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/css_geral_paginas.min.css') ?>" rel="stylesheet">

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


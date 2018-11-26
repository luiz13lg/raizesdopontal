<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Raizes do Pontal</title>
	<link rel="icon" href='./assets/imagens/tree.png'>

	<link href="<?= base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/estilo.css")?>">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Paytone+One" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
</head>
<body><!-- <body style="height: 500vh"> -->
	<nav class="nav navbar-fixed-top navbar-inverse navbar-transparente">
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#barra-navegacao">
					<span class="sr-only">Alternar navegação</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo base_url('Welcome/')?>" class="navbar-brand">
					<span class="img-logo">Raízes do Pontal</span>
				</a>				
			</div> <!--Reponsivo -->

			<div class="collapse navbar-collapse" id="barra-navegacao">
          		<ul class="nav navbar-nav navbar-right">
            		<!--<li><a href="#">Receitas</a></li>-->
            		<li><a href="<?php echo base_url('Sugestoes/')?>">Sugestões</a></li>
            		<li><a href="<?php echo base_url('Galeria/')?>">Galeria</a></li>
            		<li><a href="<?php echo base_url('Receita/receitas')?>">Receita</a></li>
            		<li><a href="<?php echo base_url('Login/')?>">Entrar</a></li>
          		</ul>
        	</div>
		</div>
	</nav>

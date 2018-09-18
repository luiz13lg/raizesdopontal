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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
				<a href="#" class="navbar-brand">
					<span class="img-logo">Raízes do Pontal</span>
				</a>				
			</div> <!--Reponsivo -->

			<div class="collapse navbar-collapse" id="barra-navegacao">
          		<ul class="nav navbar-nav navbar-right">
            		<li><a href="<?php echo base_url('Receita/')?>">Receitas</a></li>
            		<li><a href="<?php echo base_url('Sugestao/')?>">Sugestões</a></li>
            		<li><a href="<?php echo base_url('Comprar/')?>">Compre</a></li>
            		<li><a href="<?php echo base_url('Login/')?>">Entrar</a></li>
          		</ul>
        	</div>
		</div>
	</nav>
	
	<!-- <section class="row">
		<div class="parallax">
			<div class="texto-capa col-md-6 offset-md-3">
				<h1>Raízes do Pontal</h1>
			</div>	
		</div>
	</section> -->

<section id="parallaxBar" data-speed="6" data-type="background">
    <div class="container-fluid">
    	<h1>Raízes do Pontal</h1>
    </div>
</section>
	

	<section  id="projeto" class="row">
		<div class="container">
			<div class="row">
				<div class ="col-md-6" style="margin-top: 9vh">
					<h2>Sobre o Projeto</h2>
				</div>
				<div class="col-md-6">
					<h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quaerat inventore dolorem iure, eum in nostrum vero reprehenderit recusandae cupiditate ad quod voluptatum distinctio sapiente perferendis ex. Nostrum, veniam, enim!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae aperiam at suscipit consectetur rem possimus culpa adipisci similique sint, soluta ea quos, tempore totam aut ducimus impedit nisi aliquid eius.</p>
					</h3>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
  <h2>Galeria</h2>  
  <div class="">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./assets/imagens/3.jpg" alt="batatinha" style="width:100%;">
      </div>

      <div class="item">
        <img src="./assets/imagens/5.jpg" alt="tomatito" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="./assets/imagens/6.jpg" alt="alfacinho" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
	<footer class="rodape">
		<div>
			<h4>Desenvolvido por: Giulia Campos de Oliveira e Luiz Guilherme Thomaz</h4>
		</div>
	</footer>

	

</body>

<script>
$(document).ready(function(){
    $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);   
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                var coords = '50% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });    
            });
   });  
});
</script>

</html>
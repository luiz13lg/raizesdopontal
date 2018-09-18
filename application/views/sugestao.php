<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Raizes do Pontal - Sugestões</title>
	<link rel="icon" href='./assets/imagens/tree.png'>

	<link href="<?= base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/estilo.css")?>">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Paytone+One" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
				<a href="index.html" class="navbar-brand">
					<span class="img-logo">Raízes do Pontal</span>
				</a>				
			</div> <!--Reponsivo -->

			<div class="collapse navbar-collapse" id="barra-navegacao">
          		<ul class="nav navbar-nav navbar-right">
            		<li><a href="receitas.html">Receitas</a></li>
            		<li><a href="sugestao.html">Sugestões</a></li>
            		<li><a href="comprar.html">Compre</a></li>
            		<li><a href="login.html">Entrar</a></li>
          		</ul>
        	</div>
		</div>
	</nav>


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
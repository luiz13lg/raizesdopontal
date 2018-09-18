<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Raizes do Pontal - Receitas</title>
	<link rel="icon" href='./assets/imagens/tree.png'>

	<link href="<?= base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Paytone+One" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/estilo.css")?>">

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
            		<li><a href="receitas.html">Receitas</a></li>
            		<li><a href="sugestao.html">Sugestões</a></li>
            		<li><a href="comprar.html">Compre</a></li>
            		<li><a href="login.html">Entrar</a></li>
          		</ul>
        	</div>
		</div>
	</nav>

	 <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 col-md-6 col-lg-3">
    				<!--Card-->
					<div class="card hoverable">

					    <!--Card image-->
					    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">

					    <!--Card content-->
					    <div class="card-body">
					        <!--Title-->
					        <h4 class="card-title">Indonectetus facilis</h4>
					        <!--Text-->
					        <p class="card-text">Dignissimmorbi rhoncus sed netus ligula conseque netus nulla aliquat id dui fermentumnec.</p>
					    </div>

					</div>
					<!--/.Card-->
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3">
    				<!--Card-->
					<div class="card hoverable">

					    <!--Card image-->
					    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">

					    <!--Card content-->
					    <div class="card-body">
					        <!--Title-->
					        <h4 class="card-title">Indonectetus facilis</h4>
					        <!--Text-->
					        <p class="card-text">Dignissimmorbi rhoncus sed netus ligula conseque netus nulla aliquat id dui fermentumnec.</p>
					    </div>

					</div>
					<!--/.Card-->
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3">
    				<!--Card-->
					<div class="card hoverable">

					    <!--Card image-->
					    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img%20%283%29.jpg" class="img-fluid">

					    <!--Card content-->
					    <div class="card-body">
					        <!--Title-->
					        <h4 class="card-title">Indonectetus facilis</h4>
					        <!--Text-->
					        <p class="card-text">Dignissimmorbi rhoncus sed netus ligula conseque netus nulla aliquat id dui fermentumnec.</p>
					    </div>

					</div>
					<!--/.Card-->
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3">
    				<!--Card-->
					<div class="card hoverable">

					    <!--Card image-->
					    <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="img-fluid" alt="">

					    <!--Card content-->
					    <div class="card-body">
					        <!--Title-->
					        <h4 class="card-title">Indonectetus facilis</h4>
					        <!--Text-->
					        <p class="card-text">Dignissimmorbi rhoncus sed netus ligula conseque netus nulla aliquat id dui fermentumnec.</p>
					    </div>

					</div>
					<!--/.Card-->
    			</div>
    		</div>
    	</div>
    </section>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>

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
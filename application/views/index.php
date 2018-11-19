
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
				<div class ="col-md-4" style="margin-top: 9vh">
					<h2>Sobre o Projeto</h2>
				</div>
				<div class="col-md-8">
					<h4>
						<p>O Projeto Cestas Agroecológicas e Solidárias “Raízes do Pontal”, surge com o objetivo de contribuir com a comercialização da produção de alimentos realizada por famílias camponesas do assentamento Gleba XV de Novembro, nos municípios de Euclides da Cunha Paulista e Rosana, no extremo Oeste do estado de São Paulo. O projeto é fruto da parceria entre pesquisadores do CEGeT (Centro de Estudos de Geografia do Trabalho) e o Setor de Produção do MST (Movimento dos Trabalhadores Rurais Sem Terra). A Cestas são comercializadas na UNESP/FCT, sendo o público consumidor a comunidades acadêmica (docentes, alunos e servidores) e comunidade local (morados da cidade de Presidente Prudente). As Cestas são de dois tipos: a grande, com cerca de 12 a 15 variedades de alimentos, aproximadamente 12kg de peso e são adquiridas pelo valor unitário de R$50,00; e a pequena, compostas de 9 a 12 variedades de alimentos, aproximadamente 7kg, a um custo de R$30,00. As Cestas são comercializadas quinzenalmente, e a divulgação do projeto é feita em página de duas redes sociais na internet e através do telefone.</p>
					</h4>
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
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../assets/imagens/foto1.jpeg" alt="foto 1" style="width:100%;">
      </div>

      <div class="item">
        <img src="../assets/imagens/foto12.jpeg" alt="foto 2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="../assets/imagens/foto3.jpeg" alt="foto 3" style="width:100%;">
      </div>

      <div class="item">
        <img src="../assets/imagens/foto4.jpeg" alt="foto 4" style="width:100%;">
      </div>

      <div class="item">
        <img src="../assets/imagens/foto5.jpeg" alt="foto 5" style="width:100%;">
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
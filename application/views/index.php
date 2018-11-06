
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
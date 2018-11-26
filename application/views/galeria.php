	<div class="container">
		<h3> Gambiarra </h3>
	</div>
	<div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="gallery-title">Galeria</h2>
        </div>

        <!-- <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">HDPE Pipes</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
        </div> -->
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../assets/imagens/foto1.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="../assets/imagens/foto2.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../assets/imagens/foto3.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../assets/imagens/foto4.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../assets/imagens/foto5.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../assets/imagens/foto13.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../assets/imagens/foto7.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../assets/imagens/foto8.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="../assets/imagens/foto9.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="../assets/imagens/foto10.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="../assets/imagens/foto11.jpeg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="../assets/imagens/foto12.jpeg" class="img-responsive">
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){

	    $(".filter-button").click(function(){
	        var value = $(this).attr('data-filter');
	        
	        if(value == "all")
	        {
	            //$('.filter').removeClass('hidden');
	            $('.filter').show('1000');
	        }
	        else
	        {
	//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
	//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
	            $(".filter").not('.'+value).hide('3000');
	            $('.filter').filter('.'+value).show('3000');
	            
	        }
	    });
	    
	    if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
			}
		$(this).addClass("active");

	});
    </script>
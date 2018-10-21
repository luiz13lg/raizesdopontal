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

    <div class="text-center">
    	<a href="<?php echo base_url('Receita/nova')?>" class="btn btn-success">Adicionar nova</a>
    </div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>

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
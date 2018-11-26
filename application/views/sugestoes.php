	<div class="container">
		<h3> Gambiarra </h3>
	</div>
	<div class="container" style="width:60%">
		<h2> Sugestões </h2>
		<form  method="post" action="<?= base_url()?>Login/autentication">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Descrição</label>
		    <textarea class="form-control" rows="5" id="sugestao" name="sugestao" placeholder="Descrição"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
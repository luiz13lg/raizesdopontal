<div class="container">
	<h3> Login </h3>
</div>
<div class="container-fluid">
	<h2> Login </h2>
</div>
<div class="container">
	<form  method="post" action="<?= base_url()?>Login/autentication">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Senha</label>
	    <input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required>
	  </div>
	  <button type="submit" class="btn btn-success">Entrar</button>
	</form>

		<div  >
				<a href="#">Primeiro acesso</a>
		</div>
		<div  >
				<a href="#">Esqueceu sua senha</a>
		</div>

</div>


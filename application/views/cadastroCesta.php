<div class="container">
    <h3> Gambiarra </h3>
  </div>
<div class="container">
    <h2> Cadastro de Cesta </h2>
    <hr>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Cesta/cadastro">
        <div class="col-md-12">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="fruta" name="fruta" placeholder="Frutas" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="legume" name="legume" placeholder="Legumes" type="text" required>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="verdura" name="verdura" placeholder="Verduras" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="raiz" name="raiz" placeholder="Raízes" type="text" required>
            </div>
          </div>

          
        </div>
      </form>
    </div>
  </div>
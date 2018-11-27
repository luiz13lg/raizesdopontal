<div class="container">
    <h2> Cadastro de Cesta </h2>
    <hr>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Cesta/nova">
        <div class="col-md-2">
          
        </div>
        <div class="col-md-10">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="frutas" name="frutas" placeholder="Frutas" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="legumes" name="legumes" placeholder="Legumes" type="text" required>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="verduras" name="verduras" placeholder="Verduras" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="raizes" name="raizes" placeholder="Raízes" type="text" required>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <select name="descricao">
                <option id="descricao" name="descricao" value="grande">Grande</option>
                <option id="descricao" name="descricao" value="pequena">Pequena</option>
              </select>
            </div>

            <div class="col-sm-6 form-group">
              <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade" min = '1' required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <button class="btn pull-right btn-success" type="submit">Adicionar</button>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

  
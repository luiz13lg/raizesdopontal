<div class="container">
    <h3> Gambiarra </h3>
  </div>
<div class="container">
    <h2> Cadastro de Produto </h2>
    <hr>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Produto/new">
        <div class="col-md-8">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="produtonome" name="produtonome" placeholder="Nome do Produto" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input type="number" name="quantidadeproduto" class="form-control" id="quantidadeproduto" placeholder="Quantidade" min = '1' required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <input type="radio" name="unidademedida" value="KG" id="unidademedida">KG <br>
              <input type="radio" name="unidademedida" value="Duzia" id="unidademedida"> Duzia <br>
              <input type="radio" name="unidademedida" value="Unitario" id="unidademedida"> Unitario <br>
            </div>
            <div class="col-sm-6 form-group">
              <input type="text" name="valor" class="form-control" id="valorproduto" placeholder="Valor">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
              <input type="text" name="descricao" class="form-control" id="descricaoproduto" placeholder="Descrição" required>
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
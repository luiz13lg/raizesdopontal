<div class="container">
    <h3> Gambiarra </h3>
  </div>
<div class="container">
    <h2> Cadastro de Receita </h2>
    <hr>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Receita/nova">
        <div class="col-md-12">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da Receita" required>
            </div>
            <div class="col-sm-6 form-group">
              <input type="text" name="ingrediente" class="form-control" id="ingrediente" placeholder="Ingredientes" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
              <textarea class="form-control" name="descricao" id="descricao" placeholder="Modo de Preparo" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              Selecione uma foto: <input type="file" name="fotoReceita">
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
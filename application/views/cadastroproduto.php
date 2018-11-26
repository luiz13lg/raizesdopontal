<div class="container">
    <h3> Gambiarra </h3>
  </div>
<div class="container">
    <h2> Cadastro de Produto </h2>
    <hr>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Produto/novo">
        <div class="col-md-12">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="nome" name="nome" placeholder="Nome do Produto" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <select>
                <option value="frutas">Fruta</option>
                <option value="legumes">Legume</option>
                <option value="verdura">Verdura</option>
                <option value="raiz">Raíz</option>
              </select>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade" min = '1' required>
            </div>
          </div>
          <div class="row">
            <!-- informar na descricao -->
            <!-- <div class="col-sm-6 form-group">
              <input type="radio" name="unidademedida" value="KG" id="unidademedida">KG <br>
              <input type="radio" name="unidademedida" value="Duzia" id="unidademedida"> Duzia <br>
              <input type="radio" name="unidademedida" value="Unitario" id="unidademedida"> Unidade <br>
            </div> -->
            <div class="col-sm-6 form-group">
              <input type="text" name="valor" class="form-control" id="valor" placeholder="Valor">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
              <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" required>
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
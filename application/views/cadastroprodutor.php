  <div class="container">
    <div class="col-md-10 col-md-offset-2">
      <h2> Cadastro de Produtor </h2>
    </div>
    <div class="col-md-10 col-md-offset-2">
      <div class="alert alert-<?= $this->session->color ?>" role="alert">
          <?= $this->session->mensagem ?>
      </div>
    </div>
    <div class="row" position="center">
       <form  method="post" action="<?= base_url()?>Admin/salvarProdutor">
          <div class="col-md-10 col-md-offset-2">
            <div class="col-sm-12 form-group">
                <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
                <input class="form-control" id="email" name="email" placeholder="E-mail" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="senha" name="senha" placeholder="Senha" type="password" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="telefone" name="telefone" placeholder="Telefone" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="rua" name="rua" placeholder="Rua" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="numero" name="numero" placeholder="Nº" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="bairro" name="bairro" placeholder="Bairro" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="cidade" name="cidade" placeholder="Cidade" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="estado" name="estado" placeholder="Estado" type="text" required>
            </div>
            <div class="col-md-12 form-group">
              <button class="btn pull-right btn-success" type="submit">Adicionar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
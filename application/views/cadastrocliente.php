  <div class="container">
    <h3> Gambiarra </h3>
  </div>
  <div class="container">
    <h2> Cadastro de Cliente </h2>
    <div class="row" position="center">
       <form  method="post" action="<?= base_url()?>Cliente/salvar">
        <div class="col-md-8">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="clientenome" name="nome" placeholder="Nome" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="clienteemail" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clientesenha" name="senha" placeholder="Senha" type="password" maxlenght="6" required>
              </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clienteconfsenha" name="confsenha" placeholder="Confirmar Senha" type="password" required>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="clientetelefone" name="telefone" placeholder="Telefone" type="text" required>
              </div>  
          </div>
          <div class="row">
            <div class="col-sm-10 form-group">
                <input class="form-control" id="clienteendereco" name="rua" placeholder="Endereco" type="text" required>
            </div>
            <div class="col-sm-2 form-group">
                <input class="form-control" id="clientenumero" name="numero" placeholder="Número" type="text" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
                <input class="form-control" id="clientecidade" name="cidade" placeholder="Cidade" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clientebairro" name="bairro" placeholder="Bairro" type="text" required>
            </div>
            <div class="col-sm-2 form-group">
                <input class="form-control" id="clienteestado" name="estado" placeholder="Estado" type="text" required>
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
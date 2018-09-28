  <div class="container">
    <h3> Gambiarra </h3>
  </div>
  <div class="container">
    <h2> Cadastro de Cliente </h2>
    <div class="row">
      <form  method="post" action="<?= base_url()?>Cliente/register">
        <div class="col-md-8">
          <div class="row text-center">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="clientenome" name="clientenome" placeholder="Nome" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="clienteemail" name="clienteemail" placeholder="Email" type="email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clientesenha" name="clientesenha" placeholder="Senha" type="password" required>
              </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clienteconfsenha" name="clienteconfsenha" placeholder="Confirmar Senha" type="password" required>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="clientecpf" name="clientecpf" placeholder="CPF" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="clientetelefone" name="clientetelefone" placeholder="Telefone" type="text" required>
              </div>  
          </div>
          <div class="row">
            <div class="col-sm-12 form-group">
                <input class="form-control" id="clienteendereco" name="clienteendereco" placeholder="Endereco" type="text" required>
              </div> 
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
                <input class="form-control" id="clientecidade" name="clientecidade" placeholder="Cidade" type="text" required>
              </div>
              <div class="col-sm-2 form-group">
                <input class="form-control" id="clienteestado" name="clienteestado" placeholder="Estado" type="text" required>
              </div>
              <div class="col-sm-4 form-group">
                <input class="form-control" id="clientepais" name="clientepais" placeholder="Pais" type="text" required>
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
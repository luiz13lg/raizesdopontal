  <div class="container">
  <h3> Gambiarra </h3>
</div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <h3 style="color: #B22222">Produtos disponíveis esta semana!</h3>
        <div class="card">
                    <div class="card-body">
                        <!-- Tabela de Funcionarios ativos -->
                        <table class="table table-striped table-condensed table-datatable">
                          <thead>
                          <tr>
                              <th>Nome</th>
                              <th>Descrição</th> 
                              <th>Quantidade</th>
                              <th>Preço</th>                                          
                          </tr>
                          </thead> 
                          <tbody>
                              <?php foreach ($resultado as $key => $value) { ?>
                              <tr>
                              <td><?= $value->nomeProduto ?></td>
                              <td><?= $value->descricaoProduto ?></td>
                              <td><?= $value->qtdProduto ?></td>
                              <td><?= $value->valorProduto ?></td>
                              </tr>
                              <?php } ?>

                          </tbody>  
                        </table>
                    </div>
                </div>
      </div>
      </div>
    </div>
  </div>
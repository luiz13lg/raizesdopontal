  <div class="container">
  <h3> Gambiarra </h3>
</div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <h3 style="color: #B22222">Cestas desta semana!</h3>
        <div class="card">
                        <div class="card-body">
                            <!-- Tabela de Funcionarios ativos -->
                            <table class="table table-striped table-condensed table-datatable">
                              <thead>
                              <tr>
                                  <!-- <th>Quantidade</th> -->
                                  <th>Tamanho</th>
                                  <th>Quantidade</th>  
                                  <th>Legumes</th> 
                                  <th>Frutas</th>
                                  <th>Verduras</th>
                                  <th>Raizes</th>                         
                              </tr>
                              </thead> 
                              <tbody>
                                  <?php foreach ($resultadoCesta as $key => $value) { ?>
                                  <tr>
                                  <td><?= $value->tipoCesta ?></td>
                                  <td><?= $value->qtdCesta ?></td>
                                  <td><?= $value->legumesCesta ?></td>
                                  <td><?= $value->frutasCesta ?></td>
                                  <td><?= $value->verdurasCesta ?></td>
                                  <td><?= $value->raizesCesta ?></td>
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
<div class="container">
    <div class="col-md-10 col-md-offset-2">
      <h2> Cadastro de Cesta </h2>
    </div>
    
    <div class="col-md-10 col-md-offset-2">
      <div class="alert alert-<?= $this->session->color ?>" role="alert">
          <?= $this->session->mensagem ?>
      </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
          <!-- <h3 style="color: #B22222">Produtos Disponíveis</h3> -->
          <div class="card-body">

            <!-- Tabela de Funcionarios ativos -->
            <table class="table table-striped table-condensed table-datatable">
              <thead>
                <tr>
                  <th>Produtor</th>
                  <th>Nome</th>
                  <!-- <th>Descrição</th>  -->
                  <th>Quantidade</th>                                         
                  <th>Quantidade Cesta</th>
                  <th>Tamanho</th>                                        
                </tr>
              </thead> 
              <tbody>
                <?php foreach ($resultado as $key => $value) { ?>
                <tr>
                  <td><?= $value->nomeUsuario ?></td>
                  <td><?= $value->nomeProduto ?></td>
                  <!-- <td><?= $value->descricaoProduto ?></td> -->
                  <td><?= $value->qtdProduto ?></td>
                  <td>                   
                    <input class="form-control" style="width:100px" id="qtdCesta<?=$value->idProduto?>" name="qtdCesta" type="text" placeholder="0">
                  </td>
                  <td>
                    <select id="descricao<?=$value->idProduto?>" name="descricao" class="form-control">
                      <option  name="descricao" value="grande">Grande</option>
                      <option  name="descricao" value="pequena">Pequena</option>
                    </select>
                  </td>
                  <td></td>
                  <td>
                    <a class="btn btn-sm btn-success" onClick=addCesta(<?= $value->idProduto?>) href="#">
                      Adicionar
                    </a>
                  </td>
                </tr>
                <?php } ?>

              </tbody>  
            </table>
          </div>
        </div>

      <script>
        var valores = <?= json_encode($resultado); ?>;
        // console.log(valores);
        function addCesta(idProduto){
          var linha = 'qtdCesta'.concat(idProduto);
          var qtdProduto = document.getElementById(linha).value;

          linha = 'descricao'.concat(idProduto);
          var tipoCesta = document.getElementById(linha).value;

          console.log(idProduto);
          console.log(qtdProduto);
          console.log(tipoCesta);

          var url = window.location.host;
          console.log(url);
          location.href = ('/raizesdopontal/Admin/addCesta?idProduto='+idProduto+'&qtdProduto='+qtdProduto+'&tipoCesta='+tipoCesta);
        }
      </script>


      <!-- <form  method="post" action="<?= base_url()?>Cesta/nova">
        <div class="col-md-10 col-md-offset-2">
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
              <select name="descricao" class="form-control">
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
      </form> -->
    </div>
  </div>

  
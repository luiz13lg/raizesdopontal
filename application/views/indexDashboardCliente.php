<?php
    $logado = $_SESSION['nome'];
?>

<body>

        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-left">
                        <li><p style="margin: 20px 10px 10px 3px"><?php echo "Bem vindo, ".$logado."!" ?></p></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Cliente/logout/') ?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <h3 style="color: #B22222">Cesta Grande</h3>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-condensed table-datatable">
                              <thead>
                              <tr>
                                  <th>Produto</th> 
                                  <th>Qtd Produto</th>
                              </tr>
                              </thead> 
                              <tbody>
                                <?php foreach ($cestaGrande as $key => $value) { ?>
                                  <tr>
                                  <td><?= $value->nomeProduto?></td>
                                  <td><?= $value->qtdProdutoCesta?></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>  
                              </table>
                        </div>
                      </div>
                    
                    <div style="text-align:center">
                        <a class="btn btn-sm btn-success" href="<?= base_url('Cliente/reservarCestaGrande/')?>">
                            Reservar
                        </a>
                    </div>

                    <h3 style="color: #B22222">Cesta Pequena</h3>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped table-condensed table-datatable">
                              <thead>
                              <tr>
                                  <th>Produto</th> 
                                  <th>Qtd Produto</th>                   
                              </tr>
                              </thead> 
                              <tbody>
                                  <?php foreach ($cestaPequena as $key => $value) { ?>
                                  <tr>
                                  <td><?= $value->nomeProduto?></td>
                                  <td><?= $value->qtdProdutoCesta?></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>  
                              </table>
                        </div>
                      </div>
                    <div style="text-align:center">
                        <a class="btn btn-sm btn-success" href="<?= base_url('Cliente/reservarCestaPequena/')?>">
                            Reservar
                        </a>
                    </div>
                    
                    <h3 style="color: #B22222">Produtos Disponíveis</h3>
                          <div class="card">
                            <div class="card-body">

                              <table class="table table-striped table-condensed table-datatable">
                                <thead>
                                  <tr>
                                    <th>Produtor</th>
                                    <th>Nome</th>
                                    <th>Descrição</th> 
                                    <th>Quantidade</th>
                                    <th>Preço</th>                                      
                                  </tr>
                                </thead> 
                                <tbody>
                                  <?php foreach ($resultado as $key => $value) { ?>
                                  <tr>
                                    <td><?= $value->nomeUsuario ?></td>
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



    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


    <script type="text/javascript">
    
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

    </html>
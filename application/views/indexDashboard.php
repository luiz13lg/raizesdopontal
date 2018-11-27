<?php
    $logado = $_SESSION['nome'];
?>


<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Raizes do Pontal</a> -->
                </div>
                <div class="collapse navbar-collapse">
                                       <!--  <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul> -->
                    <ul class="nav navbar-nav navbar-left">
                        <li><p style="margin: 20px 10px 10px 3px"><?php echo "Bem vindo, ".$logado."!" ?></p></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="#">
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
                    <h3 style="color: #B22222">Cestas Disponíveis</h3>
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
                                  <th></th>                           
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
                                  <td>
                                    <button class="btn btn-sm btn-primary" <?php echo base_url('Admin/removerProduto') ?>>
                                        Editar
                                    </button>
                                  </td>
                                  </tr>
                                  <?php } ?>

                              </tbody>  
                            </table>
                        </div>
                     </div>
                    
                    <h3 style="color: #B22222">Produtos que serão vendidos</h3>
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
                              <td>
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url('Admin/removerProduto/'.$value->idProduto) ?>">
                                        Remover
                                    </a>
                              </td>
                              </tr>
                              <?php } ?>

                          </tbody>  
                        </table>
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
